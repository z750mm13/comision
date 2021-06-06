@extends('layouts.content.default.index',[
    'title' => 'Compromisos',
    'descriptions' => [
      __('Los compromisos se realizan una vez realizados los recorridos. Se localizan los problemas y se hace una lista de donde se podrán asignar los responsables a resolverlos.'),
      __('En este apartado se podrá tener el control de los compromisos. Para agregar uno presione el botón superior.')
    ],
    'titlebody' => __('Compromisos'),
    'image' => null,
    'button' => __('Crear compromiso'),
    'urlbutton' => __('/commitments'),
    'actividades' => 'active',
    'compromisos' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item active" aria-current="page">Compromisos</li>
@endpush

@section('precardbody')
<ul class="list-group list-group-flush">
  <li class="list-group-item">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link {{$ruta == 'commitments.index'?'active':''}}" href="{{route('commitments.index')}}">Mis compromisos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{$ruta == 'commitments.problems'?'active':''}}" href="{{route('commitments.problems')}}">Problemas</a>
      </li>
    </ul>
  </li>
  @if($ruta == 'commitments.problems')
  <li class="list-group-item">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">
          <span class="d-none d-md-block">Alarcón</span>
          <span class="d-md-none">A</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
          <span class="d-none d-md-block">Santa Gertrudis</span>
          <span class="d-md-none">S</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="list-other-list" data-toggle="list" href="#list-other" role="tab" aria-controls="other">
          <span class="d-none d-md-block">Otras áreas</span>
          <span class="d-md-none">O</span>
        </a>
      </li>
    </ul>
  </li>
  @else
  <li class="list-group-item">
    <div class="form-group">
      <div class="input-group input-group-merge">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-search"></i></span>
        </div>
        <input name="busqueda" id="busqueda" class="form-control" placeholder="Buscar" type="text">
      </div>
    </div>
  </li>
  @endif
</ul>
@endsection

@section('bodycontent')
@if($ruta == 'commitments.index')
    @include('commitments.body.commitments')
@elseif($ruta == 'commitments.problems')
    @include('commitments.body.problems')
@endif
@endsection