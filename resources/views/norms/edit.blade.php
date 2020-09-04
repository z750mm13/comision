@extends('layouts.content.default.form',[
    'title' => 'Edición de norma',
    'titlelist' => 'Acciones',
    'titlebody' => $norm->codigo,
    'normativa' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/norms">Normas</a></li>
<li class="breadcrumb-item"><a href="/norms/{{$norm->id}}">{{$norm->codigo}}</a></li>
<li class="breadcrumb-item active" aria-current="page">Edición de norma</li>
@endpush

@section('list')
<ol class="list-unstyled">
    <li><a href="/norms/{{$norm->id}}">Ver norma</a></li>
    <li><a href="/norms">Todas las normas</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('norms.update',[$norm->id])}}" method="Post">
    {{csrf_field()}}
    {{method_field('PUT')}}

    <div class="form-group">
        <label for="norm-codigo">Codigo:</label>
        <input type="text"  rows="5" style="resize:vertical" id="norm-codigo" name="codigo" placeholder="Ingresa el codigo de la norma" required spellcheck="false" value="{{$norm->codigo}}" class="form-control  @if($errors->first('codigo')) is-invalid @endif" />
        <small class="text-danger">{{ $errors->first('codigo') }}</small>
    </div>
    <div class="form-group">
        <label for="norm-titulo">Titulo:</label>
        <input type="text"  rows="5" style="resize:vertical" id="norm-titulo" name="titulo" placeholder="Ingresa el titulo de la norma" required spellcheck="false" value="{{$norm->titulo}}" class="form-control  @if($errors->first('titulo')) is-invalid @endif" />
        <small class="text-danger">{{ $errors->first('titulo') }}</small>
    </div>
    <div class="form-group">
        <label for="norm-direccion">Direccion:</label>
        <input type="text"  rows="5" style="resize:vertical" id="norm-direccion" name="direccion" placeholder="Ingresa la url de la norma: www.ejemplo.com" required spellcheck="false" value="{{$norm->direccion}}" class="form-control  @if($errors->first('direccion')) is-invalid @endif" />
        <small class="text-danger">{{ $errors->first('direccion') }}</small>
    </div>
    <div class="form-group">
        <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
    </div>
</form>
@endsection