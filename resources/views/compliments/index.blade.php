<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>
@extends('layouts.content.default.index',[
    'title' => 'Cumplimientos',
    'descriptions' => [
      __('Los cumplimientos se realizan a partir de los compromisos que se han realizado previamente.'),
      __('En este apartado se podrá tener el control de los cumplimientos. Para agregar uno presione el botón superior.')
    ],
    'titlebody' => __('Cumplimientos'),
    'image' => null,
    'button' => __('Crear cumplimiento'),
    'urlbutton' => __('/compliments'),
    'actividades' => 'active',
    'compromisos' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item active" aria-current="page">Cumplimientos</li>
@endpush

@section('bodycontent')
<div class="card-deck">
  @foreach($compliments as $compliment)
  <?php $subarea = $compliment->commitment->review->target->subarea; ?>
    <div class="col-md-4 col-sm-6 col-xm-12">
    <div class="card mb-3"> <!-- Borde primario primary danger warning-->
      <div class="card-header">
      <h5 class="card-title">{{$compliment->commitment->user->rol}} / {{"[".$subarea->nombre."-".$subarea->area->nombre}}</h5>
      </div>
      <div class="card-body"> <!-- Texto primario -->
        <p><img src="{{\Tools\Img\ToServer::getFile($compliment->evidencia)}}" alt="evidencia" style="width: 10rem;"></p>
        <h6 class="card-subtitle mb-2 text-muted">Fecha: {{Fecha::texto(Carbon::parse($compliment->fecha))}}</h6>
        <a class="stretched-link" href="/compliments/{{$compliment->id}}" class="card-link">Ver mas...</a>
      </div>
    </div>
    </div>
  @endforeach
</div>
@endsection