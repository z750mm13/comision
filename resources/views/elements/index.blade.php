@extends('layouts.content.default.index',[
    'title' => 'Integrantes de la comisión',
    'descriptions' => [
        __('Los integrantes de la comisión son los que interactuan con el sistema y llevan a cabo las encuestas con respecto a cada area.'),
        __('En este apartado se podrá tener el control de las cuentas de usuarios para que puedan acceder al sistema. Si decea agregar una nueva cuenta el presione siguente boton o acepte las solicitudes en la lista de abajo.')
      ],
    'titlebody' => __('Integrantes'),
    'image' => null,
    'button' => __('Inscribir integrante'),
    'urlbutton' => __('/elements'),
    'personal' => 'active'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item active" aria-current="page">Integrantes</li>
@endpush

@section('bodycontent')
<h1>Usuarios activos</h1>
<div class="card-deck">
@foreach($actives as $element)
  <div class="col-md-4 col-sm-6 col-xm-12">
  <div class="card mb-3"> <!-- Borde primario primary danger warning-->
    <div class="card-body text-center"> <!-- Texto primario -->
      <p><img src="{{\Tools\Img\ToServer::getFile($element->foto)}}" alt="avatar" class="rounded-circle" style="width: 130px;"></p>
      <h5 class="card-title">{{$element->nombre." ".$element->apellidos}}</h5>
      <a class="stretched-link" href="/elements/{{$element->id}}" class="card-link">Ver más...</a>
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
        <p><img src="{{\Tools\Img\ToServer::getFile($element->foto)}}" alt="avatar" class="rounded-circle" style="width: 130px;"></p>
        <h5 class="card-title">{{$element->nombre." ".$element->apellidos}}</h5>
        <a class="stretched-link" href="/elements/{{$element->id}}" class="card-link">Ver más...</a>
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