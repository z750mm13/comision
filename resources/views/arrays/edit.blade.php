@extends('layouts.content.default.form',[
    'title' => 'Edición de titulo de área',
    'titlelist' => 'Acciones',
    'titlebody' => $matrix->subarea->nombre." ".$matrix->subarea->area->nombre,
    'instalaciones' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/arrays">Tipos</a></li>
<li class="breadcrumb-item"><a href="/arrays/{{$matrix->id}}">{{$matrix->subarea->nombre." [".$matrix->subarea->area->nombre." ".$matrix->subarea->area->area."]"}}</a></li>
<li class="breadcrumb-item active" aria-current="page">Edición de titulo</li>
@endpush

@section('list')
<ol class="list-unstyled">
  <li><a href="/arrays/{{$matrix->id}}">Ver actividad del area</a></li>
  <li><a href="/arrays">Ver actividades de las areas</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('arrays.update',[$matrix->id])}}" method="Post">
  {{csrf_field()}}
  {{method_field('PUT')}}

  <div class="form-group">
      <label for="matrix-subarea">Selecciona area:</label>
      <select name="subarea_id" id="matrix-subarea" require class="form-control  @if($errors->first('subarea_id')) is-invalid @endif" >
      <option value="{{$matrix->subarea_id}}">{{$matrix->subarea->nombre." ".$matrix->subarea->area->nombre}}</option>
      @foreach($subareas as $subarea)
          <option value="{{$subarea->id}}">{{$subarea->nombre." ".$subarea->area->nombre}}</option>
      @endforeach
      </select>
      <small class="text-danger">{{ $errors->first('subarea_id') }}</small>
  </div>
  <div class="form-group">
    <label for="matrix-activity">Cuestionario:</label>
    <select name="activity_id" id="matrix-activity" require class="form-control  @if($errors->first('activity_id')) is-invalid @endif" >
    <option value="{{$matrix->activity_id}}">{{$matrix->activity->titulo}}</option>
    @foreach($activities as $activity)
        <option value="{{$activity->id}}">{{$activity->titulo}}</option>
    @endforeach
    </select>
    <small class="text-danger">{{ $errors->first('activity_id') }}</small>
  </div>
  <div class="form-group">
    <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
  </div>
</form>
@endsection