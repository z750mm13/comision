@extends('layouts.content.default.form',[
    'title' => 'Asignar tipo',
    'titlelist' => 'Acciones',
    'titlebody' => 'Asignación',
    'instalaciones' => 'active'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/targets">Tipos</a></li>
<li class="breadcrumb-item active" aria-current="page">Asignación de tipo</li>
@endpush

@section('list')
<ol class="list-unstyled">
  <li><a href="/targets">Ver requisitos de las areas</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('targets.store')}}" method="Post" id="save-form">
  {{csrf_field()}}
  {{method_field('POST')}}

  <div class="form-group">
      @if($id == null)
        <label for="target-subarea">Area de aplicacion:</label>
        <select name="subarea_id" id="target-subarea" require class="form-control  @if($errors->first('sub_area_id')) is-invalid @endif" >
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
    <label for="target-questionnaire">Cuestionario:</label>
    <select name="questionnaire_id" id="target-questionnaire" require class="form-control  @if($errors->first('questionnaire_id')) is-invalid @endif" >
    <option value="0">Elije un cuestionario</option>
    @foreach($questionnaires as $questionnaire)
        <option value="{{$questionnaire->id}}">{{$questionnaire->tipo}}</option>
    @endforeach
    </select>
    <small class="text-danger">{{ $errors->first('questionnaire_id') }}</small>
  </div>
  <div class="form-group">
    <input type="text" name="ciclo" hidden value="{{ Auth::user()->cordinates->last()->ciclo }}">
  </div>
  <div class="form-group">
    <input type="submit"  class="btn btn-primary " name="submit"  value="Aceptar">
  </div>
</form>
@endsection