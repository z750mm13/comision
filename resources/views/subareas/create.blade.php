@extends('layouts.content.default.form',[
    'title' => 'Agregar subárea',
    'titlelist' => 'Acciones',
    'titlebody' => 'Subárea',
    'instalaciones' => 'active'
])

@section('list')
<ol class="list-unstyled">
    <li><a href="/subareas">Ver subáreas</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('subareas.store')}}" method="Post">
    {{csrf_field()}}
    {{method_field('POST')}}
    <div class="form-group">
        @if ($area_id == null)
        <label for="requirement-norm">Area:</label>
        <select name="area_id" id="requirement-area" require class="form-control  @if($errors->first('area_id')) is-invalid @endif" >
        <option value="0">Elije una area</option>
        @foreach($areas as $area)
            <option value="{{$area->id}}">{{$area->nombre." ".substr($area->area, 0, 30)}}</option>
        @endforeach
        </select>
        <small class="text-danger">{{ $errors->first('area_id') }}</small>
      @else
        <input type="hidden" class="form-control" name="area_id" value="{{$area_id}}">
      @endif
    </div>
    <div class="form-group">
        <label for="subarea-nombre">Nombre:</label>
        <input type="text" rows="5" style="resize:vertical" id="subarea-nombre" name="nombre" placeholder="Ingresa el nombre del subarea" required value="{{ old('nombre') }}" class="form-control  @if($errors->first('nombre')) is-invalid @endif" />
        <small class="text-danger">{{ $errors->first('nombre') }}</small>
    </div>
    <div class="form-group">
        <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
    </div>
</form>
@endsection