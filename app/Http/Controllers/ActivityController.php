<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\Danger;

class ActivityController extends Controller {
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
        $activities = Activity::all();
        return view('activities.index',compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $activity = Activity::create([
            'titulo' =>  $request->titulo,
            'descripcion' => $request->descripcion
        ]);
        foreach ($request->input('peligros', [])  as $i => $peligro) {
            if($peligro){
                Danger::create([
                    'titulo' => $peligro,
                    'tipo' => $request->input('pregunta'.$i),
                    'activity_id'=> $activity->id
                ]);
            }
        }

        return redirect()
                ->route('activities.index')
                ->with('success','Actividad creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $activity = Activity::findOrFail($id);
        return view('activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $activity = Activity::findOrFail($id);
        return view('activities.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $activity = Activity::findOrfail($id);
        $peligros_id = $request->dangers_id;

        foreach ($request->peligros as $i => $peligro) {
            if ($peligro) {
                $peligro_id = $peligros_id[$i];
                if ($peligro_id){
                    Danger::findOrfail($peligro_id)->update([
                        'titulo' => $peligro,
                        'tipo' => $request->input('pregunta'.$peligro_id),
                    ]);
                }
                
            }
        }
        
        if(isset($request->nuevos))
        foreach ($request->nuevos as $i => $nuevo) {
            if ($nuevo) {
                Danger::create([
                    'titulo' => $nuevo,
                    'tipo' => $request->input('nuevo'.$i),
                    'activity_id'=> $activity->id
                ]);
                
            }
        }

        $activity->update($request->all());
        
        return redirect()
                ->route('activities.show', compact('activity'))
                ->with('success','Actividad actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id) {
        /**
         * Si se elimina el cuestionario
         */
        $activity = Activity::findOrFail($id);
        if($request->danger_id == ''){
            foreach($activity->dangers as $danger){
                $danger->forceDelete();
            }
            $activity->forceDelete();
            return redirect()->route('activities.index')
            ->with('success','Actividad eliminada correctamente');
        }

        /**
         * Si se elimina un peligro
         * Restringimos que por cuestionario haya un peligro
         */
        if($activity->dangers->count() <= 1){
            return redirect()->route('activities.show', [$activity->id]);
        }
        
        $danger = Danger::findOrFail($request->danger_id);
        $activity_id = $danger->activity_id;
        $danger->forceDelete();
        return redirect()->route('activities.show', [$activity_id])
        ->with('success','Actividad eliminada correctamente');
    }
}
