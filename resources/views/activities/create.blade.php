@extends('layouts.content.default.form',[
    'title' => 'Crear actividad',
    'titlelist' => 'Acciones',
    'titlebody' => 'Actividad',
    'actividades' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/questionnaires">Actividades</a></li>
<li class="breadcrumb-item active" aria-current="page">Creación de Actividad</li>
@endpush

@section('list')
<ol class="list-unstyled">
  <li><a href="/questionnaires">Ver actividades</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('activities.store')}}" method="POST">
  {{ csrf_field() }}
  {{ method_field('POST') }}

  <div class="form-group">
    <h2>Tipo de actividad</h2>
  </div>
  <div class="form-group">
    <label for="">Titulo</label>
    <input type="text" name="titulo" placeholder="Titulo de la actividad" required value="{{ old('titulo') }}" class="form-control  @if($errors->first('titulo')) is-invalid @endif">
    <small class="text-danger">{{ $errors->first('titulo') }}</small>
  </div>
  <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <h2>Peligros de la actividad</h2>
  </div>
  
  <div id="peligros">
  <div class="form-group">
  <div class="card">
    <div class="card-body">
      <label>Peligro:</label>
      <input type="text" name="peligros[]" class="form-control" placeholder="Peligro">
    </div>
  </div>
  </div>
  </div>
  <div class="form-group">
  <a class="col-md-12 btn btn-light btn-lg" onclick="clonar()" role="button"><i class="fas fa-plus"></i></a>
  </div>
  
  <div class="form-group">
    <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
  </div>
</form>
@endsection

@push('js')
<script type="text/javascript">
  function clonar() {
      // Clona el .form-group
      var $clone = $('#peligros .form-group').last().clone();
      // Borra los valores de los inputs clonados
      $clone.find(':input').each(function () {
          this.value = '';
      });
      //Clon de la ultima pregunta
      $clone.appendTo('#peligros');
  }
</script>
@endpush