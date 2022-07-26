@extends('layouts.content.default.index',[
    'title' => 'Subáreas',
    'descriptions' => [
      __('Las subáreas son inmuebles pertenecientes a un edificio (Edificio A, Edificio B... Etc.).'),
      __(auth()->user()->admin?'En este apartado se podrá tener el control de las subáreas de la institución. Para agregar una subárea presione el botón superior.':'')
    ],
    'titlebody' => __('Subáreas'),
    'image' => null,
    'button' => __('Agregar subárea'),
    'urlbutton' => __('/subareas'),
    'instalaciones' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item active" aria-current="page">Subáreas</li>
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
<div class="row mb-3">
  <div class="col-12">
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
<div class="col-12">
  <div class="form-group">
    <div class="input-group input-group-merge">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-search"></i></span>
      </div>
      <input name="busqueda" id="busqueda" class="form-control" placeholder="Buscar" type="text">
    </div>
  </div>
</div>
<br>
<div class="card-deck">
  @foreach($subareas as $subarea)
    <div class="col-md-4 col-sm-6 col-xm-12">
    <div class="card mb-3">
      <div class="card-header">
        <h5 class="card-title">{{$subarea->nombre}}</h5>
      </div>
      <div class="card-body">
        <h4 hidden>{{strtolower($subarea->area->nombre)}} {{strtolower($subarea->nombre)}} {{strtolower($subarea->id)}}</h4>
        <h6 class="card-subtitle mb-2 text-muted">Area: {{$subarea->area->nombre}}</h6>
        <a class="stretched-link" href="/subareas/{{$subarea->id}}" class="card-link">Ver mas...</a>
      </div>
    </div>
    </div>
  @endforeach
</div>
@endsection

@push('js')
<script>
  $('#busqueda').keyup(function (){
    $('.col-md-4.col-sm-6.col-xm-12').show();
    let filter = $(this).val(); // optiene el valor de la busqueda
    filter = filter.toLowerCase();
    $('.card-deck').find('.col-md-4.col-sm-6.col-xm-12 .card .card-body h4:not(:contains("'+filter+'"))').parent().parent().parent().hide();
})
</script>
@endpush