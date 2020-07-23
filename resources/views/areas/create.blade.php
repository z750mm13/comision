@extends('layouts.app')

@section('title', 'Agregar area')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-6">
        <form action="{{route('areas.store')}}" method="Post">
            {{csrf_field()}}
            {{method_field('POST')}}

            <div class="form-group">
                <label for="area-nombre">Nombre:</label>
                <input type="text" rows="5" style="resize:vertical" id="area-nombre" name="nombre" placeholder="Ingresa el nombre del area" required value="{{ old('nombre') }}" class="form-control  @if($errors->first('nombre')) is-invalid @endif" />
                <small class="text-danger">{{ $errors->first('nombre') }}</small>
            </div>
            <div class="form-group">
                <label for="area-area">Planta:</label>
                <input type="text" rows="5" style="resize:vertical" id="area-area" name="area" placeholder="Ingresa el nombre de la planta a la que pertenece" required value="{{ old('area') }}" class="form-control  @if($errors->first('area')) is-invalid @endif" />
                <small class="text-danger">{{ $errors->first('area') }}</small>
            </div>
            <div class="form-group">
                <label for="area-color">Color en el mapa:</label>
                <input type="color" rows="5" style="resize:vertical" id="area-color" name="color" placeholder="Selecciona el color" required value="{{ old('color') }}" class="form-control  @if($errors->first('color')) is-invalid @endif" />
                <small class="text-danger">{{ $errors->first('color') }}</small>
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
                <li><a href="/areas">Ver areas</a></li>
            </ol>
        </div>
    </aside>
</div>
</div>
@endsection