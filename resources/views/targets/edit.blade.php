@extends('layouts.content.default.form',[
    'bg' => '../../argon/img/theme/targets.jpg',
    'title' => 'Edición de tipo de área',
    'titlelist' => 'Acciones',
    'titlebody' => $target->subarea->nombre." ".$target->subarea->area->nombre
])

@section('list')
<ol class="list-unstyled">
  <li><a href="/targets/{{$target->id}}">Ver requisito del area</a></li>
  <li><a href="/targets">Ver requisitos de las areas</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('targets.update',[$target->id])}}" method="Post">
  {{csrf_field()}}
  {{method_field('PUT')}}

  <div class="form-group">
      <label for="target-subarea">Selecciona area:</label>
      <select name="subarea_id" id="target-subarea" require class="form-control  @if($errors->first('subarea_id')) is-invalid @endif" >
      <option value="{{$target->subarea_id}}">{{$target->subarea->nombre." ".$target->subarea->area->nombre}}</option>
      @foreach($subareas as $subarea)
          <option value="{{$subarea->id}}">{{$subarea->nombre." ".$subarea->area->nombre}}</option>
      @endforeach
      </select>
      <small class="text-danger">{{ $errors->first('subarea_id') }}</small>
  </div>
  <div class="form-group">
    <label for="target-questionnaire">Cuestionario:</label>
    <select name="questionnaire_id" id="target-questionnaire" require class="form-control  @if($errors->first('questionnaire_id')) is-invalid @endif" >
    <option value="{{$target->questionnaire_id}}">{{$target->questionnaire->tipo}}</option>
    @foreach($questionnaires as $questionnaire)
        <option value="{{$questionnaire->id}}">{{$questionnaire->tipo}}</option>
    @endforeach
    </select>
    <small class="text-danger">{{ $errors->first('questionnaire_id') }}</small>
  </div>
  <div class="form-group">
    <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
  </div>
</form>
@endsection