<?php use Carbon\Carbon; ?>
@extends('layouts.content.default.form',[
    'title' => 'Agregar área',
    'titlelist' => 'Acciones',
    'titlebody' => 'Área',
    'actividades' => 'active'
])

@section('list')
<ol class="list-unstyled">
  <li><a href="/commitments">Ver compromisos</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('commitments.store')}}" method="POST">
  {{ csrf_field() }}
  {{ method_field('POST') }}

  <div class="form-group">
    @if(Auth::user()->user == null)
      <label for="commitment-user">Responsable:</label>
      <select name="user_id" id="commitment-user" require class="form-control  @if($errors->first('user_id')) is-invalid @endif" >
      <option value="0">Elije un responsable</option>
      @foreach($users as $user)
          <option value="{{$user->id}}">{{$user->nombre. ' ('. $user->rol. ')'}}</option>
      @endforeach
      </select>
      <small class="text-danger">{{ $errors->first('user_id') }}</small>
    @else
      <input type="text" name="user_id" hidden value="{{Auth::user()->user->id}}">
    @endif
  </div>
  <div class="form-group">
    <label for="commitment-norm">Necesidad:</label>
    <select name="review_id" id="commitment-review" require class="form-control  @if($errors->first('review_id')) is-invalid @endif" >
    <option value="0">Elije una necesidad</option>
    @foreach($reviews as $review)
        <option value="{{$review->id}}">{{$review->target->subarea->nombre}} [{{$review->target->subarea->area->nombre}}] {{substr($review->descripcion, 0, 30)."..."}}</option>
    @endforeach
    </select>
    <small class="text-danger">{{ $errors->first('review_id') }}</small>
  </div>
  <div class="form-group">
    <label for="commitment-fecha">Fecha:</label>
    <input type="date" id="commitment-fecha" name="fecha_cumplimiento" placeholder="Ingrese la fecha" required spellcheck="false" value="{{ old('fecha_cumplimiento') }}" class="form-control  @if($errors->first('fecha_cumplimiento')) is-invalid @endif" min="{{Carbon::now()->toDateString()}}"/>
    <small class="text-danger">{{ $errors->first('fecha_cumplimiento') }}</small>
  </div>
  <div class="form-group">
    <label for="commitment-descripcion">Descripcion:</label>
    <textarea class="form-control" name="accion" id="commitment-descripcion" rows="3"></textarea>
  </div>
  <div class="form-group">
      <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
  </div>
</form>
@endsection