<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>
@extends('layouts.content.default.form',[
  'title' => $publication->titulo,
  'titlelist' => 'Acciones',
  'titlebody' => 'Documento',
  'descriptions' => [$publication->descripcion,'Por: '. $publication->user->nombre. ' '. $publication->user->apellidos],
  'publicaciones' => 'active',
  'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/publications">Publicaciones</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$publication->titulo}}</li>
@endpush

@section('list')
<ol class="list-unstyled">
  <li><a href="/publications"><i class="fas fa-home"></i> Todas las publicaciones</a></li>
  <li><a href="/publications/create"><i class="fas fa-plus"></i> Crear publicación</a></li>
  @if(Auth::user()->id == $publication->user_id)
  <li><a href="/publications/{{$publication->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar publicación</a></li>
  <li><a href="#" onclick="
  let result =confirm('Esta seguro de eliminar la publicación?');
  if(result){
    event.preventDefault();
    document.getElementById('delete-form').submit();
  }
  "><i class="fas fa-trash-alt"></i> Eliminar publicación</a></li>
  <form action="{{ route('publications.destroy',[$publication->id]) }}" id="delete-form" method="post" style="display:none">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="DELETE">
  </form>
  @endif
</ol>
@endsection

@section('bodycontent')
<div class="card-deck">
  <div class="col-md-6 col-xm-12">
  <div class="card border-primary mb-3"> <!-- Borde primario -->
    <div class="card-header">{{$publication->titulo}}</div>
    <div class="card-body text-primary"> <!-- Texto primario -->
      <h5 class="h2 card-title mb-0">{{$publication->titulo}}</h5>
      <small class="text-muted">Por {{$publication->user->nombre. ' '. $publication->user->apellidos}} el {{Fecha::texto(Carbon::parse($publication->created_at))}}</small>
      <p></p>
      <a target="_blank" class="stretched-link" href="{{\Tools\Img\ToServer::getFile($publication->documento)}}" class="card-link">Ver documento</a>
    </div>
  </div>
  </div>
</div>
@endsection