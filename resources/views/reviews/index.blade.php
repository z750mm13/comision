@extends('layouts.app')

@section('title', 'Evaluaciones')

@section('content')

<?php 
use Carbon\Carbon;
use Tools\Query\Reviews;
?>

<?php
$hoy = Carbon::parse(Carbon::now()->toDateString());
if($validity) {
  $fin = Carbon::parse($validity->fin);
  if($hoy->diff($fin)->invert)
  $restante = $hoy->diffInDays($fin)*-1;
  else
  $restante = $hoy->diffInDays($fin);
}
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
    @if($areas)
    <li class="breadcrumb-item active" aria-current="page">Evaluaciones</li>
    @else
    <li class="breadcrumb-item"><a href="/reviews">Evaluaciones</a></li>
    <li class="breadcrumb-item active" aria-current="page">Zonas a evaluar</li>
    @endif
  </ol>
</nav>

<div class="jumbotron">
  <h1 class="display-4">Evaluación</h1>
  <p class="lead">En este apartado se mostrarán las áreas donde has sido asignada(o) para realizar la evaluación de correspondiente.</p>
  <hr class="my-4">
  @if($validity)
  @if($restante>-1)
  <p>Selecciona el área donde quieres realizar tu evaluación.</p>
  <p>Recuerda que solo tienes: @if($restante==0) este día @else{{$restante}} días @endif para realizarla.</p>
  @else
  <p>Por el momento esta evaluación no está activa.</p>
  @endif
  @else
  <p>Por el momento no hay una evaluación activa.</p>
  @endif
</div>

<div class="container">
<div class="card-deck">
@if($validity != null)
@if($areas & $areas != -1)
@foreach($areas as $area)
<?php
  $resolved = sizeof(Reviews::resolvedQuestionsArea($area,$validity));
?>
<div class="col-md-4 col-sm-6 col-xm-12">
<div class="card border-primary mb-3 shadow-sm"> <!-- Borde primario -->
  <div class="card-body text-primary"> <!-- Texto primario -->
    <h5 class="card-title">Area: {{$area->nombre}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Descripción del examen</h6>
    <p class="card-text">Se han realizado: {{$resolved}}</p>
    <a class="stretched-link" href="/reviews/subareas/{{$area->id}}" class="card-link">Ver zonas a evaluar.</a>
  </div>
</div>
</div>
@endforeach
{{--
  Revisar la linea 75
  2.7 y 2.8 
  --}}
@elseif($areas != -1)
<h1 class="col-12">{{$area->nombre}}</h1>
@foreach($subareas as $subarea)
<?php
  $resolved = sizeof(Reviews::resolvedQuestions($subarea,$validity));
?>
<div class="col-md-4 col-sm-6 col-xm-12">
<div class="card border-primary mb-3"> <!-- Borde primario -->
  <div class="card-body text-primary"> <!-- Texto primario -->
    <h5 class="card-title">Nombre: {{$subarea->nombre}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Descripcion del examen</h6>
    <p class="card-text">Se han realizado: {{$resolved}} preguntas.</p>
    @if($restante>-1)
    @if($resolved == 0)
    <a href="/reviews/create/{{$subarea->id}}" class="btn btn-primary">Realizar</a>
    @else
    <div class="row">
      <div class="col-md-6">
        <a href="/reviews/{{$subarea->id}}/edit" class="btn btn-primary">Editar</a>
      </div>
      <div class="col-md-6">
        <a href="#" class="btn btn-danger"onclick="
        let result =confirm('Esta seguro de eliminar la evaluación? Esta acción no tiene reversión.');
        if(result){
          event.preventDefault();
          document.getElementById('delete-form{{$subarea->id}}').submit();
        }
        ">Eliminar</a>
        <form action="{{ route('reviews.destroy',[$subarea->id]) }}" id="delete-form{{$subarea->id}}" method="post" style="display:none">
          {{csrf_field()}}
          <input type="hidden" name="_method" value="DELETE">
        </form>
      </div>
    </div>
    @endif
    @else
    <a href="/reviews/{{$subarea->id}}" class="btn btn-primary">Ver evaluación</a>
    @endif
  </div>
</div>
</div>
@endforeach
@endif
@else
<h2>No hay evaluaciones activas</h2>
@endif
</div>
</div>
@endsection