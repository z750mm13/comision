<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Norm;
use App\Requirement;
use App\Task;

use Illuminate\Support\Str;
use Carbon\Carbon;
use Tools\Query\Norms;
class NormStatisticController extends Controller {
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
    public function index(Request $request) {
        $anio = $request->input('anio')?? Carbon::now()->year;
        $cumplidos = $request->input('cumplidos')??'on';

        $goal=Norms::getGoal($anio);
        $fecha = Carbon::parse($anio.'-01-01')->addYear();
        $cumplimientos = Norm::select(DB::raw('norms.codigo, requirements.numero, (case when count(tasks.id) = 0 then 0 else 1 end) tareas'))
        ->leftJoin('requirements','requirements.norm_id','=','norms.id')
        ->leftJoin('tasks', function ($join) use($fecha) {
            $join->on('tasks.requirement_id', '=','requirements.id')
            ->where([
                ['tasks.cumplida', '=','true'],
                ['tasks.created_at', '<',"'".$fecha->format('Y-m-d')."'"]
            ]);
        })
        ->groupBy('norms.codigo','requirements.numero');
        $total = Norm::select(DB::raw('sum(tareas) cumplimientos, count(tareas) avance'))
        ->from(\DB::raw(' ('. Str::replaceArray('?', $cumplimientos->getBindings(), $cumplimientos->toSql()) .') as cumplidos' ))
        ->limit(8)
        ->withTrashed()
        ->get()
        ->first();

        $totalrequisitos= Requirement::select(DB::raw('count(requirements.id) total'))
        ->where(
            DB::raw('extract(year FROM requirements.created_at) <= '.$anio.' and null')
        )->get()->first()->total;
        $meses = [];
        for($mes=1; $mes < 13; $mes++){
            $fecha = Carbon::parse($anio.'-'.$mes."-01")->addMonth();
            $cumpl = Norm::select(DB::raw('norms.id, requirements.numero, (case when count(tasks.id) = 0 then 0 else 1 end) tareas'))
            ->leftJoin('requirements', function ($join) use($fecha) {
                $join->on('requirements.norm_id', '=','norms.id')
                ->where(
                    DB::raw("(requirements.deleted_at is null or requirements.deleted_at < '".$fecha->format('Y-m-d')."' ) and requirements.created_at < '".$fecha->format('Y-m-d')."' and null")
                );
            })
            ->leftJoin('tasks', function ($join) use($fecha) {
                $join->on('tasks.requirement_id', '=','requirements.id')
                ->where(
                    DB::raw("tasks.cumplida = true and (tasks.deleted_at is null or tasks.deleted_at < '".$fecha->format('Y-m-d')."' ) and  tasks.created_at < '".$fecha->format('Y-m-d')."' and null")
                );
            })
            ->groupBy('norms.id','requirements.numero')
            ->withTrashed()
            ->where(
                DB::raw("(norms.deleted_at is null or norms.deleted_at < '".$fecha->format('Y-m-d')."' ) and norms.created_at < '".$fecha->format('Y-m-d')."' and null")
            );
            $meses[$mes] = Norm::select(DB::raw('sum(tareas) cumplimientos'))
            ->from(\DB::raw(' ('. $cumpl->toSql() .') as cumplidos' ))
            ->withTrashed()
            ->get()
            ->first();
        }

        $requirements = Norm::select(DB::raw('norms.codigo norma, requirements.id, requirements.numero requisito, requirements.descripcion, (case when count(tasks.id) = 0 then 0 else 1 end) cumple'))
        ->leftJoin('requirements', function ($join) use($anio){
            $join->on('requirements.norm_id', '=','norms.id')
            ->where(
                DB::raw('extract(year FROM requirements.created_at) <= '.$anio.' and null')
            );
        })
        ->leftJoin('tasks', function ($join) use($anio){
            $join->on('tasks.requirement_id', '=','requirements.id')
            ->where(
                DB::raw('tasks.cumplida = true and extract(year FROM tasks.created_at) = '.$anio.' and null')
            );
        })
        ->groupBy('norms.codigo','requirements.id','requirements.numero','requirements.descripcion')
        ->withTrashed()
        ->where(
            DB::raw('extract(year FROM norms.created_at) <= '.$anio.' and null')
        )->orderBy('norms.codigo')
        ->orderBy('requirements.numero');

        if($cumplidos){
            $requirements->havingRaw('(case when count(tasks.id) = 0 then 0 else 1 end) > ?', [0]);
        }

        $estadisticas = 'active';

        $requirements = $requirements->get();
        //dd($requirements);
        return view('statistics.norms.index', compact(
            'cumplidos','anio','requirements','goal','total','totalrequisitos','meses','estadisticas'
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id) {
        $anio = $request->input('anio')?? Carbon::now()->year;

        $requirement = Requirement::findOrfail($id);
        $tasks = Task::withTrashed()
        ->where(
            DB::raw('tasks.requirement_id = '.$requirement->id.' and extract(year FROM tasks.created_at) = '.$anio.' and null')
        )->orderBy('tasks.created_at')
        ->get();
        return view('statistics.norms.show', compact('requirement','tasks','anio'));
    }
}