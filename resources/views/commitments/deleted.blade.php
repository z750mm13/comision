@extends('layouts.content.default.index',[
    'title' => 'Compromisos eliminados',
    'descriptions' => [
      __('Las compromisos eliminados son aquellos que tienen alguna relación con algun problema o apoyo.'),
      __('Estos no se pueden eliminar definitivamente, por lo que se trasladan a este apartado, donde se podrán restaurar o simplemente visualizar.')
    ],
    'titlebody' => __('Compromisos'),
    'image' => null,
    'actividades' => 'active',
    'pbutton' => 'Restaurar',
    'pclassb' => 'btn-primary',
    'piconb' => 'fas fa-trash-restore',
    'purlb' => 'restore'
])

<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>

@section('bodycontent')
<form action="/commitments/restore" method="Post" id="restore-form">
  {{csrf_field()}}
  {{method_field('POST')}}
  <div class="table-responsive">
  <table class="table align-items-center table-flush table-hover">
    <thead class="thead-light">
      <tr>
        <th>
        </th>
        <th>Acción</th>
        <th>Fecha de cumplimiento</th>
        <th>Comprometido</th>
        <th>Creación</th>
        <th>Eliminación</th>
      </tr>
    </thead>
    <tbody>
      @foreach($commitments as $commitment)
      <tr>
        <th>
          <div class="custom-control custom-checkbox">
            <input name="commitments[]" class="custom-control-input" id="check{{$commitment->id}}" type="checkbox" value="{{$commitment->id}}">
            <label class="custom-control-label" for="check{{$commitment->id}}"></label>
          </div>
        </th>
        <td class="table-user">
          <b>{{$commitment->accion}}</b>
        </td>
        <td>
          <span class="text-muted">{{Fecha::texto(Carbon::parse($commitment->fecha_cumplimiento))}}</span>
        </td>
        <td>
          <span class="text-muted">{{$commitment->user->nombre. ' ['. $commitment->user->rol. ']'}}</span>
        </td>
        <td>
          <span class="text-muted">{{Fecha::texto(Carbon::parse($commitment->created_at))}}</span>
        </td>
        <td>
          <span class="text-muted">{{$commitment->deleted_at ? Fecha::texto(Carbon::parse($commitment->deleted_at)): 'No se ha eliminado'}}</span>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  </div>
</form>
@endsection