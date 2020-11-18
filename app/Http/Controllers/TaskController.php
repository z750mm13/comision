<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tools\Img\ToServer;
use App\Task;
use App\Requirement;
use App\Norm;

class TaskController extends Controller {

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
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($requirement_id=null) {
        if($requirement_id == null)
            $norms=Norm::orderBy('codigo', 'ASC')->get();
        else
        $norms = null;
        
        return view('tasks.create', compact('requirement_id', 'norms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        if($request->input('inicio')){
            $data = $request->all();
            $data['programable'] = true;
        } else {
            $data = ToServer::saveImage($request, 'evidencia', 'img/docs');
            $data['programable'] = false;
            $data['cumplida'] = true;
            $data['user_id'] = auth()->user()->id;
        }
        $task = Task::create($data);
        if ($task) {
            return redirect()
                ->route('tasks.show',compact('task'))
                ->with('success','Requisito agregado satisfactoriamente');
        }
        return back()
            ->WithInput()
            ->with('errors','No se ha podido crear el requisito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $task = Task::findOrFail($id);
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $task = Task::findOrFail($id);
        $norms=Norm::orderBy('codigo', 'ASC')->get();
        return view('tasks.edit', compact('task', 'norms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $task = Task::findOrFail($id);
        //Revisa si se actualizó la evidencia
        if ($request->file('evidencia') != null) {
            $data = ToServer::saveImage($request, 'evidencia', 'img/docs');
            if($task->evidencia != 'img/docs/no_file.png')
            ToServer::deleteFile('', $task->evidencia);
        }
        else $data = $request->all();
        
        if($request->file('evidencia') != null && $task->evidencia == 'img/docs/no_file.png'){
            $data['cumplida'] = true;
            $data['user_id'] = auth()->user()->id;
        }
        //Actualizacion del requisito
        $task->update($data);
        
        return redirect()
                ->route('tasks.index')
                ->with('success','Cambios aplicados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $task = Task::findOrFail($id);
        if($task->evidencia != 'img/docs/no_file.png')
        ToServer::deleteFile('', $task->evidencia);
        $task->forceDelete();
        return redirect()->route('tasks.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function complete($id) {
        $task = Task::findOrFail($id);
        $norms=Norm::orderBy('codigo', 'ASC')->get();
        return view('tasks.complete', compact('task', 'norms'));
    }
}
