@extends('layouts.app')

@section('title', 'Cumplimientos')

@section('content')
<?php
  use Carbon\Carbon;
  use Tools\Utils\Fecha;
?>

<div class="jumbotron">
  <h1 class="display-4">Cumplimientos</h1>
  <p class="lead">Los cumplimientos se realizan a partir de los compromisos que se han realizado previamente.</p>
  <hr class="my-4">
  <p>En este apartado se podrá tener el control de los cumplimientos. Para agregar uno presione el siguiente botón.</p>
  <a class="btn btn-primary btn-lg" href="/compliments/create" role="button">Agregar cumplimiento</a>
</div>

<div class="container">
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
</div>

@endsection