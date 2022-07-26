<div class="col-md-12"><h2>{{$target->questionnaire->tipo}}</h2></div>
@forelse ($target->questionnaire->questions as $question)
  <div class="col-md-12">
    <div class="card mb-3">
      <div class="card-body">
        <p class="card-text">{{ $question->encabezado }}</p>
      </div>
    </div>
  </div>
@empty
  <div class="card mb-3">
    <div class="card-body text-center">
      <h4>Aún no hay preguntas en este cuestionario</h4>
    </div>
  </div>
@endforelse