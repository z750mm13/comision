<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>
<?php 
  $subarea = $compliment->commitment->review->target->subarea;
  $commitment = $compliment->commitment;
?>

@extends('layouts.content.nobody.show',[
  'title' => $compliment->commitment->user->rol. '/'. '['. $subarea->nombre."-".$subarea->area->nombre. ']',
  'titlelist' => 'Acciones',
  'descriptions' => [
    'Descripción: '. $commitment->accion,
    'Fecha de observación: '. Fecha::texto(Carbon::parse($commitment->review->fecha)),
    'Fecha limite:'. Fecha::texto(Carbon::parse($commitment->fecha_cumplimiento)),
    'Fecha de evidencia: '. Fecha::texto(Carbon::parse($compliment->created_at)),
    'Fecha de edicion: '. Fecha::texto(Carbon::parse($compliment->updated_at))
  ],
  'actividades' => 'active',
  'compromisos' => 'active',
  'hsize' => 'col-md-10',
  'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/compliments">Cumplimientos</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$compliment->commitment->user->rol. '/'. '['. $subarea->nombre."-".$subarea->area->nombre. ']'}}</li>
@endpush

@push('aditional')
<div class="col-md-2" id="galley">
  <img class="rounded" data-original="{{\Tools\Img\ToServer::getFile($compliment->evidencia)}}" src="{{\Tools\Img\ToServer::getFile($compliment->evidencia)}}" alt="evidencia" style="width: 10rem;">
</div>
@endpush

@section('list')
<ol class="list-unstyled">
  <li><a href="/compliments"><i class="fas fa-home"></i> Cumplimientos</a></li>
  <li><a href="/compliments/create"><i class="fas fa-plus"></i> Agregar cumplimiento</a></li>
  <li><a href="/compliments/{{$compliment->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar cumplimiento</a></li>
  <li><a href="#" onclick="
  let result =confirm('Esta seguro de eliminar cumplimiento?');
  if(result){
    event.preventDefault();
    document.getElementById('delete-form').submit();
  }
  "><i class="fas fa-trash-alt"></i> Eliminar cumplimiento</a></li>
  <form action="{{ route('compliments.destroy',[$compliment->id]) }}" id="delete-form" method="post" style="display:none">
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