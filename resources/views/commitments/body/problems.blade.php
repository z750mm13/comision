<div class="col-12">
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            @include('components.map.problems')
        </div>
    </div>
</div>
@foreach($subareas as $subarea)
<div id="{{$subarea->id}}" class="col-md-12" style="display: none;">
<div class="col-md-12">
<h1>{{$subarea->nombre}}</h1>
</div>
@forelse($subarea->questionnaires()->select('targets.id as target_id','questionnaires.*')
->orderBy('questionnaires.id')->get() as $questionnaire)
    <div class="col-12">
        <h2>{{$questionnaire->tipo}}</h2>
    </div>
    <div class="card-deck">
      <?php $i = 1; ?>
      @forelse ($questionnaire->questions()
      ->join('reviews','reviews.question_id','questions.id')
      ->where([
        ['reviews.valor','false'],
        ['reviews.target_id',$questionnaire->target_id]
        ])->orderBy('questions.id')->get() as $review)
      <div class="col-md-4 col-sm-6 col-xm-12">
      <div class="card mb-3">
        <div class="card-header">
          <a class="stretched-link" href="/reviews/{{$review->id}}">Problema {{$i}}</a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Estado del problema {{$i}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">Pregunta asociada al problema</h6>
          <p class="card-text">{{$review->encabezado}}</p>
          <h6 class="card-subtitle mb-2 text-muted">Descripcion del problema</h6>
          <p class="card-text">Estado: {{$review->valor? 'Si':'No'}} cumple con el requisito</p>
          <p class="card-text">Descripción: {{$review->descripcion}}</p>
        </div>
      </div>
      </div>
      <?php $i++; ?>
      @empty
      <div class="card mb-3">
        <div class="card-body text-center">
          <h4>En {{$subarea->nombre}} no se encontraron problemas de tipo {{$questionnaire->tipo}}.</h4>
        </div>
      </div>
      @endforelse
    </div>
@empty
<div class="card mb-3">
  <div class="card-body text-center">
    <h4>No hay cuestionarios asignados a {{$subarea->nombre}}.</h4>
  </div>
</div>
@endforelse
</div>
@endforeach