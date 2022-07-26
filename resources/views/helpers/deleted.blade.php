@extends('layouts.content.default.index',[
    'title' => 'Apoyos eliminados',
    'descriptions' => [
      __('Apoyos eliminados'),
      __('Estos no se pueden eliminar definitivamente, por lo que se trasladan a este apartado, donde se podrán restaurar o simplemente visualizar.')
    ],
    'titlebody' => __('Apoyos'),
    'image' => null,
    'actividades' => 'active',
    'pbutton' => 'Restaurar',
    'pclassb' => 'btn-primary',
    'piconb' => 'fas fa-trash-restore',
    'purlb' => 'restore'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/helpers">Apoyos</a></li>
<li class="breadcrumb-item active" aria-current="page">Apoyos eliminados</li>
@endpush

<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>

@section('bodycontent')
<form action="/helpers/restore" method="Post" id="restore-form">
  {{csrf_field()}}
  {{method_field('POST')}}
  <div class="table-responsive">
  <table class="table align-items-center table-flush table-hover">
    <thead class="thead-light">
      <tr>
        <th>
        </th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Creación</th>
        <th>Eliminación</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <th>
          <div class="custom-control custom-checkbox">
            <input name="users[]" class="custom-control-input" id="check{{$user->id}}" type="checkbox" value="{{$user->id}}">
            <label class="custom-control-label" for="check{{$user->id}}"></label>
          </div>
        </th>
        <td class="table-user">
          <b>{{$user->nombre. ' '. $user->apellidos}}</b>
        </td>
        <td>
          <span class="text-muted">{{$user->email}}</span>
        </td>
        <td>
          <span class="text-muted">{{Fecha::texto(Carbon::parse($user->created_at))}}</span>
        </td>
        <td>
          <span class="text-muted">{{$user->deleted_at ? Fecha::texto(Carbon::parse($user->deleted_at)): 'No se ha eliminado'}}</span>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  </div>
</form>
@endsection