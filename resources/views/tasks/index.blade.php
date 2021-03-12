<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>

@extends('layouts.content.default.index',[
    'title' => 'Tareas',
    'descriptions' => [
      __('Las tareas son cumplimientos directos de las normas (capacitaciones, simulacros y evidencias).'),
      __('En este apartado se podrá tener el control de las tareas. Para agregar una tarea presione el botón superior.')
    ],
    'titlebody' => __('Tareas'),
    'image' => null,
    'button' => __('Agregar tarea'),
    'urlbutton' => __('/tasks'),
    'actividades' => 'active',
  'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item active" aria-current="page">Tareas</li>
@endpush

@section('bodycontent')
<div class="card-deck">
  @foreach($tasks as $task)
    <div class="col-md-4 col-sm-6 col-xm-12">
    <div class="card mb-3"> <!-- Borde primario primary danger warning-->
      @if(!$task->programable)
      <img class="card-img-top" src="{{\Tools\Img\ToServer::getFile($task->evidencia)}}" alt="Image placeholder">
      @else
      <div class="card-header">
        <h5 class="card-title">{{ substr($task->descripcion, 0, 40)."..." }}</h5>
      </div>
      @endif
      <div class="card-body"> <!-- Texto primario -->
        <h6 class="card-subtitle mb-1 text-muted">Descripcion de la norma</h6>
        <p class="card-text">Norma: {{ substr($task->requirement->norm->codigo.' Requisito: '.$task->requirement->numero, 0, 100)."..." }}</p>
        @if($task->programable)
        <p class="card-text">Fecha inicio:<br>{{Fecha::texto(Carbon::parse($task->inicio))}}.</p>
        <p class="card-text">Fecha fin:<br>{{Fecha::texto(Carbon::parse($task->fin))}}.</p>
        @else
        <p class="card-text">Descripcion: {{ substr($task->descripcion, 0, 100)."..." }}</p>
        @endif
        <p class="lead">Estado: 
        @if($task->cumplida)
        @if(now()->lte(Carbon::parse($task->caducidad)))
        <b class="text-success"> <i class="fas fa-check"></i> Se ha cumplido.</b>
        </p>
        @else
        <b class="text-warning"> <i class="fas fa-check"></i> Se ha cumplido, pero ha caducado.</b>
        </p>
        @endif
        <p class="lead">
          Cumplido por: <spam class="text-body">{{$task->user->rol??$task->user->nombre.' '.$task->user->apellidos}}</spam>
        </p>
        <p class="lead">Caduca:<br>{{Fecha::texto(Carbon::parse($task->caducidad))}}.</p>
        @else
        <b class="text-danger"><i class="fas fa-times"></i> No se ha cumplido.</b>
        @endif
        </p>
        <a class="stretched-link" href="/tasks/{{$task->id}}" class="card-link">Ver mas...</a>
      </div>
    </div>
    </div>
  @endforeach
</div>
@endsection