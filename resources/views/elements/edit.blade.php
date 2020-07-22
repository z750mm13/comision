@extends('layouts.content.default.form',[
    'bg' => '../../argon/img/theme/elements.jpg',
    'title' => 'Edición de usuario',
    'titlelist' => 'Acciones',
    'titlebody' => $user->nombre. ' '. $user->apellidos
])

@section('list')
<ol class="list-unstyled">
    <li><a href="/elements/{{$user->id}}">Ver integrante</a></li>
    <li><a href="/elements">Personal de la comisión</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('elements.update',[$user->id])}}" method="Post" enctype="multipart/form-data">
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
        <label for="element-password">Contraseña:</label>
        <input type="password" rows="5" style="resize:vertical" id="element-password" name="password" placeholder="Ingresa la contraseña del personal" class="form-control  @if($errors->first('password')) is-invalid @endif" />
        <small class="text-danger">{{ $errors->first('password') }}</small>
    </div>
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