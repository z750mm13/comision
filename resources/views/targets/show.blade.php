@extends('layouts.content.default.form',[
  'title' => $target->subarea->nombre." [".$target->subarea->area->nombre." ".$target->subarea->area->area."]",
  'descriptions' => [
    'Norma: '. $target->questionnaire->requirement->norm->codigo,
    'Descripcion: '. $target->questionnaire->descripcion,
    'Area que aplica: '. $target->subarea->nombre
  ],
  'titlelist' => 'Acciones',
  'titlebody' => 'Propiedades del área',
  'instalaciones' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/targets">Tipos</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$target->subarea->nombre." [".$target->subarea->area->nombre." ".$target->subarea->area->area."]"}}</li>
@endpush

<?php
  use Carbon\Carbon;
  use Tools\Utils\Fecha;
?>

@section('precardbody')
<ul class="list-group list-group-flush">
  <li class="list-group-item">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link {{$ruta == 'targets.show'?'active':''}}" href="{{route('targets.show',[$target->id])}}">Evaluaciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{$ruta == 'targets.questionnaire'?'active':''}}" href="{{route('targets.questionnaire',[$target->id])}}">Cuestionario</a>
      </li>
    </ul>
  </li>
</ul>
@endsection

@section('bodycontent')
<div class="card-deck">
  @if($ruta == 'targets.show')
    @include('targets.deck.evaluations')
  @elseif($ruta == 'targets.questionnaire')
    @include('targets.deck.questionnaire')
  @endif
</div>
@endsection

@section('list')
<ol class="list-unstyled">
  <li><a href="/targets"><i class="fas fa-home"></i> Ver requisitos de las areas</a></li>
  <li><a href="/targets/create"><i class="fas fa-plus"></i> Asignar requisito a zona</a></li>
  <li><a href="/targets/{{$target->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar requisito de area</a></li>
  <li><a href="#" onclick="
  let result =confirm('Esta seguro de eliminar al el requisito?');
  if(result){
    event.preventDefault();
    document.getElementById('delete-form').submit();
  }
  "><i class="fas fa-trash-alt"></i> Eliminar requisito</a></li>
  <form action="{{ route('targets.destroy',[$target->id]) }}" id="delete-form" method="post" style="display:none">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="delete">
  </form>
</ol>
@endsection