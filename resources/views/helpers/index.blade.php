@extends('layouts.content.default.index',[
    'bg' => '../argon/img/theme/helpers.jpg',
    'title' => 'Apoyo de la comisión',
    'descriptions' => [
      __('El personal de apoyo de comisión son directivos que ayudan a cumplir los requisitos y necesidades de las instalaciones.'),
      __('En este apartado se podrá tener el control de las cuentas de usuarios de apoyo a la comisión para que puedan acceder al sistema. Si decea agregar una nueva cuenta presione el siguente boton.')
    ],
    'titlebody' => __('Apoyo de la comisión'),
    'image' => null,
    'button' => __('Inscribir apoyo'),
    'urlbutton' => __('/helpers/create')
])

@section('bodycontent')
<h1>Usuarios activos</h1>
<div class="card-deck">
@foreach($actives as $element)
  <div class="col-md-4 col-sm-6 col-xm-12">
  <div class="card mb-3"> <!-- Borde primario primary danger warning-->
    <div class="card-body text-center"> <!-- Texto primario -->
      <p><img src="{{\Tools\Img\ToServer::getFile($element->foto)}}" alt="avatar" class="rounded-circle" style="width: 10rem;"></p>
      <h5 class="card-title">{{$element->nombre." ".$element->apellidos}}</h5>
      <a class="stretched-link" href="/helpers/{{$element->id}}" class="card-link">Ver más...</a>
    </div>
  </div>
  </div>
@endforeach
</div>

<h1>Usuarios por aceptar</h1>
<div class="card-deck">
  @forelse($inactives as $element)
    <div class="col-md-4 col-sm-6 col-xm-12">
    <div class="card mb-3"> <!-- Borde primario primary danger warning -->
      <div class="card-body text-center"> <!-- Texto primario -->
        <p><img src="{{\Tools\Img\ToServer::getFile($element->foto)}}" alt="avatar" class="rounded-circle" style="width: 10rem;"></p>
        <h5 class="card-title">{{$element->nombre." ".$element->apellidos}}</h5>
        <a class="stretched-link" href="/helpers/{{$element->id}}" class="card-link">Ver más...</a>
      </div>
    </div>
    </div>
  @empty
  <div class="card mb-3"> <!-- Borde primario primary danger warning -->
    <div class="card-body text-center"> <!-- Texto primario -->
      <h4>No hay solicitudes</h4>
    </div>
  </div>
  @endforelse
</div>
@endsection