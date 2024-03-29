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
        $tasks = Task::where('next_task',null)->orderBy('id')->get();
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function renovate($task_id) {
        $task = Task::findOrFail($task_id);
        return view('tasks.create', compact('task'));
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
            $data['caducidad'] = $this->caducidad($data['requirement_id']);
        }
        $newtask = Task::create($data);
        if($request->exists('task')) {
            $task = Task::findOrFail($request->input('task'));
            $task->next_task = $newtask->id;
            $task->save();
        }
        if ($newtask) {
            return redirect()
                ->route('tasks.show',[$newtask->id])
                ->with('success','Cumplimiento agregado satisfactoriamente');
        }
        return back()
            ->WithInput()
            ->with('error','No se ha podido crear el cumplimiento');
    }

    private function caducidad($requirement_id) {
        $requirement = Requirement::findOrFail($requirement_id);
        switch ($requirement->frecuencia) {
            case 'Semanal':
                return now()->addWeek(1);
                break;
            case 'Mensual':
                return now()->addMonth(1);
                break;
            case 'Bimestral':
                return now()->addMonth(2);
                break;
            case 'Trimestral':
                return now()->addMonth(3);
                break;
            case 'Semestral':
                return now()->addMonth(6);
                break;
            case 'Anual':
                return now()->addYear(1);
                break;
            default:
                return now();
                break;
        }
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
            $data['caducidad'] = $this->caducidad($task->requirement_id);
            $data['user_id'] = auth()->user()->id;
        }
        //Actualizacion del requisito
        $task->update($data);
        
        return redirect()
                ->route('tasks.index')
                ->with('success','Cumplimiento actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $task = Task::findOrFail($id);
        $anterior = $task->previous;
        $siguiente = $task->next;
        if($anterior&&$siguiente) $anterior->next_task = $siguiente->id;
        else if($anterior) $anterior->next_task = null;
        if($anterior) $anterior->save();
        if($task->evidencia != 'img/docs/no_file.png')
        ToServer::deleteFile('', $task->evidencia);
        $task->forceDelete();
        return redirect()->route('tasks.index')
        ->with('success','Cumplimiento eliminado satisfactoriamente');
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
