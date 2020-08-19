@extends('layouts.content.default.form',[
    'title' => 'Edición de usuario',
    'titlelist' => 'Acciones',
    'titlebody' => $user->nombre. ' '. $user->apellidos,
    'personal' => 'active'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/helpers">Personal de apoyo</a></li>
<li class="breadcrumb-item"><a href="/helpers/{{$user->id}}">{{$user->nombre." ".$user->apellidos}}</a></li>
<li class="breadcrumb-item active" aria-current="page">Edición de apoyo</li>
@endpush

@section('list')
<ol class="list-unstyled">
    <li><a href="/helpers/{{$user->id}}">Ver integrante</a></li>
    <li><a href="/helpers">Personal de la comisión</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('helpers.update',[$user->id])}}" method="Post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PUT')}}

    <div class="form-group">
        <label for="element-nombre">Nombre:</label>
        <input type="text" rows="5" style="resize:vertical" id="element-nombre" name="nombre" placeholder="Ingresa el nombre del personal" required value="{{ $user->nombre }}" class="form-control  @if($errors->first('nombre')) is-invalid @endif" />
        <small class="text-danger">{{ $errors->first('nombre') }}</small>
    </div>
    <div class="form-group">
        <label for="element-apellidos">Apellidos:</label>
        <input type="text" rows="5" style="resize:vertical" id="element-apellidos" name="apellidos" placeholder="Ingresa el apellido del personal" required value="{{ $user->apellidos}}" class="form-control  @if($errors->first('apellidos')) is-invalid @endif" />
        <small class="text-danger">{{ $errors->first('apellidos') }}</small>
    </div>
    <div class="form-group">
        <label for="helper-rol">Rol:</label>
        <select name="rol" id="helper-rol" require class="form-control  @if($errors->first('rol')) is-invalid @endif" >
            <option value="0">Elije un rol</option>
            <option value="{{$user->rol}}">{{$user->rol}}</option>
            @foreach($roles as $rol)
            <option value="{{$rol->rol}}">{{$rol->rol}}</option>
            @endforeach
        </select>
        <small class="text-danger">{{ $errors->first('rol') }}</small>
    </div>
    <div class="form-group">
        <label for="element-password">Contraseña:</label>
        <input type="password" rows="5" style="resize:vertical" id="element-password" name="password" placeholder="Ingresa la contraseña del personal" class="form-control  @if($errors->first('password')) is-invalid @endif" />
        <small class="text-danger">{{ $errors->first('password') }}</small>
    </div>
    <input type="text" name="route" value="helper" hidden/>
    <div class="form-group">
    <label for="element-foto">Anterior:</label>
    <p><img src="{{\Tools\Img\ToServer::getFile($user->foto)}}" alt="avatar" class="rounded-circle" style="width: 5rem;"></p>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile" name="foto" lang="es" accept=".jpg,.png">
        <label class="custom-file-label" for="customFile">Foto de perfil</label>
    </div>
        <small class="text-danger">{{ $errors->first('foto')}}</small>
    </div>
    <div class="form-group">
        <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
    </div>
</form>
@endsection