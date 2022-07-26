<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
use App\Subarea;
use App\Area;
use Tools\Query\Exams;
use App\Evaluation;

class ExamController extends Controller {

    function __construct() {
        $this->middleware('active');
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('activeevaluation')->except(['index','show']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($area_id=null, $evaluation_id=null) {
        $areas = [];
        if(! $evaluation_id )
        $evaluation = Exams::getCurrentEvaluation();
        else
        $evaluation = Evaluation::findOrFail($evaluation_id);
        $guards = Exams::getCurrentGuards();

        $areas = auth()->user()->areas()
        ->get();

        if(!$area_id)
            return view('exams.index', compact('areas', 'evaluation'));

        $subareas = auth()->user()->subareas()
        ->where('subareas.area_id','=',$area_id)
        ->get();
        
        $areas = null;
        $area = Area::findOrFail($area_id);
        return view('exams.index', compact('subareas', 'areas', 'evaluation', 'area'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id) {
        $subarea = auth()->user()->subareas()
        ->where('subareas.id','=',$id)
        ->get();

        if(!sizeof($subarea)) abort(404, "No tienes autorización para ingresar.");
        else $subarea = $subarea[0];

        $evaluation = Exams::getCurrentEvaluation();
        return view('exams.create', compact('subarea', 'evaluation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $evaluation = Exams::getCurrentEvaluation();
        $subarea = Subarea::findOrFail($request->sid);

        foreach ($subarea->arrays as $array)
        foreach ($array->activity->dangers as $danger){
            Exam::create([
                'exposicion' => $request->input('exposicion'.$danger->id),
                'ocurrencia' => $request->input('ocurrencia'.$danger->id),
                'personas' => $request->input('personas'.$danger->id),
                'consecuencia_persona' => $request->input('conspersonas'.$danger->id),
                'consecuencia_salud' => $request->input('conssalud'.$danger->id),
                'consecuencia_infraestructura' => $request->input('consinfraestructura'.$danger->id),
                'danger_id' => $danger->id,
                'evaluation_id' => $evaluation->id,
                'array_id' => $array->id
            ]);
        }
        return redirect()
        ->route('exams.index')
        ->with('success','Cuestionario salvado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $review = Review::findOrFail($id);
        return view('exams.show',compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $subarea = Subarea::findOrFail($id);
        $evaluation = Exams::getCurrentEvaluation();
        $dangers = Exams::resolvedQuestions($subarea, $evaluation);
        return view('exams.edit', compact('subarea', 'evaluation', 'dangers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        foreach($request->sids as $sid){
            $exam = Exam::findOrFail($sid);
            
            $exam->update([
                'exposicion' => $request->input('exposicion'.$sid),
                'ocurrencia' => $request->input('ocurrencia'.$sid),
                'personas' => $request->input('personas'.$sid),
                'consecuencia_persona' => $request->input('conspersonas'.$sid),
                'consecuencia_salud' => $request->input('conssalud'.$sid),
                'consecuencia_infraestructura' => $request->input('consinfraestructura'.$sid)
            ]);
        }
        
        return redirect()
            ->route('exams.index')
            ->with('success','Cuestionario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $subarea = Subarea::findOrFail($id);
        $dangers = Exams::resolvedQuestions($subarea, Exams::getCurrentEvaluation());
        
        foreach($dangers as $danger) {
            $danger->forceDelete();
        }
        return redirect()
        ->route('exams.index')
        ->with('success','Cuestionario eliminado');
    }
}
