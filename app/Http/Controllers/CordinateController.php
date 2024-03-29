<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cordinate;
use App\User;

class CordinateController extends Controller {
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
        //TODO retirar deleted
        $cordinadores = Cordinate::where([
            ['rol', 'Coordinación']
        ])->get();
        $secretarios = Cordinate::where([
            ['rol', 'Secretaría']
        ])->get();
        $bocales = Cordinate::where([
            ['rol', 'Bocalía']
        ])->get();
        return view('cordinates.index', compact('cordinadores','secretarios','bocales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($rol='Rol personalizado') {
        $users = null;
        if($rol!='Rol personalizado')
            $users = User::whereNotIn('users.id',
                User::select('users.id')
                    ->join('cordinates','cordinates.user_id','users.id')
                    ->where('cordinates.rol','=',$rol)
                    ->get()
            )->where([
                ['active', 'true'],
                ['tipo', 'Integrante']
            ])
            ->get();
        else
        $users = User::orderBy('id', 'ASC')->get();
        return view('cordinates.create', compact('users', 'rol'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        Cordinate::create($request->all());
        return redirect()
                ->route('cordinates.index')
                ->with('success','Rol asignado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $cordinate = Cordinate::findOrFail($id);
        return view('cordinates.show', compact('cordinate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $users = User::where([
                ['active', 'true'],
                ['tipo', 'Integrante']
        ])->get();
        $cordinate = Cordinate::findOrFail($id);
        return view('cordinates.edit', compact('cordinate', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        Cordinate::findOrFail($id)->update($request->all());
        return redirect()
                ->route('cordinates.index')
                ->with('success','Rol actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $cordinate = Cordinate::findOrFail($id);
        if($cordinate->guards()->withTrashed()->get()->count())
            $cordinate->delete();
        else
            $cordinate->forceDelete();
        return redirect()->route('cordinates.index')
        ->with('success','Rol eliminado correctamente');
    }

    /**
     * Display a listing of the deleted cordinates.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleted() {
        $cordinates = Cordinate::onlyTrashed()->get();
        return view('cordinates.deleted',compact('cordinates'));
    }

    /**
     * Restore the deleted cordinates
     *
     * @return \Illuminate\Http\Response
     */
    public function restore(Request $request) {
        $cordinates = $request->input('cordinates');
        if($cordinates)
        foreach($cordinates as $id)
        Cordinate::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->route('cordinates.index')
        ->with('success','Rol restaurado correctamente');
    }
}