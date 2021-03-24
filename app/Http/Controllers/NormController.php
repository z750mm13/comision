<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Norm;
use App\Requirement;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\CreateNormRequest;
use App\Http\Requests\UpdateNormRequest;
use Illuminate\Validation\Rule;

class NormController extends Controller {

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
        // TODO Filtrar el uso de normas
        $norms=Norm::select(DB::raw("norms.*, 60 as asignado"))
        ->orderBy('codigo', 'ASC')
        ->get();
        return view('norms.index',compact('norms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('norms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNormRequest $request) {
        $norm = Norm::create($request->all());

        if ($norm) {
            return redirect()
                ->route('norms.show',compact('norm'))
                ->with('success','Norma agregada satisfactoriamente');
        }
        return back()
            ->WithiInput()
            ->with('errors','No se ha podido crear la norma');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $norm = Norm::findOrFail($id);
        $compliments = Requirement::select(DB::raw('requirements.id, count(tasks.id) as compliment'))
        ->leftJoin('tasks', 'requirements.id', '=', 'tasks.requirement_id')
        ->where('requirements.norm_id','=',$norm->id)
        ->groupBy('requirements.id');
        $requirements = Requirement::select(DB::raw('requirements.*, count(questionnaires.id) as questionn, cumplimiento.compliment'))
        ->leftJoin('questionnaires', 'requirements.id', '=', 'questionnaires.requirement_id')
        ->join(DB::raw('('.Str::replaceArray('?', [$norm->id], $compliments->toSql()).') as cumplimiento'), 'requirements.id','cumplimiento.id')
        ->where('requirements.norm_id','=',$norm->id)
        ->groupBy('requirements.id')
        ->groupBy('cumplimiento.compliment')
        ->orderBy('numero')
        ->get();
        return view('norms.show', compact('norm','requirements'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $norm = Norm::findOrFail($id);
        return view('norms.edit', compact('norm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNormRequest $request, $id) {
        /**
         * Valida que el cambio de codigo no exista y ademas
         * si es propietario del código no marca la validación
         */
        Validator::make($request->all(), [
            'codigo'=>[Rule::unique('norms')->ignore($id)],
        ])->validate();

        // Intenta actualizar la norma si no regresa el error
        Norm::findOrFail($id)->update($request->all());

        //Una vez actualizada la norma regresa a la vista principal de normas
        return redirect()->route('norms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $norm = Norm::findOrFail($id);
        if($norm->requirements()->withTrashed()->get()->count())
            $norm->delete();
        else
            $norm->forceDelete();
        return redirect()->route('norms.index');
    }
}
