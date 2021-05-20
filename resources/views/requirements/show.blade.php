@extends('layouts.content.default.form',[
  'title' => 'Requisito '. $requirement->numero,
  'titlelist' => 'Acciones',
  'descriptions' => [$requirement->descripcion, 'Tipo: '. $requirement->tipo, 'Norma: '. $requirement->norm->codigo, auth()->user()->admin?'Frecuencia: '. $requirement->frecuencia:''],
  'normativa' => 'active',
  'titlebody' => 'Propiedades del requisito '. $requirement->numero,
  'nodelete' => 'no'
])

<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>

@push('bread')
<li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="{{route('requirements.index')}}">Requisitos</a></li>
<li class="breadcrumb-item active" aria-current="page">{{'Requisito '.$requirement->numero}}</li>
@endpush

@if(Auth::user()->admin)
@section('precardbody')
<ul class="list-group list-group-flush">
  <li class="list-group-item">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link {{$ruta == 'requirements.show'?'active':''}}" href="{{route('requirements.show',[$requirement->id])}}">Cumplimientos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{$ruta == 'requirements.questionnaires'?'active':''}}" href="{{route('requirements.questionnaires',[$requirement->id])}}">Cuestionarios</a>
      </li>
    </ul>
  </li>
</ul>
@endsection

@section('bodycontent')
<div class="row">
<a class="col-12 btn btn-light btn-lg" href="/{{$ruta == 'requirements.show'?'tasks':'questionnaires'}}/create/{{$requirement->id}}" role="button"><i class="fas fa-plus"></i></a>
<p class="col-12"></p>
<div class="col-12 card-deck">
  @if($ruta == 'requirements.show')
    @include('requirements.deck.tasks')
  @elseif($ruta == 'requirements.questionnaires')
    @include('requirements.deck.questionnaires')
  @endif
</div>
</div>
@endsection
@else
@section('bodycontent')
<div class="card mb-3"> <!-- Borde primario primary danger warning -->
  <div class="card-body text-center"> <!-- Texto primario -->
    <h4>Por el momento no se detectaron propiedades adicionales.</h4>
  </div>
</div>
@endsection
@endif

@section('list')
<ol class="list-unstyled">
  <li><a href="{{route('requirements.index')}}"><i class="fas fa-home"></i> Todos los requisitos</a></li>
  @if(Auth::user()->admin)
  <li><a href="{{route('requirements.create')}}"><i class="fas fa-plus"></i> Agregar requisito</a></li>
  <li><a href="{{route('requirements.edit',[$requirement->id])}}"><i class="fas fa-pencil-alt"></i> Editar requisto</a></li>
  <li><a href="#" onclick="
  let result =confirm('Esta seguro de eliminar el requisito?');
  if(result){
    event.preventDefault();
    document.getElementById('delete-form').submit();
  }
  "><i class="fas fa-trash-alt"></i> Eliminar requisito</a></li>
  <form action="{{ route('requirements.destroy',[$requirement->id]) }}" id="delete-form" method="post" style="display:none">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="DELETE">
  </form>
  @endif
</ol>
@endsection