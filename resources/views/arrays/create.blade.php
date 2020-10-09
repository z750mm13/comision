@extends('layouts.content.default.form',[
    'title' => 'Asignar actividad',
    'titlelist' => 'Acciones',
    'titlebody' => 'Asignación',
    'instalaciones' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/arrays">Actividades</a></li>
<li class="breadcrumb-item active" aria-current="page">Asignación de actividad</li>
@endpush

@section('list')
<ol class="list-unstyled">
  <li><a href="/arrays">Actividades de las areas</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('arrays.store')}}" method="Post" id="save-form">
  {{csrf_field()}}
  {{method_field('POST')}}

  <div class="form-group">
      @if($id == null)
        <label for="matrix-subarea">Area de aplicacion:</label>
        <select name="subarea_id" id="matrix-subarea" require class="form-control  @if($errors->first('sub_area_id')) is-invalid @endif" >
        <option value="0">Elije un area</option>
        @foreach($subareas as $subarea)
            <option value="{{$subarea->id}}">{{$subarea->nombre." ".$subarea->area->nombre}}</option>
        @endforeach
        </select>
        <small class="text-danger">{{ $errors->first('sub_area_id') }}</small>
      @else
        <input type="text" name="subarea_id" hidden value="{{$id}}">
      @endif
  </div>
  <div class="form-group">
    <label for="matrix-activity">Actividad:</label>
    <select name="activity_id" id="matrix-activity" require class="form-control  @if($errors->first('activity_id')) is-invalid @endif" >
    <option value="0">Elije una actividad</option>
    @foreach($activities as $activity)
        <option value="{{$activity->id}}">{{$activity->titulo}}</option>
    @endforeach
    </select>
    <small class="text-danger">{{ $errors->first('activity_id') }}</small>
  </div>
  <div class="form-group">
    <input type="submit"  class="btn btn-primary " name="submit"  value="Aceptar">
  </div>
</form>
@endsection