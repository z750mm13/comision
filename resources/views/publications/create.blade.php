@extends('layouts.content.default.form',[
    'title' => 'Crear publicación',
    'titlelist' => 'Acciones',
    'titlebody' => 'Publicación',
    'publicaciones' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/publications">Publicaciones</a></li>
<li class="breadcrumb-item active" aria-current="page">Creación de publicación</li>
@endpush

@section('list')
<ol class="list-unstyled">
    <li><a href="/publications"><i class="fas fa-home"></i> Todas las publicaciones</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('publications.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('POST')
    
  <div class="form-group">
      <label for="publication-titulo">Titulo</label>
      <input type="text" id="publication-titulo" name="titulo" placeholder="Titulo de la publicación" required value="{{ old('titulo') }}" class="form-control  @if($errors->first('titulo')) is-invalid @endif" />
      <small class="text-danger">{{ $errors->first('titulo') }}</small>
  </div>
  <div class="form-group">
    <label class="form-control-label" for="publication-descripcion">Descripción</label>
    <textarea name="descripcion" class="form-control @if($errors->first('descripcion'))is-invalid @endif" placeholder="Describa el contenido" id="publication-descripcion" rows="3">{{ old('descripcion') }}</textarea>
    <small class="text-danger">{{ $errors->first('descripcion') }}</small>
  </div>
  <div class="form-group">
      <label for="select-documento">Archivo</label>
      <div class="custom-file" id="select-documento">
        <input name="documento" type="file" class="custom-file-input @if($errors->first('documento')) is-invalid @endif" id="publication-documento" lang="es" required>
        <label class="custom-file-label" for="publication-documento">Selecciona el archivo a compartir</label>
      </div>
      <small class="text-danger">{{ $errors->first('documento') }}</small>
  </div>
  <div class="form-group">
      <label for="toggle-visible">¿Desea que sea visible?</label>
      <div class="form-group">
      <label class="custom-toggle" id="toggle-visible">
        <input name="visible" type="checkbox" checked="true">
        <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Si"></span>
      </label>
      </div>
      <small class="text-danger">{{ $errors->first('visible') }}</small>
  </div>
  <div class="form-group">
      <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
  </div>
</form>
@endsection

@push('js')
<script>
$('#publication-documento').on('change',function() {
    var fileName = $(this).val();
    $(this).next('.custom-file-label').html(fileName);
})
</script>
@endpush