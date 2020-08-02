<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use App\Http\Requests\CreateAreaRequest;
use App\Middleware\ValidateUniqueArea;

class AreaController extends Controller {
    /**
     * Lista de middlewares aplicados a los metodos
     */
    function __construct() {
        $this->middleware('active');
        $this->middleware('validateuniquearea')->only('store');
        $this->middleware('uniqueupdatearea')->only('update');
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
        return view('areas.index',compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAreaRequest $request) {
        $area = Area::create($request->all());
        return redirect()
        ->route('areas.show',compact('area'))
        ->with('success','Area agregada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $area = Area::findOrFail($id);
        return view('areas.show', compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $area = Area::findOrFail($id);
        return view('areas.edit', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateAreaRequest $request, $id) {
        Area::findOrFail($id)->update($request->all());
        return redirect()->route('areas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $area = Area::findOrFail($id);
        if($area->subareas->count())
            $area->delete();
        else
            $area->forceDelete();
        return redirect()->route('areas.index');
    }

    /**
     * Display a listing of the deleted areas.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleted() {
        $areas = Area::onlyTrashed()->get();
        return view('areas.deleted',compact('areas'));
    }

    /**
     * Display a listing of the deleted areas.
     *
     * @return \Illuminate\Http\Response
     */
    public function restore(Request $request) {
        $areas = $request->input('areas');
        if($areas)
        foreach($areas as $id)
            Area::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->route('areas.index');
    }
}
