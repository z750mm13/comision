@extends('layouts.content.default.form',[
    'bg' => '../../argon/img/theme/questionnaires.jpg',
    'title' => 'Crear cuestionario',
    'titlelist' => 'Acciones',
    'titlebody' => 'Cuestionario',
    'actividades' => 'active'
])

@section('list')
<ol class="list-unstyled">
  <li><a href="/questionnaires">Ver cuestionarios</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('questionnaires.store')}}" method="POST">
  {{ csrf_field() }}
  {{ method_field('POST') }}

  <div class="form-group">
    <h2>Tipo de cuestionario</h2>
  </div>
  <div class="form-group">
    <label for="">Tipo</label>
    <input type="text" name="tipo" placeholder="Tipo de cuestionario" required value="{{ old('tipo') }}" class="form-control  @if($errors->first('tipo')) is-invalid @endif">
    <small class="text-danger">{{ $errors->first('tipo') }}</small>
  </div>
  <div class="form-group">
      <label for="questionnaire-norm">Norma:</label>
      <select name="norm_id" id="questionnaire-norm" require class="form-control  @if($errors->first('norm_id')) is-invalid @endif" >
      <option value="0">Elije una norma</option>
      @foreach($norms as $norm)
          <option value="{{$norm->id}}">{{$norm->codigo." ".substr($norm->titulo, 0, 30)."..."}}</option>
      @endforeach
      </select>
      <small class="text-danger">{{ $errors->first('norm_id') }}</small>
  </div>
  <div class="form-group">
    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <h2>Preguntas del cuestionario</h2>
  </div>
  
  <div id="preguntas">
  <div class="form-group">
  <div class="card">
    <div class="card-body">
      <label>Pregunta:</label>
      <input type="text" name="preguntas[]" class="form-control" placeholder="Pregunta">
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
      var $clone = $('#preguntas .form-group').last().clone();
      // Borra los valores de los inputs clonados
      $clone.find(':input').each(function () {
          this.value = '';
      });
      //Clon de la ultima pregunta
      $clone.appendTo('#preguntas');
  }
</script>
@endpush