<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matrix;
use App\Activity;
use App\Subarea;
use App\Area;
use App\Evaluation;

class MatrixController extends Controller {

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
    public function index() {
        $subareas = Subarea::orderBy('id', 'ASC')->get();
        $areas = Area::orderBy('id', 'ASC')->get();
        $subareas_no_map = Subarea::where('id','>',118)->orderBy('id', 'ASC')->get();
        return view('arrays.index', compact('subareas','areas','subareas_no_map'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id=null) {
        $activities = Activity::orderBy('id', 'ASC')->get();
        $subareas = null;
        if($id==null) $subareas = Subarea::orderBy('id', 'ASC')->get();
        return view('arrays.create', compact('id','activities', 'subareas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $matrix = Matrix::create($request->all());
        $id = $matrix->id;
        return redirect()
        ->route('arrays.index')
        ->with('success','Matriz agregada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $evaluations = Evaluation::orderBy('id', 'ASC')->get();
        $matrix = Matrix::findOrFail($id);
        return view('arrays.show', compact('matrix','evaluations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $matrix = Matrix::findOrFail($id);
        $activities = Activity::orderBy('id', 'ASC')->get();
        $subareas = Subarea::orderBy('id', 'ASC')->get();
        return view('arrays.edit', compact('matrix', 'activities', 'subareas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        Matrix::findOrFail($id)->update($request->all());
        return redirect()
                ->route('arrays.index')
                ->with('success','Matriz actualizada satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $matrix = Matrix::findOrFail($id);
        $matrix->forceDelete();
        return redirect()->route('arrays.index')
        ->with('success','Matriz eliminada satisfactoriamente');
    }
}
