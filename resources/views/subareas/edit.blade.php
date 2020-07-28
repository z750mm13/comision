@extends('layouts.content.default.form',[
    'bg' => '../../argon/img/theme/subareas.jpg',
    'title' => 'Edición de subárea',
    'titlelist' => 'Acciones',
    'titlebody' => $subarea->nombre.' '.$subarea->tipo,
    'instalaciones' => 'active'
])

@section('list')
<ol class="list-unstyled">
    <li><a href="/subareas/{{$subarea->id}}">Ver Subárea</a></li>
    <li><a href="/subareas">Todas las subáreas</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('subareas.update',[$subarea->id])}}" method="Post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    
    <div class="form-group">
        <label for="requirement-norm">Área:</label>
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
@endsection