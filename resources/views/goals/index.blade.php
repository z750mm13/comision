@extends('layouts.content.default.index',[
    'title' => 'Metas',
    'descriptions' => [
      __('Las metas del ciclo se mostrarán a continuación.'),
      __('En este apartado se podrá tener el control de las metas. Si desea agregar una nueva presione el botón superior.')
    ],
    'titlebody' => __('Metas'),
    'image' => null,
    'button' => __('Agregar meta'),
    'urlbutton' => __('/goals'),
    'normativa' => 'active'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item {{$norm_id?'':'active'}}" {{$norm_id?'':'aria-current="page"'}}>@if($norm_id)<a href="/goals?cycle_id={{$cycle_id}}">@endif Metas @if($norm_id)</a>@endif</li>
@if($norm_id)<li class="breadcrumb-item active" aria-current="page">Requisitos</li>@endif
@endpush

@section('bodycontent')
<div class="card-deck">
  @foreach($norms as $norm)
  <div class="col-md-4 col-sm-6 col-xm-12">
  <div class="card mb-3"> <!-- Borde primario primary danger warning-->
    <div class="card-header">{{$norm_id?$norm->numero:$norm->codigo}}</div>
    <div class="card-body"> <!-- Texto primario -->
      <h6 class="card-subtitle mb-1 text-muted">Descripcion de{{($norm_id?'l requisito':' la norma')}}</h6>
      <p class="card-text">{{ substr($norm_id?$norm->descripcion:$norm->titulo, 0, 35)."..." }}</p>
      <a class="stretched-link" href="/goals{{($norm_id?'/':'?cycle_id='.$cycle_id.'&'.'norm_id=').$norm->id}}" class="card-link">Ver mas...</a>
    </div>
  </div>
  </div>
  @endforeach
</div>
@endsection