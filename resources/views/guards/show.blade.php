@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
  <div class="col-md-10">

    <div class="jumbotron jumbotron-fluid col-md-12">
    <div class="container">
    <div class="row">
      <div class="col-md-2">
          <img src="{{\Tools\Img\ToServer::getFile($guard->cordinate->user->foto)}}" alt="avatar" class="rounded-circle" style="width: 10rem;">
      </div>
      <div class="col-md-9 offset-md-1 col-sm-12">
          <h1 class="display-4">{{$guard->cordinate->user->nombre." ".$guard->cordinate->user->apellidos}}</h1>
          <h2>Rol que desempeña: {{$guard->cordinate->rol}}</h2>
          <h2>{{$guard->area->nombre}} - {{$guard->area->area}}</h2>
      </div>
    </div>
    </div>
    </div>

    </div>

<div class="col-md-2">
  <aside>
    <div class="p-4">
    <h4 class="font-italic">Acciones</h4>
    <ol class="list-unstyled">
      <li><a href="/guards">Ver resguardos</a></li>
      <li><a href="/guards/create"><i class="fas fa-plus"></i> Agregar responsabilidad</a></li>
      <li><a href="/guards/{{$guard->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar responsabilidad</a></li>
      <li><a href="#" onclick="
      let result =confirm('Esta seguro de eliminar al responsabilidad?');
      if(result){
        event.preventDefault();
        document.getuserById('delete-form').submit();
      }
      "><i class="fas fa-trash-alt"></i> Eliminar responsabilidad</a></li>
      <form action="{{ route('guards.destroy',[$guard->id]) }}" id="delete-form" method="post" style="display:none">
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