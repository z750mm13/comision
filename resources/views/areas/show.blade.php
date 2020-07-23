@extends('layouts.app')

@section('title', 'Area '.$area->nombre.' '.$area->area)

@section('content')
<div class="container">
<div class="row">
  <div class="col-md-10">

    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">{{$area->nombre." ".$area->area}}</h1>
    </div>
    </div>

    <div class="container">
      <div class="card-deck">
      @foreach($area->subareas as $subarea)
        <div class="col-md-4 col-sm-6 col-xm-12">
        <div class="card mb-3"> <!-- Borde primario primary danger warning-->
          <div class="card-header">
            <h5 class="card-title">{{$subarea->nombre}}</h5>
          </div>
          <div class="card-body"> <!-- Texto primario -->
            <h6 class="card-subtitle mb-2 text-muted">Area: {{$subarea->area->nombre}}</h6>
            <h6 class="card-subtitle mb-2 text-muted">Tipo: {{$subarea->tipo}}</h6>
            <a class="stretched-link" href="/subareas/{{$subarea->id}}" class="card-link">Ver mas...</a>
          </div>
        </div>
        </div>
      @endforeach
      </div>
      </div>

</div>

<div class="col-md-2">
  <aside>
    <div class="p-4">
    <h4 class="font-italic">Acciones</h4>
    <ol class="list-unstyled">
      <li><a href="/areas"><i class="fas fa-home"></i> Areas de las instalaciones</a></li>
      @if(Auth::user()->admin)
      <li><a href="/areas/create"><i class="fas fa-plus"></i> Agregar area</a></li>
      <li><a href="/subareas/create/{{$area->id}}"><i class="fas fa-plus"></i> Agregar subárea</a></li>
      <li><a href="/areas/{{$area->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar area</a></li>
      <li><a href="#" onclick="
      let result =confirm('Esta seguro de eliminar el area?');
      if(result){
        event.preventDefault();
        document.getElementById('delete-form').submit();
      }
      "><i class="fas fa-trash-alt"></i> Eliminar area</a></li>
      <form action="{{ route('areas.destroy',[$area->id]) }}" id="delete-form" method="post" style="display:none">
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