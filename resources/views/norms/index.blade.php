@extends('layouts.content.default.index',[
    'title' => 'Normativa',
    'descriptions' => [
      __('Las normas correspondientes se mostrarán a continuación.'),
      __('En este apartado se podrá tener el control de las normas. Si desea agregar una nueva presione el botón superior.')
    ],
    'titlebody' => __('Normas'),
    'image' => null,
    'button' => __('Agregar norma'),
    'urlbutton' => __('/norms'),
    'normativa' => 'active'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item active" aria-current="page">Normas</li>
@endpush

@section('bodycontent')
<div class="card-deck">
  @foreach($norms as $norm)
  <div class="col-md-4 col-sm-6 col-xm-12">
  <div class="card mb-3"> <!-- Borde primario primary danger warning-->
    <div class="card-header">{{$norm->codigo}}</div>
    <div class="card-body"> <!-- Texto primario -->
      <div class="col">
        <h6 class="card-subtitle mb-1 text-muted">Descripcion de la norma</h6>
        <p class="card-text">{{ substr($norm->titulo, 0, 35)."..." }}</p>
        <div class="progress-wrapper">
        <div class="progress-info">
          <div class="progress-label">
            <span>Asignación</span>
          </div>
          <div class="progress-percentage">
            <span>{{$norm->asignado.'%'}}</span>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="{{$norm->asignado}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$norm->asignado}}%;"></div>
        </div>
        </div>
        <a class="stretched-link" href="/norms/{{$norm->id}}" class="card-link">Ver mas...</a>
      </div>
    </div>
  </div>
  </div>
  @endforeach
</div>
@endsection