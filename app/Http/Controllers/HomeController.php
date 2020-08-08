<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Subarea;
use App\Area;
use App\Compliment;
use App\Norm;
use App\Review;

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
            ->where('reviews.valor', '=', false)
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

        $areas = Area::orderBy('areas.id', 'ASC')
        ->get();

        $norms = Norm::orderBy('codigo', 'ASC')->limit(8)->get();

        $problems = Review::select('reviews.id')
        ->where('valor','=','false')
        ->get()->count();

        $compliments = Compliment::orderBy('id', 'ASC')->get()->count();

        $por_compliments = ($compliments? 100 * ($compliments/$problems):0);
        //TODO Asignar al ultimo validate
        //TODO Agregar avance total
        $lastv = Reviews::lastValidity();

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
