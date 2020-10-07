@extends('layouts.content.default.index',[
    'title' => 'Subáreas',
    'descriptions' => [
      __('Las subáreas son inmuebles pertenecientes a un edificio (Edificio A, Edificio B... Etc.).'),
      __('En este apartado se podrá tener el control de las subáreas de la institución. Para agregar una subárea presione el botón superior.')
    ],
    'titlebody' => __('Subáreas'),
    'image' => null,
    'button' => __('Agregar subárea'),
    'urlbutton' => __('/subareas'),
    'instalaciones' => 'active'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item active" aria-current="page">Subáreas</li>
@endpush

@section('bodycontent')
<div class="row mb-3">
  <div class="col-3">
    <div class="list-group " id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Unidad Alarcón</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Unidad Santa Gertrudis</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        @include('components.map.subareas',[
          'subareas' => $subareas,
          'areas' => $areas
          ])
      </div>
      <div class="tab-pane fade show active" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"><div id="gertrudis" class="map map-big shadow-sm"></div></div>
    </div>
  </div>
</div>

<div class="card-deck">
  @foreach($subareas as $subarea)
    <div class="col-md-4 col-sm-6 col-xm-12">
    <div class="card mb-3"> <!-- Borde primario primary danger warning-->
      <div class="card-header">
        <h5 class="card-title">{{$subarea->nombre}}</h5>
      </div>
      <div class="card-body"> <!-- Texto primario -->
        <h6 class="card-subtitle mb-2 text-muted">Area: {{$subarea->area->nombre}}</h6>
        <a class="stretched-link" href="/subareas/{{$subarea->id}}" class="card-link">Ver mas...</a>
      </div>
    </div>
    </div>
  @endforeach
</div>
@endsection