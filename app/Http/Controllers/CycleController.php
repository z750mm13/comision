<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cycle;
use Carbon\Carbon;

class CycleController extends Controller {
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
        $cycles = null;
        if($tiempo){
            if($tiempo=="proximo")
                $cycles = Cycle::where([
                    ['inicio', '>', "$fecha"],
                ])->orderBy('inicio', 'desc')->get();
            if($tiempo=="realizados")
                $cycles = Cycle::where([
                    ['fin', '<', $fecha],
                ])->orderBy('inicio', 'desc')->get();
        } else {
            $cycles = Cycle::where([
                ['inicio', '<=', "$fecha"],
                ['fin', '>=', "$fecha"],
            ])->orderBy('inicio', 'desc')->get();
        }
        return view('cycles.index', compact('cycles', 'tiempo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('cycles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $cycle = Cycle::create($request->all());
        return redirect()
        ->route('cycles.show', compact('cycle'))
        ->with('success','Evaluación agregada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $cycle = Cycle::findOrFail($id);
        return view('cycles.show', compact('cycle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $cycle = Cycle::findOrFail($id);
        return view('cycles.edit', compact('cycle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        Cycle::findOrFail($id)->update($request->all());
        return redirect()
                ->route('cycles.index')
                ->with('success','Cambios aplicados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $cycle = Cycle::findOrFail($id);
        //if($cycle->reviews()->withTrashed()->get()->count())
          //  $cycle->delete();
        //else
            $cycle->forceDelete();
        return redirect()
                ->route('cycles.index')
                ->with('success','Elemento eliminado');
    }
}
