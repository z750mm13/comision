@extends('layouts.content.default.index',[
    'title' => 'Roles eliminados',
    'descriptions' => [
      __('Las roles eliminados son aquellos que se han eliminado y tienen alguna relación con alguna resposabilidad de área.'),
      __('Estos no se pueden eliminar definitivamente, por lo que se trasladan a este apartado, donde se podrán restaurar o simplemente visualizar.')
    ],
    'titlebody' => __('Roles'),
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
<form action="/cordinates/restore" method="Post" id="restore-form">
  {{csrf_field()}}
  {{method_field('POST')}}
  <div class="table-responsive">
  <table class="table align-items-center table-flush table-hover">
    <thead class="thead-light">
      <tr>
        <th>
        </th>
        <th>Responsable</th>
        <th>Rol</th>
        <th>Creación</th>
        <th>Eliminación</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cordinates as $cordinate)
      <tr>
        <th>
          <div class="custom-control custom-checkbox">
            <input name="cordinates[]" class="custom-control-input" id="check{{$cordinate->id}}" type="checkbox" value="{{$cordinate->id}}">
            <label class="custom-control-label" for="check{{$cordinate->id}}"></label>
          </div>
        </th>
        <td class="table-user">
          <b>{{$cordinate->user->nombre. ' '. $cordinate->user->apellidos}}</b>
        </td>
        <td>
          <span class="text-muted">{{$cordinate->rol}}</span>
        </td>
        <td>
          <span class="text-muted">{{Fecha::texto(Carbon::parse($cordinate->created_at))}}</span>
        </td>
        <td>
          <span class="text-muted">{{$cordinate->deleted_at ? Fecha::texto(Carbon::parse($cordinate->deleted_at)): 'No se ha eliminado'}}</span>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  </div>
</form>
@endsection