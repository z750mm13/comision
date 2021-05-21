@extends('layouts.content.default.form',[
    'title' => 'Evaluacion '.$subarea->nombre." [".$subarea->area->nombre."]",
    'titlelist' => 'Acciones',
    'titlebody' => $subarea->nombre." [".$subarea->area->nombre."] Edición",
    'actividades' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/reviews">Evaluaciones</a></li>
<li class="breadcrumb-item"><a href="/reviews/areas/{{$subarea->area->id}}">Zonas a evaluar</a></li>
<li class="breadcrumb-item active" aria-current="page">Edicion de evaluación</li>
@endpush

@section('list')
<ol class="list-unstyled">
  <li><a href="/reviews">Todas las evaluaciones</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('reviews.update',[$subarea->id])}}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  {{ method_field('PUT') }}

  <div class="form-group">
    <input type="text" class="form-control" name="sid" hidden value="{{$subarea->id}}">
  </div>
  <?php $id = 0;?>
  @foreach ($subarea->targets as $target)
  <div class="card mb-3">
    <div class="card-header">{{$target->questionnaire->tipo}}</div>
      <div class="card-body"  id="galley">
      <div id="accordion{{$target->id}}">
        @foreach ($target->questionnaire->questions as $question)
        <?php $solved = null; ?>
        @foreach ($questions as $review)
            @if($question->id == $review->question_id)
            <?php $solved = $review;?>
            @endif
        @endforeach

        <div class="card">
          <div class="card-header position-relative" id="heading{{$id}}">
            <h5 class="mb-0">
              <a class="btn btn-link @if($id!=0)collapsed @endif stretched-link" data-toggle="collapse" data-target="#collapse{{$id}}" aria-expanded="true" aria-controls="collapse{{$id}}">
                {{$question->encabezado}}
              </a>
            </h5>
          </div>
      
          <div id="collapse{{$id}}" class="collapse @if($id==0)show @endif" aria-labelledby="heading{{$id}}" data-parent="#accordion{{$target->id}}">
            <div class="card-body">

              <div class="form-group">
                <input type="text" name="sids[]" value="{{$solved->id}}" hidden>
                <label>{{$question->encabezado}}</label><br>
                <div class="custom-control custom-radio custom-control-inline">
                  <input data-toggle="collapse" aria-expanded="true" data-target="#collapse{{$id+2}}" required type="radio" id="customRadioInline{{$id}}" name="customRadioInline{{$solved->id}}" class="custom-control-input" value="1" @if($solved->valor == 1)checked @endif>
                  <label class="custom-control-label" for="customRadioInline{{$id}}">Si</label>
                </div>
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline{{$id}}" name="customRadioInline{{$solved->id}}" class="custom-control-input" value="0" @if($solved->valor == 0)checked @endif>
                  <label class="custom-control-label" for="customRadioInline{{$id}}">No</label>
                </div>
              </div>
              <div class="form-group">
                <label for="description">Descripción</label>
                <input value="{{$solved->descripcion}}" type="text" name="description{{$solved->id}}" id="description" class="form-control" placeholder="Descripcion de la evaluación"  class="text-muted">
              </div>
              <div class="form-group">
                @if($solved->evidencia!=null)<p><img data-original="{{\Tools\Img\ToServer::getFile($solved->evidencia)}}" src="{{\Tools\Img\ToServer::getFile($solved->evidencia)}}" class="rounded" style="width: 5rem;" alt="{{$question->encabezado}}"></p>@endif
                <label for="evidence">Evidencia</label>
                <input type="file" class="form-control-file" id="evidence" name="evidence{{$solved->id}}">
              </div>
            </div>
          </div>
        </div>

        <?php $id ++; ?>
        @endforeach
      </div>
      </div>
    </div>
    @endforeach
    
  <div class="form-group">
      <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
  </div>
  
</form>
@endsection

@push('css')
<link  href="{{ asset('assets') }}/vendor/viewerjs/viewer.css" rel="stylesheet">
@endpush
@push('js')
<script type="module" src="{{ asset('assets') }}/vendor/viewerjs/viewer.js"></script>
<script>
window.addEventListener('DOMContentLoaded', function () {
      var galley = document.getElementById('galley');
      var viewer = new Viewer(galley, {
        url: 'data-original',
        title: function (image) {
          return image.alt + ' (' + (this.index + 1) + '/' + this.length + ')';
        },
      });
    });
</script>
@endpush