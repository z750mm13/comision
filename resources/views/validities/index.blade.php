@extends('layouts.content.default.form',[
  'title' => 'Programación de recorridos',
  'descriptions' => [
      __('En este apartado podrá programar los recorridos que se van a realizar durante el ciclo en las distintas áreas de la institución.')
  ],
  'button' => __('Programar recorrido'),
  'urlbutton' => __('/validities'),
  'titlelist' => 'Acciones',
  'titlebody' => 'Propiedades',
  'recorridos' => 'active',
  'actividades' => 'active',
  'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item active" aria-current="page">Evaluaciones</li>
@endpush

<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>

@section('bodycontent')
<h1>
  Evaluaciones 
  @if($tiempo)
    @if($tiempo=="proximo")
    próximas
    @elseif($tiempo=="realizados")
    realizadas
    @endif
  @endif
</h1>
@foreach ($validities as $validity)
  <div class="col-12">
  <div class="card mb-3"> <!-- Borde primario primary danger warning-->
    <div class="card-body"> <!-- Texto primario -->
      <div class="row justify-content-between">
        <div class="col-md-4 col-xm-12">
          <p class="card-text">Fecha inicio:<br>{{Fecha::texto(Carbon::parse($validity->inicio))}}.</p>
          <p class="card-text">Fecha fin:<br>{{Fecha::texto(Carbon::parse($validity->fin))}}.</p>
        </div>
        <div class="col-md-3 col-xm-12 row align-items-center">
          <a href="/validities/{{$validity->id}}" class="btn btn-primary">Ver detalles</a>
        </div>
      </div>
    </div>
  </div>
  </div>
@endforeach
@endsection

@section('list')
<ol class="list-unstyled">
  <li><a href="/validities/"><i class="fas fa-calendar-day"></i> Recientes</a></li>
  <li><a href="/validities/time/proximo"><i class="fas fa-paste"></i> Próximas</a></li>
  <li><a href="/validities/time/realizados"><i class="fas fa-clipboard-check"></i> Realizadas</a></li>
</ol>
@endsection