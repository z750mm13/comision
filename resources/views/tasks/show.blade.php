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
  'titlebody' => 'Historial del cumplimiento',
  'descriptions' => [
    'Norma '. $task->requirement->norm->codigo.' '.$task->requirement->norm->titulo,
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

@if($task->next == null)
@section('btn-bar')
<a href="{{route('tasks.renovate',[$task->id])}}" class="btn btn-sm btn-neutral">Renovar</a>
@endsection
@endif

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

@section('bodycontent')
<div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
  <?php
    $ultimo = null;
    for($cumplimiento = $task; $cumplimiento != null; $cumplimiento = $cumplimiento->next) $ultimo = $cumplimiento;
  ?>
  @for($actual = $ultimo; $actual != null; $actual = $actual->previous)
  <div class="timeline-block">
    <span class="timeline-step{{$actual->caducidad? now()->lte(Carbon::parse($actual->caducidad))? ' badge-success' : ' badge-warning' : ' badge-danger'}}">
      <i class="ni ni-book-bookmark"></i>
    </span>
    <div class="timeline-content">
      <small class="text-muted font-weight-bold">@if($actual->id!=$task->id)<a href="{{route('tasks.show',[$actual->id])}}">@endif{{Fecha::texto(Carbon::parse($actual->created_at))}}@if($actual->id!=$task->id)</a>@endif</small>
      <h5 class=" mt-3 mb-0">{{$actual->caducidad? now()->lte(Carbon::parse($actual->caducidad))? 'Se ha cumplido' : 'Se ha cumplido, pero ha caducado' : 'No se ha cumplido'}}</h5>
      <p class=" text-sm mt-1 mb-0">{{$actual->programable?$actual->postdescripcion??'Sin descripción':$actual->descripcion??'Sin descripción'}}</p>
      <p class=" text-sm mt-1 mb-0">Caducidad: {{$actual->caducidad? Fecha::texto(Carbon::parse($actual->caducidad)) : 'Sin caducidad dado que no se ha cumplido'}}</p>
      <p class=" text-sm mt-1 mb-0">Ultima edición: {{Fecha::texto(Carbon::parse($actual->updated_at))}}</p>
      <div class="mt-3">
        @if($actual->programable)<span class="badge badge-pill badge-success"><i class="ni ni-watch-time"></i> Programado</span>{{-- Programable --}}@endif
        @if($actual->caducidad && now()->lte(Carbon::parse($actual->caducidad)))<span class="badge badge-pill badge-success"><i class="ni ni-check-bold"></i> Cumplido</span>{{-- Cumplido --}}@endif
        @if($actual->caducidad && !now()->lte(Carbon::parse($actual->caducidad)))<span class="badge badge-pill badge-warning"><i class="ni ni-sound-wave"></i> Caducado</span>{{-- Caducidad --}}@endif
      </div>
    </div>
  </div>
  @endfor
</div>
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