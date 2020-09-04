<?php $subarea = $compliment->commitment->review->target->subarea; ?>
@extends('layouts.content.default.form',[
    'title' => 'Edición cumplimiento',
    'titlelist' => 'Acciones',
    'titlebody' => 'Cumplimiento',
    'actividades' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/compliments">Cumplimientos</a></li>
<li class="breadcrumb-item"><a href="/compliments/{{$compliment->id}}">{{$compliment->commitment->user->rol. '/'. '['. $subarea->nombre."-".$subarea->area->nombre. ']'}}</a></li>
<li class="breadcrumb-item active" aria-current="page">Edición cumplimiento</li>
@endpush

@section('list')
<ol class="list-unstyled">
    <li><a href="/compliments/{{$compliment->id}}">Ver cumplimiento</a></li>
    <li><a href="/compliments">Cumplimientos</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('compliments.update',[$compliment->id])}}" method="Post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PUT')}}
    
    <div class="form-group">
        <label for="requirement-norm">Area:</label>
        <select name="commitment_id" id="commitment-compliment" require class="form-control  @if($errors->first('commitment_id')) is-invalid @endif" >
            <option value="{{$compliment->commitment->id}}">{{substr($compliment->commitment->accion, 0, 30)}}</option>
            @foreach($commitments as $commitment)
            <option value="{{$commitment->id}}">{{substr($commitment->accion, 0, 30)}}</option>
            @endforeach
        </select>
        <small class="text-danger">{{ $errors->first('commitment_id') }}</small>
    </div>
    <div class="form-group">
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile" name="evidencia" lang="es" accept=".jpg,.png">
        <label class="custom-file-label" for="customFile">Evidencia</label>
    </div>
        <small class="text-danger">{{ $errors->first('evidencia') }}</small>
    </div>
    <div class="form-group">
        <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
    </div>
</form>
@endsection