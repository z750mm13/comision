@extends('layouts.app')

@section('title', 'Compromisos')

@section('content')
<?php
  use Carbon\Carbon;
  use Tools\Utils\Fecha;
?>
<div class="jumbotron">
  <h1 class="display-4">Compromisos</h1>
  <p class="lead">Los compromisos se realizan una vez realizados los recorridos. Se localizan los problemas y se hace una lista de donde se podrán asignar los responsables a resolverlos.</p>
  <hr class="my-4">
  <p>En este apartado se podrá tener el control de los compromisos. Para agregar uno presione el siguiente botón.</p>
  <a class="btn btn-primary btn-lg" href="/commitments/create" role="button">Agregar Compromiso</a>
</div>

<div class="container">
<div class="card-deck">
@foreach($commitments as $commitment)
<div class="col-md-4 col-sm-6 col-xm-12">
<div class="card border-primary mb-3"> <!-- Borde primario -->
  <div class="card-header">{{$commitment->user->nombre. ' ('. $commitment->user->rol. ')'}}</div>
  <div class="card-body text-primary"> <!-- Texto primario -->
    <h6 class="card-subtitle mb-2 text-muted">Descripcion del compromiso</h6>
    <p class="card-text">Fecha de observación:<br>{{Fecha::texto(Carbon::parse($commitment->review->created_at))}}</p>
    <p class="card-text">Fecha de cumplimiento:<br>{{Fecha::texto(Carbon::parse($commitment->fecha_cumplimiento))}}</p>
    <p class="card-text">Area:<br>{{
      $commitment->review->target->subarea->nombre." [".
      $commitment->review->target->subarea->area->nombre."/".$commitment->review->target->subarea->area->area."]"
    }}</p>
    <p class="card-text">Accion a realizar:<br>{{$commitment->accion}}</p>
    <a class="stretched-link" href="/commitments/{{$commitment->id}}" class="card-link">Ver mas...</a>
  </div>
</div>
</div>
@endforeach
</div>
</div>
@endsection