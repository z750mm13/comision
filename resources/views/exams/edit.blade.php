@extends('layouts.content.default.form',[
    'title' => 'Evaluacion '.$subarea->nombre." [".$subarea->area->nombre."]",
    'titlelist' => 'Acciones',
    'titlebody' => $subarea->nombre." [".$subarea->area->nombre."] Edición",
    'actividades' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/exams">Evaluaciones</a></li>
<li class="breadcrumb-item"><a href="/exams/areas/{{$subarea->area->id}}">Zonas a evaluar</a></li>
<li class="breadcrumb-item active" aria-current="page">Edicion de evaluación</li>
@endpush

@section('list')
<ol class="list-unstyled">
  <li><a href="/exams">Todas las evaluaciones</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('exams.update',[$subarea->id])}}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  {{ method_field('PUT') }}

  <div class="form-group">
    <input type="text" class="form-control" name="sid" hidden value="{{$subarea->id}}">
  </div>
  <?php $id = 0;?>
  @foreach ($subarea->arrays as $array)
  <div class="card mb-3">
    <div class="card-header">{{$array->activity->titulo}}</div>
      <div class="card-body">
      <div class="accordion" id="acordion{{$array->id}}">
        @foreach ($array->activity->dangers as $danger)
        <?php $solved = null; ?>
        @foreach ($dangers as $exam)
            @if($danger->id == $exam->danger_id)
            <?php $solved = $exam;?>
            @endif
        @endforeach

        <div class="card">
          <div class="card-header" id="cabecera{{$danger->id}}" data-toggle="collapse" data-target="#danger{{$id}}" aria-expanded="{{$id==0}}" aria-controls="danger{{$id}}">
            <h5 class="mb-0">{{$danger->titulo}}</h5>
          </div>
      
          <div id="danger{{$id}}" class="collapse @if($id==0)show @endif" aria-labelledby="cabecera{{$danger->id}}" data-parent="#acordion{{$array->id}}">
            <div class="card-body">

              <div class="form-group">
                <input type="text" name="sids[]" value="{{$solved->id}}" hidden>
              </div>

              <label>Tiempo de exposición</label>
              <br>
              <div class="form-group">
                <div class="custom-control custom-radio custom-control-inline">
                  <input required type="radio" id="exposicion{{$id}}" name="exposicion{{$solved->id}}" class="custom-control-input" value="1" @if($solved->exposicion == 1)checked @endif>
                  <label class="custom-control-label" for="exposicion{{$id}}">Menor</label>
                </div>
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="exposicion{{$id}}" name="exposicion{{$solved->id}}" class="custom-control-input" value="5" @if($solved->exposicion == 5)checked @endif>
                  <label class="custom-control-label" for="exposicion{{$id}}">Todo el tiempo</label>
                </div>
              </div>

              <label>Probabilidad de ocurrencia</label>
              <br>
              <div class="form-group">
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="ocurrencia{{$id}}" name="ocurrencia{{$solved->id}}" class="custom-control-input" value="1" @if($solved->ocurrencia == 1)checked @endif required>
                  <label class="custom-control-label" for="ocurrencia{{$id}}">Baja</label>
                </div>
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="ocurrencia{{$id}}" name="ocurrencia{{$solved->id}}" class="custom-control-input" value="3" @if($solved->ocurrencia == 3)checked @endif>
                  <label class="custom-control-label" for="ocurrencia{{$id}}">Media</label>
                </div>
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="ocurrencia{{$id}}" name="ocurrencia{{$solved->id}}" class="custom-control-input" value="5" @if($solved->ocurrencia == 5)checked @endif>
                  <label class="custom-control-label" for="ocurrencia{{$id}}">Alta</label>
                </div>
              </div>

              <label>Número de personas expuestas</label>
              <br>
              <div class="form-group">
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="personas{{$id}}" name="personas{{$solved->id}}" class="custom-control-input" value="1" @if($solved->personas == 1)checked @endif required>
                  <label class="custom-control-label" for="personas{{$id}}">1 a 5</label>
                </div>
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="personas{{$id}}" name="personas{{$solved->id}}" class="custom-control-input" value="2" @if($solved->personas == 2)checked @endif>
                  <label class="custom-control-label" for="personas{{$id}}">6 a 10</label>
                </div>
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="personas{{$id}}" name="personas{{$solved->id}}" class="custom-control-input" value="3" @if($solved->personas == 3)checked @endif>
                  <label class="custom-control-label" for="personas{{$id}}">11 a 55</label>
                </div>
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="personas{{$id}}" name="personas{{$solved->id}}" class="custom-control-input" value="4" @if($solved->personas == 4)checked @endif>
                  <label class="custom-control-label" for="personas{{$id}}">51 a 500</label>
                </div>
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="personas{{$id}}" name="personas{{$solved->id}}" class="custom-control-input" value="5" @if($solved->personas == 5)checked @endif>
                  <label class="custom-control-label" for="personas{{$id}}">Más de 500</label>
                </div>
              </div>

              <label>Consecuencia del peligro a las personas</label>
              <br>
              <div class="form-group">
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="conspersonas{{$id}}" name="conspersonas{{$solved->id}}" class="custom-control-input" value="1" @if($solved->consecuencia_persona == 1)checked @endif required>
                  <label class="custom-control-label" for="conspersonas{{$id}}">Baja</label>
                </div>
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="conspersonas{{$id}}" name="conspersonas{{$solved->id}}" class="custom-control-input" value="3" @if($solved->consecuencia_persona == 3)checked @endif>
                  <label class="custom-control-label" for="conspersonas{{$id}}">Media</label>
                </div>
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="conspersonas{{$id}}" name="conspersonas{{$solved->id}}" class="custom-control-input" value="5" @if($solved->consecuencia_persona == 5)checked @endif>
                  <label class="custom-control-label" for="conspersonas{{$id}}">Alta</label>
                </div>
              </div>

              <label>Consecuencia del peligro a la infraestructura</label>
              <br>
              <div class="form-group">
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="consinfraestructura{{$id}}" name="consinfraestructura{{$solved->id}}" class="custom-control-input" value="0" @if($solved->consecuencia_infraestructura == 0)checked @endif required>
                  <label class="custom-control-label" for="consinfraestructura{{$id}}">Extremadamente baja</label>
                </div>
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="consinfraestructura{{$id}}" name="consinfraestructura{{$solved->id}}" class="custom-control-input" value="1" @if($solved->consecuencia_infraestructura == 1)checked @endif required>
                  <label class="custom-control-label" for="consinfraestructura{{$id}}">Baja</label>
                </div>
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="consinfraestructura{{$id}}" name="consinfraestructura{{$solved->id}}" class="custom-control-input" value="3" @if($solved->consecuencia_infraestructura == 3)checked @endif>
                  <label class="custom-control-label" for="consinfraestructura{{$id}}">Media</label>
                </div>
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="consinfraestructura{{$id}}" name="consinfraestructura{{$solved->id}}" class="custom-control-input" value="5" @if($solved->consecuencia_infraestructura == 5)checked @endif>
                  <label class="custom-control-label" for="consinfraestructura{{$id}}">Alta</label>
                </div>
              </div>

              <label>Consecuencia de salud</label>
              <br>
              <div class="form-group">
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input data-toggle="collapse" href="#danger{{$id+3}}" role="button" aria-expanded="false" aria-controls="danger{{$id+3}}" type="radio" id="conssalud{{$id}}" name="conssalud{{$solved->id}}" class="custom-control-input" value="1" @if($solved->consecuencia_salud == 1)checked @endif required>
                  <label class="custom-control-label" for="conssalud{{$id}}">Atención primaria</label>
                </div>
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input data-toggle="collapse" href="#danger{{$id+2}}" role="button" aria-expanded="false" aria-controls="danger{{$id+2}}" type="radio" id="conssalud{{$id}}" name="conssalud{{$solved->id}}" class="custom-control-input" value="3" @if($solved->consecuencia_salud == 3)checked @endif>
                  <label class="custom-control-label" for="conssalud{{$id}}">Enfermedad cronica</label>
                </div>
                <?php $id ++; ?>
                <div class="custom-control custom-radio custom-control-inline">
                  <input data-toggle="collapse" href="#danger{{$id+1}}" role="button" aria-expanded="false" aria-controls="danger{{$id+1}}" type="radio" id="conssalud{{$id}}" name="conssalud{{$solved->id}}" class="custom-control-input" value="5" @if($solved->consecuencia_salud == 5)checked @endif>
                  <label class="custom-control-label" for="conssalud{{$id}}">Hospitalización</label>
                </div>
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