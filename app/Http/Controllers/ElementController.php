<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Http\Requests\CreateElementRequest;
use Carbon\Carbon;
use Tools\Img\ToServer;

class ElementController extends Controller {
    /**
     * Lista de middlewares aplicados a los metodos
     */
    function __construct() {
        $this->middleware('active');
        $this->middleware('validateuniqueelement')->only('store');
        $this->middleware('uniqueupdateelement')->only('update');
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('check')->only(['index','create','store','show','destroy','activate','inactivate','admin','noadmin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $actives = User::select('users.*')
            ->where([
                ['active','true'],
                ['tipo','Integrante']
            ])
            ->get();
        
        $inactives = User::select('users.*')
        ->where([
            ['active','false'],
            ['tipo','Integrante']
        ])
            ->get();
        return view('elements.index', compact('actives','inactives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('elements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateElementRequest $request) {
        $data = ToServer::saveImage($request, 'foto', 'avatars/1');
        $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'active' => true,
            'nombre' => $data['nombre'],
            'apellidos' => $data['apellidos'],
            'foto' => $data['foto'],
            'tipo' => $data['tipo'],
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()
                ->route('elements.index')
                ->with('success','Personal registrado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $user = User::findOrFail($id);
        return view('elements.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        if(auth()->user()->admin)
            $user = User::findOrFail($id);
        else {
            $user = auth()->user()->get()->first(); 
            if($id != $user->id)
            return redirect()
                ->route('elements.edit', compact('user'))
                ->with('success','Este no es su perfil');
        }
        return view('elements.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $user = null;
        if(auth()->user()->admin)
            $user = User::findOrFail($id);
        else {
            $user = auth()->user();
            if($id != $user->id)
            return redirect()
                ->route('elements.edit', compact('user'))
                ->with('success','Este no es su perfil');
        }
        if ($request->file('foto') != null){
            $data = ToServer::saveImage($request, 'foto', 'avatars/1');
            //Eliminación de la imagen
            if($user->foto != 'avatars/1/avatar-default.png')
            ToServer::deleteFile('', $user->foto);
        } else $data = $request->all();

        //Actualizacion del requisito
        if($request->password){
            $user->password = Hash::make($request->password);
            $user->save();
        }
        $data = $request->except(['password']);
        $user->update($data);
        
        return view('elements.show', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $user = User::findOrFail($id);

        //Pregunta si tiene dependencias
        if($user->cordinates()->withTrashed()->get()->count()) {
            //Si tiene dependencias "elimina" el usuario, lo hará invisible
            $user->delete();
        } else {
            //Si no tiene dependencias lo eliminará de forma permanente
            if($user->foto != 'avatars/1/avatar-default.png'){
                ToServer::deleteFile('', $user->foto);
            }
            $user->forceDelete();
        }

        return redirect()->route('elements.index');
    }

    public function activate($id) {
        $user = User::findOrFail($id);
        $user->update([
            'active' => true
        ]);
        return redirect()->route('elements.index')
        ->with('success','La cuenta de '. $user->nombre. $user->apellidos. ' se ha activado');
    }

    public function inactivate($id) {
        $user = User::findOrFail($id);
        if(auth()->user()->id == $user->id)
         return redirect()->route('elements.index')
         ->with('success','Lo sentimos, no puede realizar este cambio sobre usted.');
        $user->update([
            'active' => false
        ]);
        return redirect()->route('elements.index')
        ->with('success','La cuenta de '. $user->nombre. $user->apellidos. ' se ha desactivado');
    }

    public function admin($id) {
        $user = User::findOrFail($id);
        $user->update([
            'admin' => true
        ]);
        return redirect()->route('elements.index')
        ->with('success','La cuenta de '. $user->nombre. $user->apellidos. ' se ha ascendido');
    }

    public function noadmin($id) {
        $user = User::findOrFail($id);
        if(auth()->user()->id == $user->id)
         return redirect()->route('elements.index')
         ->with('success','Lo sentimos, no puede realizar este cambio sobre usted.');
        $user->update([
            'admin' => false
        ]);
        return redirect()->route('elements.index')
        ->with('success','La cuenta de '. $user->nombre. $user->apellidos. ' se ha degradado');
    }
}
