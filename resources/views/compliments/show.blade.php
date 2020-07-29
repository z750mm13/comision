@extends('layouts.app')

@section('title', 'Cumplimiento')

@section('content')
<?php
  use Carbon\Carbon;
  use Tools\Utils\Fecha;
?>
<?php 
  $subarea = $compliment->commitment->review->target->subarea;
  $commitment = $compliment->commitment;
?>
<div class="container">
<div class="row">
  <div class="col-md-10">

    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <img class="rounded" src="{{\Tools\Img\ToServer::getFile($compliment->evidencia)}}" alt="evidencia" style="width: 10rem;" data-toggle="modal" data-target="#exampleModalCenter">
        </div>
        <div class="col-md-9 offset-md-1 col-sm-12">
          <h1 class="display-4">{{$compliment->commitment->user->rol}} / {{"[".$subarea->nombre."-".$subarea->area->nombre. ']'}}</h1>
          <p class="lead">Descripción:<br>{{$commitment->accion}}</p>
          <p class="lead">Fecha de observación:<br>{{Fecha::texto(Carbon::parse($commitment->review->fecha))}}</p>
          <p class="lead">Fecha limite:<br>        {{Fecha::texto(Carbon::parse($commitment->fecha_cumplimiento))}}</p>
          <p class="lead">Fecha de evidencia:<br>  {{Fecha::texto(Carbon::parse($compliment->created_at))}}</p>
          <p class="lead">Fecha de edicion:<br>    {{Fecha::texto(Carbon::parse($compliment->updated_at))}}</p>
        </div>
      </div>
    </div>
    </div>
</div>

<div class="modal fade bg-transparent" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content bg-transparent transparent-border">
      <div class="d-flex justify-content-center">
        <img class="rounded" src="{{\Tools\Img\ToServer::getFile($compliment->evidencia)}}" alt="evidencia">
      </div>
    </div>
  </div>
</div>

<div class="col-md-2">
  <aside>
    <div class="p-4">
    <h4 class="font-italic">Acciones</h4>
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
    </div>
  </aside>
</div>
</div>
</div>

@endsection