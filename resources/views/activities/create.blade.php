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
      <label for="nf">Peligro:</label>
      <input type="text" name="peligros[]" class="form-control" placeholder="Peligro">
      <label for="nf">Tipo:</label>
      <br>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="tipo0" name="pregunta0" class="custom-control-input" value="Seguridad">
        <label type="rlabel" class="custom-control-label" for="tipo0">Seguridad</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="tipo1" name="pregunta0" class="custom-control-input" value="Salud">
        <label type="rlabel" class="custom-control-label label0" for="tipo1">Salud</label>
      </div>
    </div>
  </div>
  </div>
  </div>
  <div class="form-group">
  <a class="col-md-12 btn btn-light btn-lg" id="clone" role="button"><i class="fas fa-plus"></i></a>
  </div>
  
  <div class="form-group">
    <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
  </div>
</form>
@endsection

@push('js')
<script type="text/javascript">
  var preguntaid = 1;
  var tipoid = 2;
  var forid = 1;
  $(document).ready(function() {
    $("#clone").click(function () {
      // Clona peligos
      var $clone = $('#peligros .form-group').last().clone();
      // Borra los valores de los inputs clonados
      $clone.find(':input').each(function () {
        if (this.type == 'radio'){
          this.id = 'tipo'+tipoid;
          this.name = 'pregunta'+preguntaid;
          tipoid++;
        } else 
        this.value = '';
      }).end().find('label').each(function () {
        $(this).attr('for', function (index, old) {
          if(old != 'nf'){
            console.log(old);
            forid++;
            return 'tipo'+forid;
          }
          return old;
        });
      });
      // Añade el clon
      preguntaid++;
      $clone.appendTo('#peligros');
    });
  });
</script>
@endpush