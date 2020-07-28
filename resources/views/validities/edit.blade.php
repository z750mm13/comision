@extends('layouts.content.default.form',[
    'title' => 'Edición de evaluación',
    'titlelist' => 'Acciones',
    'titlebody' => 'Evaluación',
    'actividades' => 'active'
])

<?php use Carbon\Carbon; ?>

@section('list')
<ol class="list-unstyled">
    <li><a href="/validities/{{$validity->id}}">Esta evaluación</a></li>
    <li><a href="/validities">Evaluaciones programadas</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('validities.update',[$validity->id])}}" method="Post">
    {{csrf_field()}}
    {{method_field('PUT')}}

    <div class="form-group">
        <label for="validity-inicio">Fecha de inicio del cuestionario:</label>
        <input value="{{$validity->inicio}}" type="date" style="resize:vertical" id="validity-inicio" name="inicio" required value="{{ old('inicio') }}" class="form-control  @if($errors->first('inicio')) is-invalid @endif" min="{{$validity->inicio}}"/>
        <small class="text-danger">{{ $errors->first('inicio') }}</small>
    </div>
    <div class="form-group">
        <label for="validity-fin">Ultimo día de aplicación del cuestionario:</label>
        <input value="{{$validity->fin}}" type="date" style="resize:vertical" id="validity-fin" name="fin" required value="{{ old('fin') }}" class="form-control  @if($errors->first('fin')) is-invalid @endif" min="{{$validity->inicio}}"/>
        <small class="text-danger">{{ $errors->first('fin') }}</small>
    </div>
    <div class="form-group">
        <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
    </div>
</form>
@endsection