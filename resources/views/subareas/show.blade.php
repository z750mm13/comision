@extends('layouts.app')

@section('title', 'subarea '.$subarea->nombre.' '.$subarea->area->nombre)

@section('content')
<div class="container">
<div class="row">
  <div class="col-md-10">

    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">{{$subarea->nombre}}</h1>
      <p class="lead">Ubicación del inmueble: <a href="/areas/{{$subarea->area->id}}">{{$subarea->area->nombre}}</a></p>
      <p class="lead">Planta: {{$subarea->area->area}}</p>
    </div>
    </div>

    <div class="card-deck">
      @if(Auth::user()->admin)
      @foreach ($subarea->targets as $target)
      <div class="col-md-4 col-sm-6 col-xm-12">
      <div class="card mb-3"> <!-- Borde primario primary danger warning-->
        <div class="card-header">
          <h5 class="card-title"><a class="stretched-link" href="/targets/{{$target->id}}" >{{$target->questionnaire->tipo}}</a></h5>
        </div>
        <div class="card-body"> <!-- Texto primario -->
          <h6 class="card-subtitle mb-2 text-muted">Descripcion del requisito</h6>
          <p class="card-text">{{substr($target->questionnaire->descripcion, 0, 37)."..."}}</p>
        </div>
      </div>
      </div>
      @endforeach
      @endif
    </div>
</div>

<div class="col-md-2">
  <aside>
    <div class="p-4">
    <h4 class="font-italic">Acciones</h4>
    <ol class="list-unstyled">
      <li><a href="/subareas"><i class="fas fa-home"></i> Subareas</a></li>
      @if(Auth::user()->admin)
      <li><a href="/subareas/create"><i class="fas fa-plus"></i> Agregar subarea</a></li>
      <li><a href="/targets/create/{{$subarea->id}}"><i class="fas fa-plus"></i> Agregar tipo</a></li>
      <li><a href="/subareas/{{$subarea->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar subarea</a></li>
      <li><a href="#" onclick="
      let result =confirm('Esta seguro de eliminar subarea?');
      if(result){
        event.preventDefault();
        document.getElementById('delete-form').submit();
      }
      "><i class="fas fa-trash-alt"></i> Eliminar subarea</a></li>
      <form action="{{ route('subareas.destroy',[$subarea->id]) }}" id="delete-form" method="post" style="display:none">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="delete">
      </form>
      @endif
    </ol>
    </div>
  </aside>
</div>
</div>
</div>

@endsection