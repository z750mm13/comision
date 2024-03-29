<?php

namespace App\Http\Controllers;

use Tools\Img\ToServer;
use Illuminate\Http\Request;
use App\Compliment;
use App\Commitment;
use Carbon\Carbon;

class ComplimentController extends Controller {
    /**
     * Constructor del cumplimiento
     */
    function __construct() {
        $this->middleware('active');
        $this->middleware('auth');
        $this->middleware('verified');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $compliments = [];
        $user = auth()->user();
        if($user->tipo == 'Integrante')
        $compliments = Compliment::orderBy('id', 'ASC')->get();
        else {
            $commitments = $user->commitments;
            //TODO Revisar consulta
            foreach($commitments as $commitment){
                if($commitment->compliment)
                $compliments[] = $commitment->compliment;
            }
        }
        return view('compliments.index', compact('compliments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($commitment_id=null) {
        $user = auth()->user();
        if($user->tipo == 'Integrante')
        $commitments = Commitment::select('commitments.*','compliments.evidencia')
        ->leftJoin('compliments','compliments.commitment_id', 'commitments.id')
        ->orderBy('id', 'ASC')
        ->where('compliments.id','=',null)
        ->get();
        else {
            if($commitment_id == null)
                $commitments = $user->commitments()->select('commitments.*')
                ->leftJoin('compliments','compliments.commitment_id', 'commitments.id')
                ->orderBy('commitments.id', 'ASC')
                ->where('compliments.id','=',null)->get();
            else {
                $commitments = Commitment::findOrFail($commitment_id);
                if($commitments->user_id != auth()->user()->id || $commitments->compliment) return redirect()->
                    route('compliments.index')->with('error','No se ha podido encontrar el recurso');
            }
        }
        return view('compliments.create', compact('commitments','commitment_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $data = ToServer::saveImage($request, 'evidencia', 'img/docs');
        $data['fecha'] = Carbon::now();
        $compliment = Compliment::create($data);
        return redirect()
                ->route('compliments.show', compact('compliment'))
                ->with('success','Cumplimiento agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $compliment = Compliment::findOrFail($id);
        return view('compliments.show', compact('compliment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $compliment = Compliment::findOrFail($id);
        $commitments = Commitment::orderBy('id', 'ASC')->get();
        return view('compliments.edit', compact('compliment', 'commitments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $compliment = Compliment::findOrFail($id);
        //Revisa si se actualizó la evidencia
        if ($request->file('evidencia') != null) {
            $data = ToServer::saveImage($request, 'evidencia', 'img/docs');
            ToServer::deleteFile('', $compliment->evidencia);
        }
        else $data = $request->all();

        //Actualizacion del requisito
        $compliment->update($data);
        
        return redirect()
                ->route('compliments.index')
                ->with('success','Cumplimiento actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $compliment = Compliment::findOrFail($id);
        ToServer::deleteFile('', $compliment->evidencia);
        $compliment->forceDelete();
        return redirect()->route('compliments.index')
        ->with('success','Cumplimiento eliminado correctamente');
    }
}
