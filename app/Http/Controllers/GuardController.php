<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cordinate;
use App\Area;
use App\Guard;

class GuardController extends Controller {
    
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
        $cordinates = Cordinate::all();
        return view('guards.index', compact('cordinates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id=null) {
        $cordinates = null;
        $areas = null;
        if($id==null) {
            $areas = Area::all();
            $cordinates = Cordinate::all();
        }
        else
        $areas = Area::whereNotIn('id',
            Area::select('areas.id')
                ->join('guards','guards.area_id','=','areas.id')
                ->join('cordinates','cordinates.id','=','guards.cordinate_id')
                ->where('cordinates.id','=',$id)
                ->get()
        )->get();
        return view('guards.create', compact('id','areas', 'cordinates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $guard = Guard::create($request->all());
        return redirect()
                ->route('guards.show', compact('guard'))
                ->with('success','Area asignada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $guard = Guard::findOrFail($id);
        return view('guards.show', compact('guard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $areas = Area::all();
        $cordinates = Cordinate::all();
        $guard = Guard::findOrFail($id);
        return view('guards.edit', compact('guard', 'areas', 'cordinates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        Guard::findOrFail($id)->update($request->all());
        return redirect()
                ->route('guards.index')
                ->with('success','Cambios aplicados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Guard::findOrFail($id)->forceDelete();
        return redirect()->route('guards.index');
    }
}
