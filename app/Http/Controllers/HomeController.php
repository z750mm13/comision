<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Subarea;
use App\Area;
use App\Compliment;
use App\Norm;
use App\NormsOfArea;
use App\Review;
use App\Validity;

use Tools\Query\Reviews;
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
        ->orderBy('subareas.id', 'ASC')
        ->get();

        $sqarea = Area::select(DB::raw('areas.*, norms.id AS norm'))
        ->distinct()
        ->leftJoin('subareas', 'subareas.area_id', '=', 'areas.id')
        ->leftJoin('targets', 'targets.subarea_id', '=', 'subareas.id')
        ->leftJoin('questionnaires', 'questionnaires.id', '=', 'targets.questionnaire_id')
        ->leftJoin('requirements', 'requirements.id', '=', 'questionnaires.requirement_id')
        ->leftJoin('norms', 'norms.id', '=', 'requirements.norm_id');

        $areas = Area::select(DB::raw('id,nombre,area,color,deleted_at,created_at,updated_at,count(norm)as norms'))
        ->from(\DB::raw(' ( ' . $sqarea->toSql() . ' ) AS areas '))
        ->groupBy('id','nombre','area','color','deleted_at','created_at','updated_at')
        ->get();

        $norms = Norm::orderBy('codigo', 'ASC')->limit(8)->get();

        $problems = Review::select('reviews.id')
        ->where('valor','=','false')
        ->get()->count();

        $compliments = Compliment::orderBy('id', 'ASC')->get()->count();

        $por_compliments = round(($compliments? 100 * ($compliments/$problems):0),2);
        //TODO Asignar al ultimo validate
        //TODO Agregar avance total
        $lastv = Reviews::getCurrentValidity();
        
        $calendar_validities = Reviews::getMonthValidities();
        
        $solved = Review::where('reviews.validity_id','=',($lastv? $lastv->id:0))
        ->orderBy('id', 'ASC')
        ->get()
        ->count();
        
        $por_solved = round(($solved/(Reviews::toResolve()? Reviews::toResolve() : 1))*100,2);
        
        return view('dashboard',compact(
            'subareas','areas','problems','compliments','por_compliments',
            'solved', 'por_solved', 'norms', 'calendar_validities'
        ));
    }
}
