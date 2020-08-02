@extends('layouts.content.default.index',[
    'title' => 'Áreas de la institución',
    'descriptions' => [
      __('Las áreas son agrupaciones de inmuebles o pertenecientes a un edificio (Edificio A, Edificio B... Etc.).'),
      __('En este apartado se podrá tener el control de las áreas de la institución. Para agregar un área presione el siguiente botón.')
    ],
    'titlebody' => __('Áreas'),
    'image' => null,
    'button' => __('Agregar área'),
    'urlbutton' => __('/areas'),
    'instalaciones' => 'active'
])

@section('bodycontent')
<div class="card-deck">
  @foreach($areas as $area)
    <div class="col-md-4 col-sm-6 col-xm-12">
    <div class="card mb-3 shadow-sm"> <!-- Borde primario primary danger warning-->
      <div class="card-header">
        <h5 class="card-title">{{$area->nombre}}</h5>
      </div>
      <div class="card-body"> <!-- Texto primario -->
        <h6 class="card-subtitle mb-2 text-muted">Area: {{$area->area}}</h6>
        <a class="stretched-link" href="/areas/{{$area->id}}" class="card-link">Ver mas...</a>
      </div>
    </div>
    </div>
  @endforeach
</div>
@endsection