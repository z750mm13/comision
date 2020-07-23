@extends('layouts.app')

@section('title', 'Requisitos')

@section('content')
<div class="jumbotron">
  <h1 class="display-4">Requerimientos</h1>
  <p class="lead">Los requerimientos o requisitos son aspectos particulares que se deben de cumplir de las normas enumerados según su naturaleza. Se mostrarán a continuación de manera general.</p>
  <hr class="my-4">
  <p>En este apartado se podrá tener el control de los requisitos. Si desea agregar un nuevo requisito presione el siguiente botón.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg @if(!Auth::user()->admin) disabled @endif" href="/requirements/create" role="button">Agregar Requisito</a>
  </p>
</div>

<div class="container">
<div class="card-deck">
@foreach($requirements as $requirement)
<div class="col-md-4 col-sm-6 col-xm-12">
<div class="card border-primary mb-3"> <!-- Borde primario -->
  <div class="card-header">{{$requirement->numero}}</div>
  <div class="card-body text-primary"> <!-- Texto primario -->
    <h5 class="card-title">Norma: {{$requirement->norm->codigo}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">Descripcion del requisito</h6>
    <p class="card-text">{{substr($requirement->descripcion, 0, 37)."..."}}</p>
    <a class="stretched-link" href="/requirements/{{$requirement->id}}" class="card-link">Ver mas...</a>
  </div>
</div>
</div>
@endforeach
</div>
</div>
@endsection