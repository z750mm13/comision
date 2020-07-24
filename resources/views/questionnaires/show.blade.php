@extends('layouts.app')

@section('title', 'Cuestionario')

@section('content')
<div class="container">
<div class="row">
  <div class="col-md-10">

    <div class="jumbotron jumbotron-fluid col-md-12">
      <div class="container">
        <h1 class="display-4">{{$questionnaire->tipo}}</h1>
        <p class="lead">Descripción:<br>{{$questionnaire->descripcion}}</p>
        <p class="lead">Con base a la norma:<br>{{'['.$questionnaire->requirement->norm->codigo.'] '.$questionnaire->requirement->norm->titulo}}</p>
      </div>
    </div>

    <div class="col-md-12">
      @foreach ($questionnaire->questions as $question)
      <div class="col-md-12">
        <div class="card mb-3"> <!-- Borde primario -->
          <div class="card-body"> <!-- Texto primario -->
            <div class="row justify-content-between">
              <div class="col-10">
                <p class="card-text">{{ $question->encabezado }}</p>
              </div>
              <div class="col-2">
                  <button onclick="
                  let result =confirm('Esta seguro de eliminar pregunta?');
                  if(result){
                    event.preventDefault();
                    document.getElementById('question_id').value='{{ $question->id }}';
                    document.getElementById('delete-form').submit();
                  }
                  " type="button" class="btn btn-danger btn-sm">Eliminar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>

<div class="col-md-2">
  <aside>
    <div class="p-4">
    <h4 class="font-italic">Acciones</h4>
    <ol class="list-unstyled">
      <li><a href="/questionnaires"><i class="fas fa-home"></i> Ver cuestionarios</a></li>
      <li><a href="/questionnaires/create"><i class="fas fa-plus"></i> Agregar cuestionario</a></li>
      <li><a href="/questionnaires/{{$questionnaire->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar cuestionario</a></li>
      <li><a href="#" onclick="
      let result =confirm('Esta seguro de eliminar el cuestionario?');
      if(result){
        event.preventDefault();
        document.getElementById('question_id').value='';
        document.getElementById('delete-form').submit();
      }
      "><i class="fas fa-trash-alt"></i> Eliminar cuestionario</a></li>
      <form action="{{ route('questionnaires.destroy', [$questionnaire->id]) }}" id="delete-form" method="post" style="display:none">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE">

      <input type="text" name="question_id" id="question_id">
      </form>
    </ol>
    </div>
  </aside>
</div>
</div>
</div>

@endsection