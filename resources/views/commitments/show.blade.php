<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>
@extends('layouts.content.nobody.show',[
  'title' => 'Area: '.
          $commitment->review->target->subarea->nombre." [".
          $commitment->review->target->subarea->area->nombre."/".$commitment->review->target->subarea->area->area."]",
  'titlelist' => 'Acciones',
  'descriptions' => [
    'Fecha de cumplimiento: '. Fecha::texto(Carbon::parse($commitment->fecha_cumplimiento)),
    'Enunciado: '. $commitment->review->question->encabezado,
    'Estado: '. (!$commitment->review->valor? 'No cumple con el requisito': 'Cumple con el requisito, no es necesario que este sea un compromiso'),
    'Problema: '. $commitment->review->descripcion,
    'Propuesta: '. $commitment->accion,
    'Responsable: '. $commitment->user->nombre. ' ('. $commitment->user->rol. ')'
  ],
  'actividades' => 'active'
])

@section('list')
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
@endsection