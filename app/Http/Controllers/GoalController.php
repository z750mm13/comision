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
        $norm_id = $request->input('norm_id');
        $cycle_id = $request->input('cycle_id');

        if(!$cycle_id)abort(404, "No existe el elemento.");
        $norms = null;
        if(!$norm_id){
            $norms = Norm::select('norms.*')->distinct()
            ->join('requirements','requirements.norm_id','=','norms.id')
            ->join('goals','goals.requirement_id','=','requirements.id')
            ->where('goals.cycle_id','=',$cycle_id)
            ->orderBy('codigo', 'ASC')
            ->get();
        } else {
            $norms = Requirement::select('requirements.*')
            ->join('goals','goals.requirement_id','=','requirements.id')
            ->where([
                ['goals.cycle_id',$cycle_id],
                ['requirements.norm_id',$norm_id]
            ])
            ->orderBy('numero', 'ASC')
            ->get();
        }
        return view('goals.index', compact('norm_id', 'norms','cycle_id'));
    }

    /**
     * Muestra la vita para crear un requisito.
     * Ya sea para uno seleccionado desde la norma con $norm_id
     * O por la pagina principal sin $norm_id
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $cycle_id = Reviews::getCurrentCycle();
        $norms=Norm::orderBy('codigo', 'ASC')->get();
        return view('goals.create', compact('norms','cycle_id'));
    }

    /**
     * Almacena el requisito en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $goal = Goal::create($request->all());
        $goal = $goal->requirement;
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
        $cycle_id = Reviews::getCurrentCycle();
        $goal = Goal::select('goals.*')
        ->join('requirements','goals.requirement_id','=','requirements.id')
        ->where([
            ['goals.requirement_id',$id],
            ['goals.cycle_id', $cycle_id]
        ])
        ->first();
        return view('goals.show', compact('goal','cycle_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $goal = Goal::findOrFail($id);
        $norms=Norm::orderBy('codigo', 'ASC')->get();
        $cycle_id = Reviews::getCurrentCycle();
        return view('goals.edit', compact('cycle_id', 'goal', 'norms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $cycle_id = Reviews::getCurrentCycle();
        //Actualizacion del requisito
        Goal::findOrFail($id)->update($request->all());

        //Retorno a la vista de requisito
        $goal = Goal::findOrFail($id);
        return view('goals.show', compact('goal','cycle_id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $cycle_id = Reviews::getCurrentCycle();
        $goal = Goal::findOrFail($id);
        $goal->forceDelete();
        return redirect()->route('goals.index',['cycle_id'=>$cycle_id])->with('cycle_id');
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
