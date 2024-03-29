<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>
@extends('layouts.content.default.index',[
    'title' => 'Publicaciones',
    'descriptions' => [
      __('Las publicaciones son documentos proporcionados por miembros de la comisión para consulta de los integrantes.'),
      __('En este apartado se podrá tener acceso a los documentos compartidos. Si desea agregar una nueva publicación presione el botón superior.')
    ],
    'titlebody' => __('Publicaciones'),
    'image' => null,
    'button' => __('Agregar publicación'),
    'urlbutton' => __('/publications'),
    'publicaciones' => 'active',
    'nodelete' => 'no',
    'acceso_crear'=>true
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item active" aria-current="page">Publicaciones</li>
@endpush

@section('bodycontent')
<div class="card-deck">
  @foreach($publications as $publication)
  <div class="col-md-4 col-sm-6 col-xm-12">
  <div class="card border-primary mb-3"> <!-- Borde primario -->
    <div class="card-header">
      <div class="row align-items-center">
        <div class="col-auto">
          <!-- Avatar -->
          <img alt="Image placeholder" src="{{\Tools\Img\ToServer::getFile($publication->user->foto)}}" class="avatar avatar-xl rounded-circle">
        </div>
        <div class="col ml--2">
          <h4 class="mb-0">
            {{$publication->user->nombre. ' '.$publication->user->apellidos}}
          </h4>
          <p class="text-sm text-muted mb-0">{{Fecha::texto(Carbon::parse($publication->created_at))}}</p>
        </div>
      </div>
    </div>
    <div class="card-body text-primary"> <!-- Texto primario -->
      <h5 class="h2 card-title mb-0{{$publication->visible?'':' text-muted'}}">{{$publication->titulo}}</h5>
      <p class="card-text mb-4">{{$publication->descripcion}}</p>
      @if(!$publication->visible)
      <p class="card-text mt-4 text-muted">Esta publicación no es visible</p>
      @endif
      <a class="stretched-link" href="/publications/{{$publication->id}}" class="card-link">Ver publicación</a>
    </div>
  </div>
  </div>
  @endforeach
  </div>
@endsection