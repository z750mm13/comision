@extends('layouts.content.default.form',[
    'title' => $cordinate->rol,
    'titlelist' => 'Acciones',
    'titlebody' => 'Responsable',
    'personal' => 'active'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/cordinates">Roles</a></li>
<li class="breadcrumb-item"><a href="/cordinates/{{$cordinate->id}}">{{$cordinate->user->nombre." ".$cordinate->user->apellidos}}</a></li>
<li class="breadcrumb-item active" aria-current="page">Edición de rol</li>
@endpush

@section('list')
<ol class="list-unstyled">
  <li><a href="/cordinates/{{$cordinate->id}}">Ver integrante</a></li>
  <li><a href="/cordinates">Personal de la comisión</a></li>
</ol>
@endsection

@section('bodycontent')
<div class="card-deck">
  @foreach($users as $user)
  @if($user->active==true && $user->id != $cordinate->user->id)
    <div class="col-md-4 col-sm-6 col-xm-12">
    <div class="card mb-3"> <!-- Borde primario primary danger warning -->
      <div class="card-body text-center"> <!-- Texto primario -->
        <p><img src="{{\Tools\Img\ToServer::getFile($user->foto)}}" alt="avatar" class="rounded-circle" style="width: 5rem;"></p>
        <h5 class="card-title">{{$user->nombre}}</h5>
        <a href="#" onclick="
        let result =confirm('¿Está seguro que quiere a elejir a {{$user->nombre}}?');
        if(result){
          event.preventDefault();
          document.getUserById('user_id').value = '{{$user->id}}';
          document.getUserById('save-form').submit();
        }
        " class="card-link">Elejir</a>
      </div>
    </div>
    </div>
  @endif
  @endforeach
</div>

<form action="{{route('cordinates.update',[$cordinate->id])}}" method="Post">
  {{csrf_field()}}
  {{method_field('PUT')}}

  <div class="form-group">
      <label for="rol-cordinate">Rol:</label>
      <select name="rol" id="rol-cordinate" require class="form-control  @if($errors->first('rol')) is-invalid @endif" >
          <option value="{{$cordinate->rol}}">{{$cordinate->rol}}</option>
          <option value="Coordinación">Coordinación</option>
          <option value="Secretaría">Secretaría</option>
          <option value="Bocalía">Bocalía</option>
      </select>
      <small class="text-danger">{{ $errors->first('rol') }}</small>
  </div>
  <div class="form-group">
  <label for="user-apellidos">Actual:</label>
  <div class="card mb-3"> <!-- Borde primario primary danger warning -->
      <div class="card-body text-center"> <!-- Texto primario -->
        <p><img src="{{\Tools\Img\ToServer::getFile($cordinate->user->foto)}}" alt="avatar" class="rounded-circle" style="width: 5rem;"></p>
        <h5 class="card-title">{{$cordinate->user->nombre}}</h5>
      </div>
    </div>
  </div>
  <div class="form-group">
      <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
  </div>
</form>
@endsection