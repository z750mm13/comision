@extends('layouts.content.default.form',[
  'title' => 'Programación de ciclos',
  'descriptions' => [
      __('En este apartado podrá programar los ciclos de la institución.')
  ],
  'button' => __('Programar ciclo'),
  'urlbutton' => __('/cycles'),
  'titlelist' => 'Acciones',
  'titlebody' => 'Propiedades',
  'actividades' => 'active'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item active" aria-current="page">Ciclos</li>
@endpush

<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>

@section('bodycontent')
<h1>
  Ciclos 
  @if($tiempo)
    @if($tiempo=="proximo")
    próximas
    @elseif($tiempo=="realizados")
    realizadas
    @endif
  @endif
</h1>
@foreach ($cycles as $cycle)
  <div class="col-12">
  <div class="card mb-3"> <!-- Borde primario primary danger warning-->
    <div class="card-body"> <!-- Texto primario -->
      <div class="row">
        <div class="col-md-9 col-xm-12">
          <h3 class="card-title mb-3">{{$cycle->codigo}}</h3>
          <h6 class="card-subtitle mb-1 text-muted">Fecha inicio:</h6>
          <p class="card-text">{{Fecha::texto(Carbon::parse($cycle->inicio))}}.</p>
          <h6 class="card-subtitle mb-1 text-muted">Fecha final:</h6>
          <p class="card-text">{{Fecha::texto(Carbon::parse($cycle->fin))}}.</p>
          <h6 class="card-subtitle mb-1 text-muted">Descripción:</h6>
          <p class="card-text">{{ substr($cycle->descripcion, 0, 35)."..." }}</p>
        </div>
        <div class="col-md-3 col-xm-12 row align-items-center">
          <a href="/cycles/{{$cycle->id}}" class="btn btn-primary">Ver detalles</a>
        </div>
      </div>
    </div>
  </div>
  </div>
@endforeach
@endsection

@section('list')
<ol class="list-unstyled">
  <li><a href="/cycles/"><i class="fas fa-calendar-day"></i> Recientes</a></li>
  <li><a href="/cycles/time/proximo"><i class="fas fa-paste"></i> Próximas</a></li>
  <li><a href="/cycles/time/realizados"><i class="fas fa-clipboard-check"></i> Realizadas</a></li>
</ol>
@endsection