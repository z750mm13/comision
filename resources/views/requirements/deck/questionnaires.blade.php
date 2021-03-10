@foreach($requirement->questionnaires as $questionnaire)
  <div class="col-sm-6 col-xm-12">
  <div class="card border-primary mb-3"> <!-- Borde primario -->
    <div class="card-header">{{$questionnaire->tipo}}</div>
    <div class="card-body text-primary"> <!-- Texto primario -->
      <h6 class="card-subtitle mb-2 text-muted">Descripcion del cuestionario</h6>
      <p class="card-text"><b>Caracteristicas:</b> {{ substr($questionnaire->descripcion , 0, 15)."..." }}</p>
      <p class="card-text"> <b>Primer pregunta:</b> <br>{{ substr($questionnaire->questions->first()->encabezado , 0, 15)."..." }}</p>
      <a class="stretched-link" href="/questionnaires/{{$questionnaire->id}}" class="card-link">Ver mas...</a>
    </div>
  </div>
  </div>
  @endforeach