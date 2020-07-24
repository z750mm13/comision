@extends('layouts.app')

@section('title', 'Cuestionarios')

@section('content')
<div class="jumbotron">
  <h1 class="display-4">Cuestionarios</h1>
  <p class="lead">Los cuestionarios son el conjunto de preguntas asociadas a una característica de los inmuebles o áreas verdes, especificados en los requisitos de las normas. Además, fungen como los tipos o características de las áreas.</p>
  <hr class="my-4">
  <p>En este apartado se podrá tener el control de los cuestionarios. Para agregar uno presione el siguiente botón.</p>
  <a class="btn btn-primary btn-lg" href="/questionnaires/create" role="button">Crear Cuestionario</a>
</div>

<div class="container">
<div class="card-deck">
@foreach($questionnaires as $questionnaire)
<div class="col-md-4 col-sm-6 col-xm-12">
<div class="card border-primary mb-3"> <!-- Borde primario -->
  <div class="card-header">{{$questionnaire->tipo}}</div>
  <div class="card-body text-primary"> <!-- Texto primario -->
    <h6 class="card-subtitle mb-2 text-muted">Descripcion del cuestionario</h6>
    <p class="card-text"><b>Caracteristicas:</b> {{ substr($questionnaire->descripcion , 0, 15)."..." }}</p>
    <p class="card-text"> <b>Primer pregunta:</b> <br>{{ substr($questionnaire->questions->first()->encabezado , 0, 15)."..." }}</p>
    <a class="stretched-link" href="/questionnaires/{{$questionnaire->id}}" class="card-link">Ver mas...</a>
  </div>
</div>
</div>
@endforeach
</div>
</div>
@endsection