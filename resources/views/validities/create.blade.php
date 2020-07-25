@extends('layouts.app')

@section('title', 'Programar evaluación')

@section('content')
<?php use Carbon\Carbon; ?>
<div class="container">
<div class="row">
    <div class="col-md-6">
        <form action="{{route('validities.store')}}" method="Post">
            {{csrf_field()}}
            {{method_field('POST')}}
            
            <div class="form-group">
                <label for="validity-inicio">Fecha de inicio del cuestionario:</label>
                <input type="date" style="resize:vertical" id="validity-inicio" name="inicio" required value="{{ old('inicio') }}" class="form-control  @if($errors->first('inicio')) is-invalid @endif" min="{{Carbon::now()->toDateString()}}"/>
                <small class="text-danger">{{ $errors->first('inicio') }}</small>
            </div>
            <div class="form-group">
                <label for="validity-fin">Ultimo día de aplicación del cuestionario:</label>
                <input type="date" style="resize:vertical" id="validity-fin" name="fin" required value="{{ old('fin') }}" class="form-control  @if($errors->first('fin')) is-invalid @endif" min="{{Carbon::now()->toDateString()}}"/>
                <small class="text-danger">{{ $errors->first('fin') }}</small>
            </div>
            <div class="form-group">
                <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
            </div>
        </form>
    </div>
    <aside class="col-md-2 offset-md-4">
        <div class="p-4">
        <h4 class="font-italic">Acciones</h4>
            <ol class="list-unstyled">
                <li><a href="/validities">Ver cuestionarios programados</a></li>
            </ol>
        </div>
    </aside>
</div>
</div>
@endsection