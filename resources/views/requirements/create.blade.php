@extends('layouts.app')

@section('title', 'Requisito')

@section('content')
<div class="container">
<div class="row">
  <div class="col-md-6">
    <!-- Formulario -->
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
          <input type="text" id="requirement-numero" name="numero" placeholder="Ingrese el numerodel requisito" required spellcheck="false" value="{{ old('numero') }}" class="form-control  @if($errors->first('numero')) is-invalid @endif" />
          <small class="text-danger">{{ $errors->first('numero') }}</small>
      </div>
      <div class="form-group">
          <label for="requirement-descripcion">Descripción:</label>
          <input type="text" id="requirement-descripcion" name="descripcion" placeholder="Ingrese la descripción del requisito" required spellcheck="false" value="{{ old('descripcion') }}" class="form-control  @if($errors->first('descripcion')) is-invalid @endif" />
          <small class="text-danger">{{ $errors->first('descripcion') }}</small>
      </div>
      <div class="form-group">
          <label for="requirement-tipo">Tipo:</label>
          <input type="text" id="requirement-tipo" name="tipo" placeholder="Selecione el tipode requisito" required spellcheck="false" value="{{ old('tipo') }}" class="form-control  @if($errors->first('tipo')) is-invalid @endif" />
          <small class="text-danger">{{ $errors->first('tipo') }}</small>
      </div>
      <div class="form-group">
          <label for="requirement-frecuencia">Frecuencia:</label>
          <input type="text" id="requirement-frecuencia" name="frecuencia" placeholder="Ingresa la frecuenciadel requisito" required spellcheck="false" value="{{ old('frecuencia') }}" class="form-control  @if($errors->first('frecuencia')) is-invalid @endif" />
          <small class="text-danger">{{ $errors->first('frecuencia') }}</small>
      </div>
      <div class="form-group">
          <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
      </div>
    </form>
  </div>

  <div class="col-md-2 offset-md-4">
  <aside>
      <div class="p-4">
        <h4 class="font-italic">Acciones</h4>
        <ol class="list-unstyled">
          <li><a href="/requirements">Ver requisitos</a></li>
        </ol>
      </div>
    </aside>
  </div>

</div>
</div>
@endsection