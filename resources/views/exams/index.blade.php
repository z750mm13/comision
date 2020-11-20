<?php 
use Carbon\Carbon;
use Tools\Query\Exams;
?>

<?php
$hoy = Carbon::parse(Carbon::now()->toDateString());
if($evaluation) {
  $fin = Carbon::parse($evaluation->fin);
  if($hoy->diff($fin)->invert)
  $restante = $hoy->diffInDays($fin)*-1;
  else
  $restante = $hoy->diffInDays($fin);
}
?>
@extends('layouts.content.default.index',[
    'title' => 'Elaboración de la matriz de riesgos',
    'descriptions' => [
      __('En este apartado se mostrarán las áreas donde has sido asignada(o) para realizar la matriz de riesgos.'),
      ($evaluation? 
        ($restante>-1?
          'Selecciona el área donde quieres realizar tu evaluación. Recuerda que solo tienes: '.
          ($restante==0? 'este día' : $restante. ' días' ). ' para realizarla.'
        : 'Por el momento esta evaluación no está activa.'
        )
      :'Por el momento no hay una evaluación activa.'),
    ],
    'titlebody' => __('Áreas'),
    'image' => null,
    'actividades' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
@if($areas)
<li class="breadcrumb-item active" aria-current="page">Evaluación</li>
@else
<li class="breadcrumb-item"><a href="/exams">Evaluación</a></li>
<li class="breadcrumb-item active" aria-current="page">Zonas a evaluar</li>
@endif
@endpush

@section('bodycontent')
<div class="card-deck">
  @if($evaluation != null)
  @if($areas)
  @foreach($areas as $area)
  <?php
    $resolved = sizeof(Exams::resolvedQuestionsArea($area,$evaluation));
  ?>
  <div class="col-md-4 col-sm-6 col-xm-12">
  <div class="card border-primary mb-3 shadow-sm"> <!-- Borde primario -->
    <div class="card-body text-primary"> <!-- Texto primario -->
      <h5 class="card-title">Area: {{$area->nombre}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">Descripción del examsen</h6>
      <p class="card-text">Se han realizado: {{$resolved}} de {{Exams::toResolvedQuestionsArea($area)}}</p>
      <a class="stretched-link" href="/exams/areas/{{$area->id}}" class="card-link">Ver zonas a evaluar.</a>
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
    $resolved = sizeof(Exams::resolvedQuestions($subarea,$evaluation));
  ?>
  <div class="col-md-4 col-sm-6 col-xm-12">
  <div class="card border-primary mb-3"> <!-- Borde primario -->
    <div class="card-body text-primary"> <!-- Texto primario -->
      <h5 class="card-title">Nombre: {{$subarea->nombre}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">Descripcion del examsen</h6>
      <p class="card-text">Se han realizado: {{$resolved}} preguntas de {{Exams::toResolvedQuestions($subarea)}}.</p>
      @if($restante>-1)
      @if($resolved == 0)
      <a href="/exams/create/{{$subarea->id}}" class="btn btn-primary">Realizar</a>
      @else
      <div class="row">
        <div class="col-md-6">
          <a href="/exams/{{$subarea->id}}/edit" class="btn btn-primary">Editar</a>
        </div>
        <div class="col-md-6">
          <a href="#" class="btn btn-danger"onclick="
          let result =confirm('Esta seguro de eliminar la evaluación? Esta acción no tiene reversión.');
          if(result){
            event.preventDefault();
            document.getElementById('delete-form{{$subarea->id}}').submit();
          }
          ">Eliminar</a>
          <form action="{{ route('exams.destroy',[$subarea->id]) }}" id="delete-form{{$subarea->id}}" method="post" style="display:none">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
          </form>
        </div>
      </div>
      @endif
      @else
      <a href="/exams/{{$subarea->id}}" class="btn btn-primary">Ver evaluación</a>
      @endif
    </div>
  </div>
  </div>
  @endforeach
  @endif
  @else
  <div class="card mb-3"> <!-- Borde primario primary danger warning -->
    <div class="card-body text-center"> <!-- Texto primario -->
      <h4>No hay evaluacion activa</h4>
    </div>
  </div>
  @endif
</div>
@endsection