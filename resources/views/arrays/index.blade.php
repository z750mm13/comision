@extends('layouts.content.default.index',[
    'title' => 'Actividades de área',
    'descriptions' => [
      __('Las actividades de área son aquellas que conllevan una lista de riesgos para cada subárea.'),
      __('En este apartado se podrá tener el control de las asignaciónes de actividades para todas las áreas la institución. Para asignar un titulo al área presione el botón superior o el botón + de cada área.')
    ],
    'titlebody' => __('Actividades'),
    'image' => null,
    'button' => __('Asignar actividad a zona'),
    'urlbutton' => __('/arrays'),
    'instalaciones' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item active" aria-current="page">Actividades</li>
@endpush

@section('precardbody')
<ul class="list-group list-group-flush">
  <li class="list-group-item">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="list-home-list" data-toggle="pill" href="#list-home" role="tab" aria-controls="home">Unidad Alarcón</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Unidad Santa Gertrudis</a>
      </li>
    </ul>
  </li>
</ul>
@endsection

@section('bodycontent')
<div class="row">
  <div class="col-12">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        @include('components.map.targetsmap',[
          'subareas' => $subareas,
          'areas' => $areas
          ])
      </div>
      <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"><div id="gertrudis" class="map map-big shadow-sm"></div></div>
    </div>
  </div>
</div>
<br>
@foreach($subareas as $subarea)
<div id="{{$subarea->id}}" class="col-md-12" style="display: none;">
<div class="col-md-12">
<h1>{{$subarea->nombre}}</h1>
</div>
<div class="card-deck">
  @foreach ($subarea->arrays as $matrix)
  <div class="col-md-4 col-sm-6 col-xm-12">
  <div class="card mb-3"> <!-- Borde primario primary danger warning-->
    <div class="card-header">
      <h5 class="card-title"><a class="stretched-link" href="/arrays/{{$matrix->id}}" >{{$matrix->activity->titulo}}</a></h5>
    </div>
    <div class="card-body"> <!-- Texto primario -->
      <h6 class="card-subtitle mb-2 text-muted">Descripcion de la actividad</h6>
      <p class="card-text">{{substr($matrix->activity->descripcion, 0, 37)."..."}}</p>
    </div>
  </div>
  </div>
  @endforeach
</div>
<div class="col-md-12">
  <a class="col-md-12 btn btn-light btn-lg" href="/arrays/create/{{$subarea->id}}" role="button"><i class="fas fa-plus"></i></a>
</div>
</div>
@endforeach
@endsection