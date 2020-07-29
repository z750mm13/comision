@extends('layouts.app')

@section('content')
<?php
  use Carbon\Carbon;
  use Tools\Utils\Fecha;
?>
<div class="container">
<div class="row">
  <div class="col-md-10">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">{{'Fecha de cumplimiento: '. Fecha::texto(Carbon::parse($commitment->fecha_cumplimiento))}}</h1>
        <p class="card-text">{{'Area: '.
          $commitment->review->target->subarea->nombre." [".
          $commitment->review->target->subarea->area->nombre."/".$commitment->review->target->subarea->area->area."]"
        }}</p>
        <p class="card-text">{{'Enunciado: '. $commitment->review->question->encabezado}}</p>
        <p class="card-text">{{'Estado: '. (!$commitment->review->valor? 'No cumple con el requisito': 'Cumple con el requisito, no es necesario que este sea un compromiso')}}</p>
        <p class="card-text">{{'Problema: '. $commitment->review->descripcion}}</p>
        <p class="card-text">{{'Propuesta: '. $commitment->accion}}</p>
        <p class="card-text">{{'Responsable: '. $commitment->user->nombre. ' ('. $commitment->user->rol. ')'}}</p>
      </div>
    </div>
  </div>

<div class="col-md-2">
  <aside>
    <div class="p-4">
    <h4 class="font-italic">Acciones</h4>
    <ol class="list-unstyled">
      <li><a href="/commitments"><i class="fas fa-home"></i> Todos los compromisos</a></li>
      <li><a href="/commitments/create"><i class="fas fa-plus"></i> Agregar compromisos</a></li>
      <li><a href="/commitments/{{$commitment->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar compromiso</a></li>
      <li><a href="#" onclick="
      let result =confirm('Esta seguro de eliminar el requisito?');
      if(result){
        event.preventDefault();
        document.getElementById('delete-form').submit();
      }
      "><i class="fas fa-trash-alt"></i> Eliminar compromiso</a></li>
      <form action="{{ route('commitments.destroy',[$commitment->id]) }}" id="delete-form" method="post" style="display:none">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE">
      </form>
    </ol>
    </div>
  </aside>
</div>
</div>
</div>

@endsection