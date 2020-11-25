<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Review;

class ReviewStatisticController extends Controller {
    function __construct() {
        $this->middleware('active');
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('check');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        // TODO para la conversión
        $inicio = null;
        $fin = null;
        if($request->input('inicio'))
        $inicio = date('Y-m-d', strtotime(str_replace('/', '-', $request->input('inicio'))));
        if($request->input('fin'))
        $fin = date('Y-m-d', strtotime(str_replace('/', '-', $request->input('fin'))));
        //dd($inicio.' : '.$request->input('fin'));
        $problema = $request->input('problema');
        $compromiso = $request->input('compromiso');
        $cumplimiento = $request->input('cumplimiento');
        
        $problems = Review::select(DB::raw('reviews.id, areas.nombre as area, subareas.nombre as subarea, reviews.valor as cumple, encabezado, users.rol as compromiso, compliments.fecha as cumplimiento'))
        ->join('targets', 'targets.id', '=', 'reviews.target_id')
        ->join('subareas', 'targets.subarea_id', '=', 'subareas.id')
        ->join('areas', 'subareas.area_id', '=', 'areas.id')
        ->join('questions', 'questions.id', '=', 'reviews.question_id')
        ->leftJoin('commitments', 'commitments.review_id', '=', 'reviews.id')
        ->leftJoin('users', 'users.id', '=', 'commitments.user_id')
        ->leftJoin('compliments', 'compliments.commitment_id', '=', 'commitments.id')
        ->orderBy('reviews.created_at');

        if($inicio && $fin) {
            $problems->where([
                ['compliments.fecha', '>=', $inicio],
                ['compliments.fecha', '<=', $fin]
            ]);
        } if ($request->input('problema')){
            $problems->where('reviews.valor', 'f');
        } if ($request->input('compromiso')){
            $problems->where('users.rol', '!=', null);
        } if ($request->input('cumplimiento')){
            $problems->where('compliments.created_at', '!=', null);
        }
        //dd($problems->toSql(),$problems->getBindings(), $problems->get());
        $problems = $problems->get();
        return view('statistics.reviews.index', compact('problems','inicio','fin','problema','compromiso','cumplimiento'));
    }
}