@extends('layouts.app')

@section('title', 'Requisito '.$requirement->numero )

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-6 ">
        <form action="{{route('requirements.update',[$requirement->id])}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <label for="requirement-norm">Norma:</label>
            <select name="norm_id" id="requirement-norm" require class="form-control  @if($errors->first('norm_id')) is-invalid @endif" >
            <option value="{{ $requirement->norm->id }}">{{$requirement->norm->codigo." ".substr($requirement->norm->titulo, 0, 30)."..." }}</option>
            @foreach($norms as $norm)
                <option value="{{$norm->id}}">{{$norm->codigo." ".substr($norm->titulo, 0, 30)."..."}}</option>
            @endforeach
            </select>
            <small class="text-danger">{{ $errors->first('norm_id') }}</small>
              
            <div class="form-group">
                <label for="requirement-numero">Numero:</label>
                <input type="text" id="requirement-numero" name="numero" placeholder="Ingrese el numerodel requisito" required spellcheck="false" value="{{$requirement->numero}}" class="form-control  @if($errors->first('numero')) is-invalid @endif" />
                <small class="text-danger">{{ $errors->first('numero') }}</small>
            </div>
            <div class="form-group">
                <label for="requirement-descripcion">Descripcion:</label>
                <input type="text" id="requirement-descripcion" name="descripcion" placeholder="Ingrese ladescripcióndel requisito" required spellcheck="false" value="{{$requirement->descripcion}}" class="form-control  @if($errors->first('descripcion')) is-invalid @endif" />
                <small class="text-danger">{{ $errors->first('descripcion') }}</small>
            </div>
            <div class="form-group">
                <label for="requirement-tipo">Tipo:</label>
                <input type="text" id="requirement-tipo" name="tipo" placeholder="Selecione el tipode requisito" required spellcheck="false" value="{{$requirement->tipo}}" class="form-control  @if($errors->first('tipo')) is-invalid @endif" />
                <small class="text-danger">{{ $errors->first('tipo') }}</small>
            </div>
            <div class="form-group">
                <label for="requirement-frecuencia">Frecuencia:</label>
                <input type="text" id="requirement-frecuencia" name="frecuencia" placeholder="Ingresa la frecuenciadel requisito" required spellcheck="false" value="{{$requirement->frecuencia}}" class="form-control  @if($errors->first('frecuencia')) is-invalid @endif" />
                <small class="text-danger">{{ $errors->first('frecuencia') }}</small>
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
                <li><a href="/requirements/{{$requirement->id}}">Ver requisito</a></li>
                <li><a href="/requirements">Todas los requisitos</a></li>
            </ol>
        </div>
    </aside>
</div>
</div>
@endsection