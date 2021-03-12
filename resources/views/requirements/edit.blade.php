@extends('layouts.content.default.form',[
    'title' => 'Edición de requisito',
    'titlelist' => 'Acciones',
    'titlebody' => 'Requisito '.$requirement->numero,
    'normativa' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/requirements">Requisitos</a></li>
<li class="breadcrumb-item"><a href="/requirements/{{$requirement->id}}">{{'Requisito '.$requirement->numero}}</a></li>
<li class="breadcrumb-item active" aria-current="page">Edición de requisito</li>
@endpush

@section('list')
<ol class="list-unstyled">
    <li><a href="/requirements/{{$requirement->id}}">Ver requisito</a></li>
    <li><a href="/requirements">Todas los requisitos</a></li>
</ol>
@endsection

@section('bodycontent')
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
        <select name="frecuencia" class="form-control" id="requirement-frecuencia">
            <option>{{$requirement->frecuencia}}</option>
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