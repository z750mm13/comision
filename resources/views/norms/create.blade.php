@extends('layouts.app')

@section('title', 'Norma')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-6">
        <form action="{{route('norms.store')}}" method="Post">
            {{csrf_field()}}
            {{method_field('POST')}}
            
            <div class="form-group">
                <label for="norm-codigo">Codigo:</label>
                <input type="text"  rows="5" style="resize:vertical" id="norm-codigo" name="codigo" placeholder="Ingresa el codigo de la norma" required spellcheck="false" value="{{ old('codigo') }}" class="form-control  @if($errors->first('codigo')) is-invalid @endif" />
                <small class="text-danger">{{ $errors->first('codigo') }}</small>
            </div>
            <div class="form-group">
                <label for="norm-titulo">Titulo:</label>
                <input type="text"  rows="5" style="resize:vertical" id="norm-titulo" name="titulo" placeholder="Ingresa el titulo de la norma" required spellcheck="false" value="{{ old('titulo') }}" class="form-control  @if($errors->first('titulo')) is-invalid @endif" />
                <small class="text-danger">{{ $errors->first('titulo') }}</small>
            </div>
            <div class="form-group">
                <label for="norm-direccion">Direccion:</label>
                <input type="text"  rows="5" style="resize:vertical" id="norm-direccion" name="direccion" placeholder="Ingresa la url de la norma: www.ejemplo.com" required spellcheck="false" value="{{ old('direccion') }}" class="form-control  @if($errors->first('direccion')) is-invalid @endif" />
                <small class="text-danger">{{ $errors->first('direccion') }}</small>
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
                <li><a href="/norms">Ver normas</a></li>
            </ol>
        </div>
    </aside>
</div>
</div>
@endsection