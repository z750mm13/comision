<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Subarea;
use App\Area;
use App\Compliment;
use App\Norm;
use App\Requirement;
use App\NormsOfArea;
use App\Review;
use App\Validity;

use Tools\Query\Reviews;
use Tools\Query\Norms;
use Tools\Utils\Fecha;
class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index() {
        $subareas  = Subarea::select(DB::raw('count(reviews.id) as problems, subareas.*'))
        ->leftJoin('targets', 'targets.subarea_id', '=', 'subareas.id')
        ->leftJoin('questionnaires', 'questionnaires.id', '=', 'targets.questionnaire_id')
        ->leftJoin('questions', 'questions.questionnaire_id', '=', 'questionnaires.id')
        ->leftJoin('reviews', function ($join) {
            $join->on([
                ['questions.id', 'reviews.question_id'],
                ['targets.id', 'reviews.target_id']
            ])
            ->where([
                ['reviews.valor', false]
            ])
            ->whereNotIn('reviews.id',
            Review::select('reviews.id')
            ->join('commitments', 'reviews.id', '=', 'commitments.review_id')
            ->join('compliments', 'commitments.id', '=', 'compliments.commitment_id')
            ->get()
        );
        })
        ->groupBy('subareas.id')
        ->orderBy('subareas.id', 'ASC')->get();

        $sqarea = Area::select(DB::raw('areas.*, norms.id AS norm'))
        ->distinct()
        ->leftJoin('subareas', 'subareas.area_id', '=', 'areas.id')
        ->leftJoin('targets', 'targets.subarea_id', '=', 'subareas.id')
        ->leftJoin('questionnaires', 'questionnaires.id', '=', 'targets.questionnaire_id')
        ->leftJoin('requirements', 'requirements.id', '=', 'questionnaires.requirement_id')
        ->leftJoin('norms', 'norms.id', '=', 'requirements.norm_id');

        $norms_areas = Area::select(DB::raw('id,nombre,area,color,deleted_at,created_at,updated_at,count(norm)as norms'))
        ->from(DB::raw(' ( ' . $sqarea->toSql() . ' ) AS areas '))
        ->groupBy('id','nombre','area','color','deleted_at','created_at','updated_at');

        $problems_areas = Area::select(DB::raw('count(reviews.id) as problems,areas.*'))
        ->join('subareas', 'subareas.area_id', '=', 'areas.id')
        ->leftJoin('targets', 'targets.subarea_id', '=', 'subareas.id')
        ->leftJoin('questionnaires', 'questionnaires.id', '=', 'targets.questionnaire_id')
        ->leftJoin('questions', 'questions.questionnaire_id', '=', 'questionnaires.id')
        ->leftJoin('reviews', function ($join) {
            $join->on([
                ['questions.id', 'reviews.question_id'],
                ['targets.id', 'reviews.target_id']
            ])
            ->where([
                ['reviews.valor', false]
            ])
            ->whereNotIn('reviews.id',
            Review::select('reviews.id')
            ->join('commitments', 'reviews.id', '=', 'commitments.review_id')
            ->join('compliments', 'commitments.id', '=', 'compliments.commitment_id')
            ->get()
        );
        })
        ->groupBy('areas.id');

        $areas = Area::select('norms_areas.*','problems_areas.problems')
        ->from(DB::raw('('.Str::replaceArray('?', $norms_areas->getBindings(), $norms_areas->toSql()).') as norms_areas '))
        ->join(DB::raw('('.Str::replaceArray('?', ['false'], $problems_areas->toSql()).') as problems_areas'), 'problems_areas.id','norms_areas.id')
        ->withTrashed()->get();

        $cumplimientos = Norm::select(DB::raw('norms.codigo, requirements.numero, (case when count(tasks.id) = 0 then 0 else 1 end) tareas'))
        ->leftJoin('requirements','requirements.norm_id','=','norms.id')
        ->leftJoin('tasks', function ($join) {
            $join->on('tasks.requirement_id', '=','requirements.id')
            ->where('tasks.cumplida', '=','true');
        })
        ->groupBy('norms.codigo','requirements.numero')
        ->orderBy('norms.codigo');
        $norms = Norm::select(DB::raw('codigo, sum(tareas) cumplimientos, count(tareas) avance'))
        ->from(DB::raw(' ('. Str::replaceArray('?', $cumplimientos->getBindings(), $cumplimientos->toSql()) .') as cumplidos' ))
        ->groupBy('codigo')
        ->limit(8)
        ->withTrashed()
        ->get();

        $total = Norm::select(DB::raw('sum(tareas) cumplimientos, count(tareas) avance'))
        ->from(DB::raw(' ('. Str::replaceArray('?', $cumplimientos->getBindings(), $cumplimientos->toSql()) .') as cumplidos' ))
        ->limit(8)
        ->withTrashed()
        ->get()
        ->first();

        $problems = Review::select('reviews.id')
        ->where('valor','=','false')
        ->get()->count();

        $compliments = Compliment::orderBy('id', 'ASC')->get()->count();

        $por_compliments = round(($compliments? 100 * ($compliments/$problems):0),2);
        //Grafica de avance total
        $totalrequisitos= Requirement::select(DB::raw('count(requirements.id) total'))
        ->where(
            DB::raw('extract(year FROM requirements.created_at) <= '.Carbon::now()->year.' and null')
        )->get()->first()->total;
        $meses = [];
        for($mes=1; $mes < 13; $mes++){
            $fecha = Carbon::parse(Carbon::now()->year.'-'.$mes."-01")->addMonth();
            $cumplidos = Norm::select(DB::raw('norms.id, requirements.numero, (case when count(tasks.id) = 0 then 0 else 1 end) tareas'))
            ->leftJoin('requirements', function ($join) use($fecha) {
                $join->on('requirements.norm_id', '=','norms.id')
                ->where(
                    DB::raw("requirements.created_at < '".$fecha->format('Y-m-d')."' and null")
                );
            })
            ->leftJoin('tasks', function ($join) use($fecha) {
                $join->on('tasks.requirement_id', '=','requirements.id')
                ->where(
                    DB::raw("tasks.cumplida = true and tasks.created_at < '".$fecha->format('Y-m-d')."' and null")
                );
            })
            ->groupBy('norms.id','requirements.numero')
            ->withTrashed()
            ->where(
                DB::raw("norms.created_at < '".$fecha->format('Y-m-d')."' and null")
            );
            $meses[$mes] = Norm::select(DB::raw('sum(tareas) cumplimientos'))
            ->from(DB::raw(' ('. $cumplidos->toSql() .') as cumplidos' ))
            ->withTrashed()
            ->get()
            ->first();
        }
        
        $validities = Validity::select(DB::raw('inicio, count(reviews.id) problemas, count(commitments.id) compromisos, count(compliments.id) cumplimientos'))
        ->leftJoin('reviews', function ($join) {
            $join->on(
                'reviews.validity_id', '=', 'validities.id'
            )
            ->where([
                ['reviews.valor', false]
            ]);
        })
        ->leftJoin('commitments', 'commitments.review_id', '=', 'reviews.id')
        ->leftJoin('compliments', 'compliments.commitment_id', '=', 'commitments.id')
        ->where('fin','<', now()->toDateString())
        ->groupBy('validities.id', 'inicio')
        ->orderByDesc('inicio')
        ->limit(5)
        ->get();
        $validities = $validities->reverse();

        $goal=Norms::getCurrentGoal();
        
        $lastv = Reviews::getCurrentValidity();
        
        $calendar_validities = Reviews::getMonthValidities();
        
        $solved = Review::where('reviews.validity_id','=',($lastv? $lastv->id:0))
        ->orderBy('id', 'ASC')
        ->get()
        ->count();
        
        $por_solved = round(($solved/(Reviews::toResolve()? Reviews::toResolve() : 1))*100,2);
        
        return view('dashboard',compact(
            'subareas','areas','problems','compliments','por_compliments',
            'solved', 'por_solved', 'norms', 'calendar_validities','validities',
            'total', 'meses', 'totalrequisitos', 'goal'
        ));
    }
}
