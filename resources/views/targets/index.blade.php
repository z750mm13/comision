@extends('layouts.app')

@section('title', 'Requisitos de areas')

@section('content')
<div class="jumbotron">
  <h1 class="display-4">Tipos de área</h1>
  <p class="lead">Los tipos de área son en otras palabras las características de cada subárea. estos tipos tienen asignados un grupo o conjunto de preguntas para su evaluación basados en la normas.</p>
  <hr class="my-4">
  <p>En este apartado se podrá tener el control de las asignaciónes de tipos para todas las áreas la institución. Para asignar un tipo al área presione el sigiente botón o el botón <b>+</b> de cada área.</p>
  <a class="mb-3 btn btn-primary btn-lg" href="/targets/create" role="button">Asignar tipo a zona</a>
  
  <div class="row">
    <div class="col-3">
      <div class="list-group " id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Unidad Alarcón</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Unidad Santa Gertrudis</a>
      </div>
    </div>
    <div class="col-9">
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
</div>

</div>
<div class="container">
@foreach($subareas as $subarea)
<div id="{{$subarea->id}}" class="col-md-12" style="display: none;">
<div class="col-md-12">
<h1>{{$subarea->nombre}}</h1>
</div>
<div class="card-deck">
  @foreach ($subarea->targets as $target)
  <div class="col-md-4 col-sm-6 col-xm-12">
  <div class="card mb-3"> <!-- Borde primario primary danger warning-->
    <div class="card-header">
      <h5 class="card-title"><a class="stretched-link" href="/targets/{{$target->id}}" >{{$target->questionnaire->tipo}}</a></h5>
    </div>
    <div class="card-body"> <!-- Texto primario -->
      <h6 class="card-subtitle mb-2 text-muted">Descripcion del requisito</h6>
      <p class="card-text">{{substr($target->questionnaire->descripcion, 0, 37)."..."}}</p>
    </div>
  </div>
  </div>
  @endforeach
</div>
<div class="col-md-12">
<a class="col-md-12 btn btn-light btn-lg" href="/targets/create/{{$subarea->id}}" role="button"><i class="fas fa-plus"></i></a>
</div>
</div>

@endforeach
</div>

@endsection