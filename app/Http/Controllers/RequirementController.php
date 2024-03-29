<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRequirementRequest;
use App\Requirement;
use App\Norm;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class RequirementController extends Controller {

    /**
     * Lista de middlewares aplicados a los metodos
     */
    function __construct() {
        $this->middleware('active');
        $this->middleware('validateuniquerequirement', ['only'=>['store']]);
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('check')->only(['create','store','edit','update','destroy']);
    }
    /**
     * Muestra una lista de los requisitos de las normas.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $requirements = Requirement::orderBy('id', 'ASC')->get();
        return view('requirements.index',compact('requirements'));
    }

    /**
     * Muestra la vita para crear un requisito.
     * Ya sea para uno seleccionado desde la norma con $norm_id
     * O por la pagina principal sin $norm_id
     *
     * @return \Illuminate\Http\Response
     */
    public function create($norm_id=null) {
        $norms = null;
        if(!$norm_id){
            $norms=Norm::orderBy('id', 'ASC')->get();
        }
        return view('requirements.create', compact('norm_id', 'norms'));
    }

    /**
     * Almacena el requisito en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequirementRequest $request) {
        $requirement = Requirement::create($request->all());
        if ($requirement) {
            return redirect()
                ->route('requirements.show',compact('requirement'))
                ->with('success','Requisito agregado satisfactoriamente');
        }
        return back()
            ->WithiInput()
            ->with('error','No se ha podido crear el requisito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $ruta = null;
        if(isset(Route::current()->action['as']))
            $ruta = Route::current()->action['as'];
        $requirement = Requirement::findOrFail($id);
        return view('requirements.show', compact('requirement', 'ruta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $norms=Norm::orderBy('id', 'ASC')->get();
        $requirement = Requirement::findOrFail($id);
        return view('requirements.edit', compact('requirement', 'norms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateRequirementRequest $request, $id) {
        /**
         * Valida que el cambio de numero no exista y ademas
         * si es propietario del numero no marca la validación
         */
        Validator::make($request->all(), [
            'numero'=>['unique:requirements,numero,'.$id.',id,norm_id,'.$request['norm_id'],],
        ])->validate();

        //Actualizacion del requisito
        Requirement::findOrFail($id)->update($request->all());

        //Retorno a la vista de requisito
        return redirect()->route('requirements.show',[$id])
        ->with('success','Requisito actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $requirement = Requirement::findOrFail($id);
        if($requirement->questionnaires()->withTrashed()->get()->count() || $requirement->tasks()->withTrashed()->get()->count())
            $requirement->delete();
        else
            $requirement->forceDelete();
        return redirect()->route('requirements.index')
        ->with('success','Requisito eliminado satisfactoriamente');
    }
}
