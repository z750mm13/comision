<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>
<?php
if($task->programable) {
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
  'titlebody' => 'Propiedades del cumplimiento',
  'descriptions' => [
    'Norma:'. $task->requirement->norm->codigo.' '.$task->requirement->norm->titulo,
    'Requisito: '. $task->requirement->numero.' '.$task->requirement->descripcion
  ]+$programa,
  'actividades' => 'active',
  'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/tasks">Cumplimientos</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$task->requirement->norm->codigo.' - '.$task->requirement->numero}}</li>
@endpush

@push('aditional')
<div class="col-md-2" id="galley">
  <img class="rounded" data-original="{{\Tools\Img\ToServer::getFile($task->evidencia)}}" src="{{\Tools\Img\ToServer::getFile($task->evidencia)}}" alt="evidencia" style="width: 10rem;">
</div>
@endpush

@section('btn-bar')
<a href="{{route('tasks.renovate',[$task->id])}}" class="btn btn-sm btn-neutral">Renovar</a>
@endsection

@section('list')
<ol class="list-unstyled">
  <li><a href="/tasks"><i class="fas fa-home"></i> Cumplimientos</a></li>
  <li><a href="/tasks/create"><i class="fas fa-plus"></i> Crear cumplimiento</a></li>
  <li><a href="/tasks/{{$task->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar cumplimiento</a></li>
  <li><a href="#" onclick="
  let result =confirm('Esta seguro de eliminar cumplimiento?');
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

@push('css')
<link  href="{{ asset('assets') }}/vendor/viewerjs/viewer.css" rel="stylesheet">
@endpush
@push('js')
<script type="module" src="{{ asset('assets') }}/vendor/viewerjs/viewer.js"></script>
<script>
window.addEventListener('DOMContentLoaded', function () {
      var galley = document.getElementById('galley');
      var viewer = new Viewer(galley, {
        url: 'data-original',
        title: function (image) {
          return image.alt + ' (' + (this.index + 1) + '/' + this.length + ')';
        },
      });
    });
</script>
@endpush