@extends('layouts.content.default.index',[
    'title' => 'Áreas eliminadas',
    'descriptions' => [
      __('Las áreas eliminadas son aquellas áreas que tienen relación ya sea con un integrante o una evaluación.'),
      __('Estas no se pueden eliminar definitivamente, por lo que se trasladan a este apartado, donde se podrán restaurar o simplemente visualizar.')
    ],
    'titlebody' => __('Áreas'),
    'image' => null,
    'instalaciones' => 'active',
    'pbutton' => 'Restaurar',
    'pclassb' => 'btn-primary',
    'piconb' => 'fas fa-trash-restore',
    'purlb' => 'restore'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/areas">Áreas</a></li>
<li class="breadcrumb-item active" aria-current="page">Áreas eliminadas</li>
@endpush

<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>

@section('bodycontent')
<form action="/areas/restore" method="Post" id="restore-form">
  {{csrf_field()}}
  {{method_field('POST')}}
  <div class="table-responsive">
  <table class="table align-items-center table-flush table-hover">
    <thead class="thead-light">
      <tr>
        <th>
        </th>
        <th>Area</th>
        <th>Unidad</th>
        <th>Creación</th>
        <th>Eliminación</th>
      </tr>
    </thead>
    <tbody>
      @foreach($areas as $area)
      <tr>
        <th>
          <div class="custom-control custom-checkbox">
            <input name="areas[]" class="custom-control-input" id="check{{$area->id}}" type="checkbox" value="{{$area->id}}">
            <label class="custom-control-label" for="check{{$area->id}}"></label>
          </div>
        </th>
        <td class="table-user">
          <b>{{$area->nombre}}</b>
        </td>
        <td>
          <span class="text-muted">{{$area->area}}</span>
        </td>
        <td>
          <span class="text-muted">{{Fecha::texto(Carbon::parse($area->created_at))}}</span>
        </td>
        <td>
          <span class="text-muted">{{$area->deleted_at ? Fecha::texto(Carbon::parse($area->deleted_at)): 'No se ha eliminado'}}</span>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  </div>
</form>
@endsection