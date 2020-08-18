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
  'hsize' => 'col-md-10'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/compliments">Cumplimientos</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$compliment->commitment->user->rol. '/'. '['. $subarea->nombre."-".$subarea->area->nombre. ']'}}</li>
@endpush

@push('aditional')
<div class="col-md-2">
  <img class="rounded" src="{{\Tools\Img\ToServer::getFile($compliment->evidencia)}}" alt="evidencia" style="width: 10rem;" data-toggle="modal" data-target="#exampleModalCenter">
</div>
<div class="modal fade bg-transparent" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="bg-transparent transparent-border">
      <div class="d-flex justify-content-center">
        <img class="rounded" src="{{\Tools\Img\ToServer::getFile($compliment->evidencia)}}" alt="evidencia">
      </div>
    </div>
  </div>
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