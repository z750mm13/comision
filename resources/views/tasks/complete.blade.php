<?php 
use Carbon\Carbon;
use Tools\Utils\Fecha;

$hoy = Carbon::parse(Carbon::now()->toDateString());
$finicio = Carbon::parse($task->inicio); // para editar debe haber una dif 1 mas
$ffin = Carbon::parse($task->fin); // para editar debe haber una dif 1 mas

$inicio = $hoy->diffInDays($finicio) * ($hoy->diff($finicio)->invert? -1: 1);

$fin = $hoy->diffInDays($ffin) * ($hoy->diff($ffin)->invert? -1: 1);
?>

@extends('layouts.content.default.form',[
    'title' => 'Cumplir tarea',
    'titlelist' => 'Acciones',
    'titlebody' => 'Requisito '.$task->requirement->numero,
    'actividades' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/tasks">Tareas</a></li>
<li class="breadcrumb-item"><a href="/tasks/{{$task->id}}">{{$task->requirement->norm->codigo.' - '.$task->requirement->numero}}</a></li>
<li class="breadcrumb-item active" aria-current="page">Cumplimiento de tarea</li>
@endpush

@section('list')
<ol class="list-unstyled">
    <li><a href="/tasks/{{$task->id}}">Ver tarea</a></li>
    <li><a href="/tasks">Todas las tareas</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('tasks.update',[$task->id])}}" method="Post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PUT')}}
    
    @if($task->programable)
    <div class="form-group">
        <label for="task-descripcion">Descripcion:</label>
        <textarea class="form-control" placeholder="Descripción de la tarea" name="postdescripcion" id="task-descripcion" rows="3">{{$task->postdescripcion??''}}</textarea>
    </div>
    <div id="archivo" class="form-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="evidencia" lang="es" accept=".jpg,.png" required>
            <label class="custom-file-label" for="customFile">Evidencia</label>
        </div>
        <small class="text-danger">{{ $errors->first('evidencia') }}</small>
    </div>
    @else
    <div class="card mb-3"> <!-- Borde primario primary danger warning -->
        <div class="card-body text-center"> <!-- Texto primario -->
            <h3>Lo sentimos</h3>
            <h4>No se pueden cumplir con la tarea que no tiene fechas de programación</h4>
        </div>
    </div>
    @endif

    <div class="form-group">
        <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
    </div>
</form>
@endsection