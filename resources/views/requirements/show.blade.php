@extends('layouts.app')

@section('title', 'Requisito '.$requirement->numero )

@section('content')
<div class="container">
<div class="row">
  <div class="col-md-10">

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">{{$requirement->numero}}</h1>
        <p class="lead">{{$requirement->descripcion}}</p>
        <p>Tipo: {{$requirement->tipo}}</p>
        <p class="lead">Norma: <a href="/norms/{{$requirement->norm->id}}">{{$requirement->norm->codigo}}</a></p>
      </div>
    </div>

  </div>

<div class="col-md-2">
  <aside>
    <div class="p-4">
    <h4 class="font-italic">Acciones</h4>
    <ol class="list-unstyled">
      <li><a href="/requirements"><i class="fas fa-home"></i> Todos los requisitos</a></li>
      @if(Auth::user()->admin)
      <li><a href="/requirements/create"><i class="fas fa-plus"></i> Agregar requisito</a></li>
      <li><a href="/requirements/{{$requirement->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar requisto</a></li>
      <li><a href="#" onclick="
      let result =confirm('Esta seguro de eliminar el requisito?');
      if(result){
        event.preventDefault();
        document.getElementById('delete-form').submit();
      }
      "><i class="fas fa-trash-alt"></i> Eliminar requisito</a></li>
      <form action="{{ route('requirements.destroy',[$requirement->id]) }}" id="delete-form" method="post" style="display:none">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE">
      </form>
      @endif
    </ol>
    </div>
  </aside>
</div>
</div>
</div>

@endsection