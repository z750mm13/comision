@extends('layouts.app')

@section('title', 'Normas')

@section('content')
<div class="jumbotron">
  <h1 class="display-4">Normativa</h1>
  <p class="lead">Las normas correspondientes se mostrarán a continuación.</p>
  <hr class="my-4">
  <p>En este apartado se podrá tener el control de las normas. Si desea agregar una nueva presione el siguiente botón.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg @if(!Auth::user()->admin) disabled @endif" href="/norms/create" role="button">Agregar norma</a>
  </p>
</div>

<div class="container">
<div class="card-deck">
@foreach($norms as $norm)
<div class="col-md-4 col-sm-6 col-xm-12">
<div class="card border-danger mb-3"> <!-- Borde primario primary danger warning-->
  <div class="card-header">{{$norm->codigo}}</div>
  <div class="card-body text-danger"> <!-- Texto primario -->
    <h6 class="card-subtitle mb-2 text-muted">Descripcion de la norma</h6>
    <p class="card-text">{{ substr($norm->titulo, 0, 35)."..." }}</p>
    <a class="stretched-link" href="/norms/{{$norm->id}}" class="card-link">Ver mas...</a>
  </div>
</div>
</div>
@endforeach
</div>
</div>
@endsection