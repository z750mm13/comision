<?php

namespace App\Http\Controllers;
use App\Subarea;
use App\Area;
use App\Compliment;
use Tools\Query\Reviews;
use App\Review;
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
        $subareas  = Subarea::all();
        $areas = Area::all();
        $problems = Review::select('reviews.id')
        ->where('valor','=','false')
        ->get()->count();
        $compliments = Compliment::all()->count();
        $por_compliments = ($compliments? 100 * ($problems/$compliments):0);
        //TODO Asignar a la ultimo validate
        //TODO Agregar avance total
        $solved = Review::all()->count();
        $por_solved = round(($solved/(Reviews::toResolve()? Reviews::toResolve() : 1))*100,2);
        return view('dashboard',compact(
            'subareas','areas','problems','compliments','por_compliments',
            'solved', 'por_solved'
        ));
    }
}
