@extends('layouts.app')

@section('title', 'Supervisión')

@section('content')

<div class="jumbotron">
  <h1 class="display-4">Supervisores</h1>
  <p class="lead">Los supervisores son los encargados de piso. Encargados de realizár los recorridos y resolver los cuestionarios propuestos a fin de cada area para su evaluación.</p>
  <hr class="my-4">
  <p>En este apartado se podrá tener el control de las asignaciónes de area de cada persona que previamente tenga ya un rol asignado. Para asignar un área a una persona presione el sigiente botón o el botón <b>+</b> de cada usuario.</p>
  <a class="btn btn-primary btn-lg" href="/guards/create" role="button">Asignar area a responsable</a>
</div>

<div class="container">
<?php 
  $elements = array(0);
  $existe = false;
  ?>

@foreach($users as $user)
<div class="col-md-12">
<h1>{{$user->nombre ." ". $user->apellidos}}</h1>
</div>
<div class="card-deck">
  @foreach ($user->guards as $guard)
  <div class="col-md-4 col-sm-6 col-xm-12">
  <div class="card mb-3"> <!-- Borde primario primary danger warning-->
    <div class="card-header">
      <h5 class="card-title"><a class="stretched-link" href="/guards/{{$guard->id}}" >{{$guard->area->nombre}}</a></h5>
    </div>
    <div class="card-body text-center"> <!-- Texto primario -->
      <h6 class="card-subtitle mb-2 text-muted">Area: {{$guard->area->area}}</h6>
    </div>
  </div>
  </div>
  @endforeach
</div>
<div class="col-md-12">
<a class="col-md-12 btn btn-light btn-lg" href="/guards/create/{{$user->cordinates->first()->id}}" role="button"><i class="fas fa-plus"></i></a>
</div>
@endforeach
</div>

@endsection