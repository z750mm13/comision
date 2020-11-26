<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requirement;
use App\Norm;
use App\Goal;
use Tools\Query\Reviews;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class GoalController extends Controller {

    /**
     * Lista de middlewares aplicados a los metodos
     */
    function __construct() {
        $this->middleware('active');
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('check');
    }
    /**
     * Muestra una lista de los requisitos de las normas.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $goals = Goal::orderBy('anio')->get();
        return view('goals.index', compact('goals'));
    }

    /**
     * Muestra la vita para crear un requisito.
     * Ya sea para uno seleccionado desde la norma con $norm_id
     * O por la pagina principal sin $norm_id
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('goals.create');
    }

    /**
     * Almacena el requisito en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $goal = Goal::create($request->all());
        if ($goal) {
            return redirect()
                ->route('goals.show',compact('goal'))
                ->with('success','Requisito agregado satisfactoriamente');
        }
        return back()
            ->WithiInput()
            ->with('errors','No se ha podido crear el requisito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $goal = Goal::findOrFail($id);
        return view('goals.show', compact('goal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $goal = Goal::findOrFail($id);
        return view('goals.edit', compact('goal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //Actualizacion del requisito
        Goal::findOrFail($id)->update($request->all());

        //Retorno a la vista de requisito
        $goal = Goal::findOrFail($id);
        return view('goals.show', compact('goal'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $goal = Goal::findOrFail($id);
        $goal->forceDelete();
        return redirect()->route('goals.index');
    }

    public function getRequirements(Request $request) {
        $usedrequirements = null;
        if($request->used){
            $usedrequirements = Requirement::select('requirements.id')
            ->join($request->used, $request->used.'.requirement_id', '=', 'requirements.id');
            if($request->used == 'goals')
            $usedrequirements->where('goals.cycle_id',Reviews::getCurrentCycle());
        }

        if($request->requirement_id && $request->used)
        $usedrequirements->where('requirements.id','!=',$request->requirement_id);

        if($request->used)
        $requirements = Requirement::whereNotIn('id',
            $usedrequirements->get()
            )
        ->where('norm_id', $request->norm_id)->get();
        else
        $requirements = Requirement::where('norm_id', $request->norm_id)->get();

        foreach ($requirements as $requirement) {
            $requirementsArray[$requirement->id] = substr($requirement->numero.' '.$requirement->descripcion, 0, 100)."..." ;
        }
        return mb_convert_encoding($requirementsArray, "UTF-8", "UTF-8");
    }
}
