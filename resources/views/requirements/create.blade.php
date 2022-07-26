@extends('layouts.content.default.form',[
    'title' => 'Agregar requisito',
    'titlelist' => 'Acciones',
    'titlebody' => 'Requisito',
    'normativa' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/requirements">Requisitos</a></li>
<li class="breadcrumb-item active" aria-current="page">Creación de requisito</li>
@endpush

@section('list')
<ol class="list-unstyled">
  <li><a href="/requirements">Ver requisitos</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('requirements.store')}}" method="POST">
  {{ csrf_field() }}
  {{ method_field('POST') }}

  @if ($norm_id == null)
    <label for="requirement-norm">Norma:</label>
    <select name="norm_id" id="requirement-norm" require class="form-control  @if($errors->first('norm_id')) is-invalid @endif" >
    <option value="0">Elije una norma</option>
    @foreach($norms as $norm)
        <option value="{{$norm->id}}">{{$norm->codigo." ".substr($norm->titulo, 0, 30)."..."}}</option>
    @endforeach
    </select>
    <small class="text-danger">{{ $errors->first('norm_id') }}</small>
  @else
    <input type="hidden" class="form-control" name="norm_id" value="{{$norm_id}}">
  @endif
    
  <div class="form-group">
      <label for="requirement-numero">Numero:</label>
      <input type="text" id="requirement-numero" name="numero" placeholder="Ingrese el numero del requisito" required spellcheck="false" value="{{ old('numero') }}" class="form-control  @if($errors->first('numero')) is-invalid @endif" />
      <small class="text-danger">{{ $errors->first('numero') }}</small>
  </div>
  <div class="form-group">
      <label for="requirement-descripcion">Descripción:</label>
      <input type="text" id="requirement-descripcion" name="descripcion" placeholder="Ingrese la descripción del requisito" required spellcheck="false" value="{{ old('descripcion') }}" class="form-control  @if($errors->first('descripcion')) is-invalid @endif" />
      <small class="text-danger">{{ $errors->first('descripcion') }}</small>
  </div>
  <div class="form-group">
      <label for="requirement-tipo">Tipo:</label>
      <input type="text" id="requirement-tipo" name="tipo" placeholder="Tipo de requisito" required spellcheck="false" value="{{ old('tipo') }}" class="form-control  @if($errors->first('tipo')) is-invalid @endif" />
      <small class="text-danger">{{ $errors->first('tipo') }}</small>
  </div>
  <div class="form-group">
      <label for="requirement-frecuencia">Frecuencia:</label>
      <select name="frecuencia" class="form-control" id="requirement-frecuencia">
        <option>Semanal</option>
        <option>Mensual</option>
        <option>Bimestral</option>
        <option>Trimestral</option>
        <option>Semestral</option>
        <option>Anual</option>
      </select>
      <small class="text-danger">{{ $errors->first('frecuencia') }}</small>
  </div>
  <div class="form-group">
      <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
  </div>
</form>
@endsection