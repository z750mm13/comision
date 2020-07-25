<?php

namespace App\Http\Controllers;
use App\Subarea;
use App\Area;
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
        return view('dashboard',compact('subareas','areas'));
    }
}
