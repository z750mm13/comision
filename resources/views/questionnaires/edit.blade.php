@extends('layouts.app')

@section('title', 'Cuestionario')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-6 ">
        <form action="{{route('questionnaires.update',[$questionnaire->id])}}" method="POST" id="formulario">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="form-group">
                <h2>Tipo de cuestionario <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar"> </h2>
            </div>
            <div class="form-group">
                <label for="">Tipo</label>
                <input type="text" name="tipo" placeholder="Tipo de cuestionario" required value="{{ $questionnaire->tipo }}" class="form-control  @if($errors->first('tipo')) is-invalid @endif">
                <small class="text-danger">{{ $errors->first('tipo') }}</small>
            </div>
            <div class="form-group">
                <label for="questionnaire-norm">Norma:</label>
                <select name="norm_id" id="questionnaire-norm" require class="form-control  @if($errors->first('norm_id')) is-invalid @endif" >
                <option value="{{$questionnaire->requirement_id}}">{{$questionnaire->requirement->norm->codigo." ".substr($questionnaire->requirement->norm->titulo, 0, 30)."..."}}</option>
                @foreach($norms as $norm)
                    <option value="{{$norm->id}}">{{$norm->codigo." ".substr($norm->titulo, 0, 30)."..."}}</option>
                @endforeach
                </select>
                <small class="text-danger">{{ $errors->first('norm_id') }}</small>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$questionnaire->descripcion}}</textarea>
            </div>
        
            <div class="form-group">
                <h2>Preguntas del cuestionario</h2>
            </div>
            <div class="form-group">
                <button onclick="clonar()" type="button" class="clonar btn btn-secondary btn-sm"><i class="fas fa-plus"></i></button>
            </div>
            
            @foreach ($questionnaire->questions as $question)
            <div class="form-group">
                <div class="card">
                  <div class="card-body">
                    <label>Pregunta:</label>
                    <input value="{{ $question->encabezado }}" type="text" name="preguntas[]" class="form-control" placeholder="Pregunta">
                    <input type="text" name="questions_id[]" hidden value="{{$question->id}}">
                  </div>
                </div>
            </div>
            @endforeach

        </form>
            
        <script type="text/javascript">
          function clonar() {
              // Clona el .form-group
              var $clone = $('#formulario .form-group').last().clone();
              // Borra los valores de los inputs clonados
              $clone.find(':input').each(function () {
                  this.value = '';
                  this.id = '';
              });
              //Clon de la ultima pregunta
              $clone.appendTo('#formulario');
          }
          function eliminar($id){
              var $input = document.getElementById();
          }
        </script>
    </div>
    <aside class="col-md-2 offset-md-4">
        <div class="p-4">
        <h4 class="font-italic">Acciones</h4>
            <ol class="list-unstyled">
                <li><a href="/questionnaires/{{$questionnaire->id}}">Ver cuestionario</a></li>
                <li><a href="/questionnaires">Ver cuestionarios</a></li>
            </ol>
        </div>
    </aside>
</div>
</div>
@endsection