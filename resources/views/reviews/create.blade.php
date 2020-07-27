@extends('layouts.content.default.form',[
    'bg' => '../../argon/img/theme/reviews.jpg',
    'title' => 'Evaluación '.$subarea->nombre." [".$subarea->area->nombre."]",
    'titlelist' => 'Acciones',
    'titlebody' => 'Evaluación'
])

@section('list')
<ol class="list-unstyled">
  <li><a href="/reviews">Ver evaluaciones</a></li>
</ol>
@endsection

@section('bodycontent')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/home">Inicio</a></li>
    <li class="breadcrumb-item"><a href="/reviews">Evaluaciones</a></li>
    <li class="breadcrumb-item"><a href="/reviews/subareas/{{$subarea->area->id}}">Zonas a evaluar</a></li>
    <li class="breadcrumb-item active" aria-current="page">Evaluando</li>
  </ol>
</nav>
<form action="{{route('reviews.store')}}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  {{ method_field('POST') }}

  <div class="form-group">
    <input type="text" class="form-control" name="sid" hidden value="{{$subarea->id}}">
  </div>
  <?php $id = 0; $data = 0;?>
  @foreach ($subarea->targets as $target)
  <div class="card mb-3">
    <div class="card-header">{{$target->questionnaire->tipo}}</div>
    <div class="card-body">
    <div id="accordion{{$target->id}}">
      
      @foreach ($target->questionnaire->questions as $question)
      <div class="card">
        <div class="card-header position-relative" id="heading{{$question->id}}">
          <h5 class="mb-0">
            <a class="btn btn-link @if($id!=0)collapsed @endif stretched-link" data-toggle="collapse" data-target="#heading{{$id}}" aria-expanded="true" aria-controls="heading{{$id}}">
              {{$question->encabezado}}
            </a>
          </h5>
        </div>
    
        <div id="heading{{$id}}" class="collapse @if($id==0)show @endif" aria-labelledby="heading{{$question->id}}" data-parent="#accordion{{$target->id}}">
          <div class="card-body">
            
            <div class="form-group">
              <div class="custom-control custom-radio custom-control-inline">
                <input data-toggle="collapse" aria-expanded="true" data-target="#heading{{$id+2}}" aria-controls="heading{{$id+2}}" required type="radio" id="customRadioInline{{$id}}" name="customRadioInline{{$question->id}}" class="custom-control-input" value="1">
                <label class="custom-control-label" for="customRadioInline{{$id}}">Si</label>
              </div>
              <?php $id ++; ?>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline{{$id}}" name="customRadioInline{{$question->id}}" class="custom-control-input" value="0">
                <label class="custom-control-label" for="customRadioInline{{$id}}">No</label>
              </div>
            </div>
            <div class="form-group">
              <label for="description">Descripción</label>
              <input type="text" name="description{{$data}}" id="description" class="form-control" placeholder="Descripcion de la evaluación"  class="text-muted">
            </div>
            <div class="form-group">
              <label for="evidence">Evidencia</label>
              <input type="file" class="form-control-file" id="evidence" name="evidence{{$data}}">
            </div>
          </div>
        </div>
      </div>
      <?php $data++; ?>
      <?php $id ++; ?>
      @endforeach
    </div>
    </div>
  </div>
  @endforeach
  <div class="form-group">
      <input type="submit"  class="btn btn-primary " name="submit"  value="Finalizar">
  </div>
</form>
@endsection