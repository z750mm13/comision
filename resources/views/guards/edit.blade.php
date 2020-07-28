@extends('layouts.content.default.form',[
    'bg' => '../../argon/img/theme/guards.jpg',
    'title' => 'Edición de supervisor',
    'titlelist' => 'Acciones',
    'titlebody' => 'Supervisor ('. $guard->cordinate->user->nombre. ')',
    'instalaciones' => 'active'
])

@section('list')
<ol class="list-unstyled">
  <li><a href="/guards/{{$guard->id}}">Ver resguardos</a></li>
  <li><a href="/guards">Ver supervisores de área</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('guards.update',[$guard->id])}}" method="Post">
  {{csrf_field()}}
  {{method_field('PUT')}}

  <div class="form-group">
    <label for="guard-cordinate">Responsable:</label>
    <select name="cordinate_id" id="guard-cordinate" require class="form-control  @if($errors->first('cordinate_id')) is-invalid @endif" >
        <option value="{{$guard->cordinate->id}}">{{$guard->cordinate->user->nombre}} {{$guard->cordinate->user->apellidos}}</option>
    @foreach($cordinates as $cordinate)
        <option value="{{$cordinate->id}}">{{$cordinate->nombre." ".$cordinate->apellidos}}</option>
    @endforeach
    </select>
    <small class="text-danger">{{ $errors->first('cordinate_id') }}</small>
  </div>
  <div class="form-group">
    <label for="requirement-norm">Area:</label>
    <select name="area_id" id="requirement-area" require class="form-control  @if($errors->first('area_id')) is-invalid @endif" >
    <option value="{{$guard->area->id}}">{{$guard->area->nombre." ".$guard->area->area}}</option>
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
@endsection