<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Validity;
use Carbon\Carbon;
use App\Area;

class ValidityController extends Controller {

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
        $validities = null;
        if($tiempo){
            if($tiempo=="proximo")
                $validities = Validity::where([
                    ['inicio', '>', "$fecha"],
                ])->orderBy('inicio', 'asc')->get();
            if($tiempo=="realizados")
                $validities = Validity::where([
                    ['fin', '<', $fecha],
                ])->orderBy('inicio', 'asc')->get();
        } else {
            $validities = Validity::where([
                ['inicio', '<=', "$fecha"],
                ['fin', '>=', "$fecha"],
            ])->orderBy('inicio', 'asc')->get();
        }
        return view('validities.index', compact('validities', 'tiempo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('validities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validity = Validity::create($request->all());
        return redirect()
        ->route('validities.show', compact('validity'))
        ->with('success','Programacion agregada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $validity = Validity::findOrFail($id);
        $areas = Area::all();
        return view('validities.show', compact('validity', 'areas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $validity = Validity::findOrFail($id);
        return view('validities.edit', compact('validity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        Validity::findOrFail($id)->update($request->all());
        return redirect()
                ->route('validities.index')
                ->with('success','Cambios aplicados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $validity = Validity::findOrFail($id);
        if($validity->reviews->count())
            $validity->delete();
        else
            $validity->forceDelete();
        return redirect()
                ->route('validities.index')
                ->with('success','Elemento eliminado');
    }
}
