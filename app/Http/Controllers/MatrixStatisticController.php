<?php

namespace App\Http\Controllers;

use App\Evaluation;
use App\Subarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatrixStatisticController extends Controller {

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
    public function index(Request $request, $evaluation_id = 1) {
        if($request->input('evaluation_id'))$evaluation_id = $request->input('evaluation_id');
        $evaluations = Evaluation::orderBy('inicio')->get();
        $matriz = Evaluation::findOrFail($evaluation_id);
        //dd($evaluation->inicio);
        $subareas = Subarea::select(DB::raw(
        'subareas.nombre lugar, activities.titulo actividad, dangers.titulo peligro, dangers.tipo, exposicion, personas, ocurrencia, consecuencia_infraestructura, consecuencia_salud,
        (
          (cast(exposicion as integer) + cast(personas as integer) + cast(ocurrencia as integer)) *
          (cast(consecuencia_infraestructura as integer) + cast(consecuencia_salud as integer))
        ) significancia'))
        ->join('arrays', 'arrays.subarea_id', '=', 'subareas.id')
        ->join('activities', 'activities.id', '=', 'arrays.activity_id')
        ->join('dangers', 'dangers.activity_id', '=', 'activities.id')
        ->join('exams', 'exams.danger_id', '=', 'dangers.id')
        ->where('evaluation_id', $evaluation_id)
        ->get();
        return view('statistics.matrix.index',compact('evaluations', 'subareas', 'matriz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
