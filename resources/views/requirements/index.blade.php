@extends('layouts.content.default.index',[
    'title' => 'Requerimientos',
    'descriptions' => [
      __('Los requerimientos o requisitos son aspectos particulares que se deben de cumplir de las normas enumerados según su naturaleza. Se mostrarán a continuación de manera general.'),
      __('En este apartado se podrá tener el control de los requisitos. Si desea agregar un nuevo requisito presione el siguiente botón.')
    ],
    'titlebody' => __('Requisitos'),
    'image' => null,
    'button' => __('Agregar requisito'),
    'urlbutton' => __('/requirements/create'),
    'normativa' => 'active'
])

@section('bodycontent')
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
@endsection