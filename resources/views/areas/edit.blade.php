@extends('layouts.content.default.form',[
    'title' => 'Edición de área',
    'titlelist' => 'Acciones',
    'titlebody' => $area->nombre.' '.$area->area,
    'instalaciones' => 'active'
])

@section('list')
<ol class="list-unstyled">
    <li><a href="/areas/{{$area->id}}">Ver area</a></li>
    <li><a href="/areas">Areas de las instalaciones</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('areas.update',[$area->id])}}" method="Post">
    {{csrf_field()}}
    {{method_field('PUT')}}

    <div class="form-group">
        <label for="area-nombre">Nombre:</label>
        <input type="text" rows="5" style="resize:vertical" id="area-nombre" name="nombre" placeholder="Ingresa el nombre del personal" required value="{{ $area->nombre }}" class="form-control  @if($errors->first('nombre')) is-invalid @endif" />
        <small class="text-danger">{{ $errors->first('nombre') }}</small>
    </div>
    <div class="form-group">
        <label for="area-area">Planta:</label>
        <input type="text" rows="5" style="resize:vertical" id="area-area" name="area" placeholder="Ingresa el nombre de la planta a la que pertenece" required value="{{ $area->area }}" class="form-control  @if($errors->first('area')) is-invalid @endif" />
        <small class="text-danger">{{ $errors->first('area') }}</small>
    </div>
    <div class="form-group">
        <label for="area-color">Color en el mapa:</label>
        <input type="color" rows="5" style="resize:vertical" id="area-color" name="color" placeholder="Selecciona el color" required value="{{ $area->color }}" class="form-control  @if($errors->first('color')) is-invalid @endif" />
        <small class="text-danger">{{ $errors->first('color') }}</small>
    </div>
    <div class="form-group">
        <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
    </div>

</form>
@endsection