<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>

@extends('layouts.content.default.index',[
    'title' => 'Cumplimiento normativo',
    'descriptions' => [
      __('Cumplimientos directos de las normas (capacitaciones, simulacros y evidencias).'),
      __('En este apartado se podrá tener el control de los cumplimientos directos de requisitos. Para agregar un cumplimiento presione el botón superior.')
    ],
    'titlebody' => __('Cumplimientos'),
    'image' => null,
    'button' => __('Cumplir requisito'),
    'urlbutton' => __('/tasks'),
    'actividades' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item active" aria-current="page">Cumplimientos</li>
@endpush

@section('precardbody')
<ul class="list-group list-group-flush">
  <li class="list-group-item">
    <div class="form-group">
      <div class="input-group input-group-merge">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-search"></i></span>
        </div>
        <input name="busqueda" id="busqueda" class="form-control" placeholder="Buscar" type="text">
      </div>
    </div>
  </li>
</ul>
@endsection

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
      <div class="card-body">
        <h4 hidden>
          {{strtolower(substr($task->descripcion, 0, 40))}}
          {{strtolower(substr($task->requirement->norm->codigo.' '.$task->requirement->numero, 0, 100))}}
          @if($task->programable)
          {{strtolower(Fecha::texto(Carbon::parse($task->inicio)))}}
          {{strtolower(Fecha::texto(Carbon::parse($task->fin)))}}
          programable
          @else
          {{strtolower(substr($task->descripcion, 0, 100))}}
          @endif
          @if($task->cumplida)
          @if(now()->lte(Carbon::parse($task->caducidad)))
          se ha cumplido
          @else
          se ha cumplido, pero ha caducado
          @endif
          {{strtolower($task->user->rol??$task->user->nombre.' '.$task->user->apellidos)}}
          {{strtolower(Fecha::texto(Carbon::parse($task->caducidad)))}}
          @else
          no se ha cumplido
          @endif
        </h4>
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

@push('js')
<script>
  $('#busqueda').keyup(function (){
    $('.col-md-4.col-sm-6.col-xm-12').show();
    var filter = $(this).val(); // optiene el valor de la busqueda
    filter = filter.toLowerCase();
    $('.card-deck').find('.col-md-4.col-sm-6.col-xm-12 .card .card-body h4:not(:contains("'+filter+'"))').parent().parent().parent().hide();
})
</script>
@endpush