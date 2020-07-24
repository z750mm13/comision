@extends('layouts.app')

@section('title', 'Supervisión de áreas')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-6">

<form action="{{route('guards.store')}}" method="Post" id="save-form">
    {{csrf_field()}}
    {{method_field('POST')}}

    <div class="form-group">
        @if($id == null)
          <label for="guard-cordinate">Responsable:</label>
          <select name="cordinate_id" id="guard-cordinate" require class="form-control  @if($errors->first('cordinate_id')) is-invalid @endif" >
          <option value="0">Elije un responsable</option>
          @foreach($cordinates as $cordinate)
              <option value="{{$cordinate->id}}">{{$cordinate->element->nombre." ".$cordinate->element->apellidos}}</option>
          @endforeach
          </select>
          <small class="text-danger">{{ $errors->first('cordinate_id') }}</small>
        @else
          <input type="text" name="cordinate_id" hidden value="{{$id}}">
        @endif
    </div>
    <div class="form-group">
      <label for="requirement-norm">Area:</label>
      <select name="area_id" id="requirement-area" require class="form-control  @if($errors->first('area_id')) is-invalid @endif" >
      <option value="0">Elije una area</option>
      @foreach($areas as $area)
          <option value="{{$area->id}}">{{$area->nombre." ".substr($area->area, 0, 30)}}</option>
      @endforeach
      </select>
      <small class="text-danger">{{ $errors->first('area_id') }}</small>
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
        <li><a href="/guards">Ver resguardos</a></li>
    </ol>
    </div>
</aside>
</div>
</div>
@endsection