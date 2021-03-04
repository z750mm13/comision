@extends('layouts.content.default.index',[
    'title' => 'Actividades de riesgo',
    'descriptions' => [
      __('Las actividades de riesgos son el conjunto de actividades asociadas a un conjunto de riesgos con el cual se puede optener el riesgo de las instalaciones.'),
      __('En este apartado se podrá tener el control de las actividades de riesgo. Para agregar una actividad presione el botón superior.')
    ],
    'titlebody' => __('Actividades'),
    'image' => null,
    'button' => __('Agregar actividad'),
    'urlbutton' => __('/activities'),
    'actividades' => 'active',
    'matriz' => 'active',
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item active" aria-current="page">Actividades</li>
@endpush

@section('bodycontent')
<div class="card-deck">
  @foreach($activities as $activity)
  <div class="col-md-4 col-sm-6 col-xm-12">
  <div class="card border-primary mb-3"> <!-- Borde primario -->
    <div class="card-header">{{$activity->titulo}}</div>
    <div class="card-body text-primary"> <!-- Texto primario -->
      <h6 class="card-subtitle mb-2 text-muted">Descripcion del cuestionario</h6>
      <p class="card-text"><b>Caracteristicas:</b> {{ substr($activity->descripcion , 0, 15)."..." }}</p>
      <p class="card-text"> <b>Primer peligro:</b> <br>{{ substr($activity->dangers->first()->tipo.' - '.$activity->dangers->first()->titulo , 0, 15)."..." }}</p>
      <a class="stretched-link" href="/activities/{{$activity->id}}" class="card-link">Ver mas...</a>
    </div>
  </div>
  </div>
  @endforeach
</div>  
@endsection
