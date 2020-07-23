@extends('layouts.app')

@section('title', 'Editar '.$subarea->nombre.' '.$subarea->tipo)

@section('content')
@if(session()->has('errors'))
<div  class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <strong>
    {!! session()->get('errors')!!}
    </strong>
</div>
@endif

<div class="container">
<div class="row">
    <div class="col-md-6 ">
        <form action="{{route('subareas.update',[$subarea->id])}}" method="Post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            
            <div class="form-group">
                <label for="requirement-norm">Area:</label>
                <select name="area_id" id="requirement-area" require class="form-control  @if($errors->first('area_id')) is-invalid @endif" >
                    <option value="{{$subarea->area->id}}">{{$subarea->area->nombre." ".substr($subarea->area->area, 0, 30)}}</option>
                @foreach($areas as $area)
                    @if($subarea->area->id != $area->id)
                    <option value="{{$area->id}}">{{$area->nombre." ".substr($area->area, 0, 30)}}</option>
                    @endif
                @endforeach
                </select>
                <small class="text-danger">{{ $errors->first('area_id') }}</small>
            </div>
            <div class="form-group">
                <label for="subarea-nombre">Nombre:</label>
                <input value="{{$subarea->nombre}}" type="text" rows="5" style="resize:vertical" id="subarea-nombre" name="nombre" placeholder="Ingresa el nombre del subarea" required value="{{ old('nombre') }}" class="form-control  @if($errors->first('nombre')) is-invalid @endif" />
                <small class="text-danger">{{ $errors->first('nombre') }}</small>
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
                <li><a href="/subareas/{{$subarea->id}}">Ver Sub Area</a></li>
                <li><a href="/subareas">Areas de las instalaciones</a></li>
            </ol>
        </div>
    </aside>
</div>
</div>
@endsection