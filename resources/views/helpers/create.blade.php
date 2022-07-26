@extends('layouts.content.default.form',[
    'title' => 'Nuevo apoyo',
    'titlelist' => 'Acciones',
    'titlebody' => 'Usuario',
    'personal' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/helpers">Personal de apoyo</a></li>
<li class="breadcrumb-item active" aria-current="page">Inscribir apoyo</li>
@endpush

@section('list')
<ol class="list-unstyled">
    <li><a href="/helpers">Ver personal</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('helpers.store')}}" method="Post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('POST')}}

    <div class="form-group">
        <label for="element-nombre">Nombre:</label>
        <input type="text" rows="5" style="resize:vertical" id="element-nombre" name="nombre" placeholder="Ingresa el nombre del personal" required value="{{ old('nombre') }}" class="form-control  @if($errors->first('nombre')) is-invalid @endif" />
        <small class="text-danger">{{ $errors->first('nombre') }}</small>
    </div>
    <div class="form-group">
        <label for="element-apellidos">Apellidos:</label>
        <input type="text" rows="5" style="resize:vertical" id="element-apellidos" name="apellidos" placeholder="Ingresa el apellido del personal" required value="{{ old('apellidos') }}" class="form-control  @if($errors->first('apellidos')) is-invalid @endif" />
        <small class="text-danger">{{ $errors->first('apellidos') }}</small>
    </div>
    <input type="text" name="tipo" value="Apoyo" hidden>
    <div class="form-group">
        <label for="helper-rol">Rol:</label>
        <select name="rol" id="helper-rol" require class="form-control  @if($errors->first('rol')) is-invalid @endif" >
            <option value="0">Elije un rol</option>
            @foreach($roles as $rol)
            <option value="{{$rol->rol}}">{{$rol->rol}}</option>
            @endforeach
        </select>
        <small class="text-danger">{{ $errors->first('rol') }}</small>
    </div>
    <div class="form-group">
        <label for="element-email">Correo:</label>
        <input type="email" rows="5" style="resize:vertical" id="element-email" name="email" placeholder="Ingresa el apellido del personal" required value="{{ old('email') }}" class="form-control  @if($errors->first('email')) is-invalid @endif" />
        <small class="text-danger">{{ $errors->first('email') }}</small>
    </div>
    <div class="form-group">
        <label for="password">{{ __('Contraseña:') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="password-confirm">{{ __('Confirme contraseña:') }}</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    </div>
    <div class="form-group">
    <div class="custom-file">
        <input type="file" class="custom-file-input" name="foto" id="foto" lang="es" accept=".jpg,.png">
        <label class="custom-file-label" for="foto">Foto de perfil</label>
    </div>
        <small class="text-danger">{{ $errors->first('foto') }}</small>
    </div>
    <div class="form-group">
        <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
    </div>

</form>
@endsection

@push('js')
<script>
$('#foto').on('change',function() {
    var fileName = $(this).val();
    $(this).next('.custom-file-label').html(fileName);
})
</script>
@endpush