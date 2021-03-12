<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>
<?php
if($task->programable){
  if($task->evidencia == 'img/docs/no_file.png')
    $botones = [
      'button' => __('Cumplir requisito'),
      'urlbutton' => __('/tasks/'.$task->id)
    ];
  else
    $botones = [
      'button' => __('Editar cumplimiento'),
      'urlbutton' => __('/tasks/'.$task->id)
    ];
  $programa = [
    '','',
    'Descripcion previa: '.$task->descripcion,
    'Inicio: '.Fecha::texto(Carbon::parse($task->inicio)),
    'Fin: '.Fecha::texto(Carbon::parse($task->fin)),
    'Descripcion del cumplimiento: '.($task->postdescripcion??'Sin descripción'),
    'Estado: '. ($task->caducidad? now()->lte(Carbon::parse($task->caducidad))? 'Se ha cumplido' : 'Se ha cumplido, pero ha caducado' : 'No se ha cumplido'),
    'Caducidad: '. ($task->caducidad? Fecha::texto(Carbon::parse($task->caducidad)) : 'Sin caducidad'),
  ];
} else {
  $botones = [];
  $programa = ['','',
    'Descripcion: '.$task->descripcion,
    'Estado: '.($task->caducidad? now()->lte(Carbon::parse($task->caducidad))? 'Se ha cumplido' : 'Se ha cumplido, pero ha caducado!' : 'No se ha cumplido'),
    'Caducidad: '. ($task->caducidad? Fecha::texto(Carbon::parse($task->caducidad)) : 'Sin caducidad'),
  ];
}
?>
@extends('layouts.content.default.form',$botones+[
  'title' => 'Requisito '.$task->requirement->numero,
  'titlelist' => 'Acciones',
  'titlebody' => 'Propiedades de la tarea',
  'descriptions' => [
    'Norma:'. $task->requirement->norm->codigo.' '.$task->requirement->norm->titulo,
    'Requisito: '. $task->requirement->numero.' '.$task->requirement->descripcion
  ]+$programa,
  'actividades' => 'active',
  'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/tasks">Tareas</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$task->requirement->norm->codigo.' - '.$task->requirement->numero}}</li>
@endpush

@push('aditional')
<div class="col-md-2">
  <img class="rounded" src="{{\Tools\Img\ToServer::getFile($task->evidencia)}}" alt="evidencia" style="width: 10rem;" data-toggle="modal" data-target="#exampleModalCenter">
</div>
<div class="modal fade bg-transparent" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="bg-transparent transparent-border">
      <div class="d-flex justify-content-center">
        <img class="rounded" src="{{\Tools\Img\ToServer::getFile($task->evidencia)}}" alt="evidencia">
      </div>
    </div>
  </div>
</div>
@endpush

@section('list')
<ol class="list-unstyled">
  <li><a href="/tasks"><i class="fas fa-home"></i> Tareas</a></li>
  <li><a href="/tasks/create"><i class="fas fa-plus"></i> Agregar tarea</a></li>
  <li><a href="/tasks/{{$task->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar tarea</a></li>
  <li><a href="#" onclick="
  let result =confirm('Esta seguro de eliminar la tarea?');
  if(result){
    event.preventDefault();
    document.getElementById('delete-form').submit();
  }
  "><i class="fas fa-trash-alt"></i> Eliminar</a></li>
  <form action="{{ route('tasks.destroy',[$task->id]) }}" id="delete-form" method="post" style="display:none">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="delete">
  </form>
</ol>
@endsection