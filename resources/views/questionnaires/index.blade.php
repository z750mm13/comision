@extends('layouts.content.default.index',[
    'bg' => '../argon/img/theme/questionnaires.jpg',
    'title' => 'Cuestionarios',
    'descriptions' => [
      __('Los cuestionarios son el conjunto de preguntas asociadas a una característica de los inmuebles o áreas verdes, especificados en los requisitos de las normas. Además, fungen como los tipos o características de las áreas.'),
      __('En este apartado se podrá tener el control de los cuestionarios. Para agregar uno presione el siguiente botón.')
    ],
    'titlebody' => __('Cuestionarios'),
    'image' => null,
    'button' => __('Agregar cuestionario'),
    'urlbutton' => __('/questionnaires/create')
])

@section('bodycontent')
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
@endsection
