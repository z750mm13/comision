<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Target;
use App\Questionnaire;
use App\Subarea;
use App\Area;
use App\Validity;

class TargetController extends Controller {

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
        return view('targets.index', compact('subareas','areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id=null) {
        $questionnaires = Questionnaire::orderBy('id', 'ASC')->get();
        $subareas = null;
        if($id==null) $subareas = Subarea::orderBy('id', 'ASC')->get();
        return view('targets.create', compact('id','questionnaires', 'subareas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $target = Target::create($request->all());
        return redirect()
        ->route('targets.show',compact('target'))
        ->with('success','Propiedad agregada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $validities = Validity::orderBy('id', 'ASC')->get();
        $target = Target::findOrFail($id);
        return view('targets.show', compact('target','validities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $target = Target::findOrFail($id);
        $questionnaires = Questionnaire::orderBy('id', 'ASC')->get();
        $subareas = Subarea::orderBy('id', 'ASC')->get();
        return view('targets.edit', compact('target', 'questionnaires', 'subareas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        Target::findOrFail($id)->update($request->all());
        return redirect()
                ->route('targets.index')
                ->with('success','Propiedad actualizada satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $target = Target::findOrFail($id);
        if($target->reviews()->withTrashed()->get()->count())
            $target->delete();
        else
            $target->forceDelete();
        return redirect()->route('targets.index')
        ->with('success','Propiedad eliminada satisfactoriamente');
    }
}
