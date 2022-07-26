<?php

namespace App\Http\Controllers;

use App\Subarea;
use App\Area;
use Illuminate\Http\Request;

class SubareaController extends Controller {

    function __construct() {
        $this->middleware('active');
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('check')->only(['create','store','edit','update','destroy']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $areas = Area::orderBy('id', 'ASC')->get();
        $subareas = Subarea::orderBy('id', 'ASC')->get();
        return view('subareas.index', compact('subareas','areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($area_id=null) {
        if($area_id == null)
            $areas=Area::orderBy('id', 'ASC')->get();
        else
        $areas = null;
        return view('subareas.create', compact('area_id', 'areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $subarea = Subarea::create($request->all());
        return redirect()
        ->route('subareas.show',compact('subarea'))
        ->with('success','Subárea agregada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $subarea = Subarea::findOrFail($id);
        return view('subareas.show', compact('subarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $subarea = Subarea::findOrFail($id);
        $areas = Area::orderBy('id', 'ASC')->get();
        return view('subareas.edit', compact('subarea', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        Subarea::findOrFail($id)->update($request->all());
        return redirect()->route('subareas.index')
        ->with('success','Subárea actualizada satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $subarea = Subarea::findOrFail($id);
        if($subarea->targets()->withTrashed()->get()->count())
            $subarea->delete();
        else
            $subarea->forceDelete();
        return redirect()->route('subareas.index')
        ->with('success','Subárea eliminada satisfactoriamente');
    }
}