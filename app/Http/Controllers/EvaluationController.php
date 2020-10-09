<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evaluation;
use Carbon\Carbon;

class EvaluationController extends Controller {
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
    public function index($tiempo=null) {
        $fecha = Carbon::now()->toDateString();
        $evaluations = null;
        if($tiempo){
            if($tiempo=="proximo")
                $evaluations = Evaluation::where([
                    ['inicio', '>', "$fecha"],
                ])->orderBy('inicio', 'desc')->get();
            if($tiempo=="realizados")
                $evaluations = Evaluation::where([
                    ['fin', '<', $fecha],
                ])->orderBy('inicio', 'desc')->get();
        } else {
            $evaluations = Evaluation::where([
                ['inicio', '<=', "$fecha"],
                ['fin', '>=', "$fecha"],
            ])->orderBy('inicio', 'desc')->get();
        }
        return view('evaluations.index', compact('evaluations', 'tiempo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('evaluations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $evaluation = Evaluation::create($request->all());
        return redirect()
        ->route('evaluations.show', compact('evaluation'))
        ->with('success','Evaluación agregada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $evaluation = Evaluation::findOrFail($id);
        return view('evaluations.show', compact('evaluation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $evaluation = Evaluation::findOrFail($id);
        return view('evaluations.edit', compact('evaluation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        Evaluation::findOrFail($id)->update($request->all());
        return redirect()
                ->route('evaluations.index')
                ->with('success','Cambios aplicados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $evaluation = Evaluation::findOrFail($id);
        //if($evaluation->reviews()->withTrashed()->get()->count())
          //  $evaluation->delete();
        //else
            $evaluation->forceDelete();
        return redirect()
                ->route('evaluations.index')
                ->with('success','Elemento eliminado');
    }
}
