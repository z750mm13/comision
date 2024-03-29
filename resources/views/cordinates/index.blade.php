@extends('layouts.content.default.index',[
    'title' => 'Rol de los integrantes',
    'descriptions' => [
      __('Los roles son los cargos que tienen los usuarios. En este caso solo se podran asignar a personas cuya cuenta este activa. En este apartado se podrá tener el control de los roles de los usuarios registrados y activos. Si decea asignarle un rol a alguna cuenta seleccione el boton de + en el rol que quiere agregar y seleccione el personal.'),
      __('En este apartado se podrá tener el control de los roles de los usuarios registrados y activos. Si decea asignarle un rol a alguna cuenta seleccione el boton de + en el rol que quiere agregar y seleccione el personal.')
    ],
    'titlebody' => __('Roles'),
    'image' => null,
    'personal' => 'active',
    'urlbutton' => __('/cordinates'),
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item active" aria-current="page">Roles</li>
@endpush

@section('bodycontent')
<h1>Coordinación</h1>
  <div class="card-deck">
  @forelse($cordinadores as $cordinador)
    <div class="col-md-4 col-sm-6 col-xm-12">
    <div class="card mb-3"> <!-- Borde primario primary danger warning-->
      <div class="card-body text-center"> <!-- Texto primario -->
        <p><img src="{{\Tools\Img\ToServer::getFile($cordinador->user->foto)}}" alt="avatar" class="rounded-circle" style="width: 10rem;"></p>
        <h5 class="card-title">{{$cordinador->user->nombre." ".$cordinador->user->apellidos}}</h5>
        <a class="stretched-link" href="/cordinates/{{$cordinador->id}}" class="card-link">Ver mas...</a>
      </div>
    </div>
    </div>
  @empty
  <div class="col-md-12">
    <a class="col-md-12 btn btn-light btn-lg" href="/cordinates/create/Coordinación" role="button"><i class="fas fa-plus"></i></a>
  </div>
  @endforelse
  </div>

  <hr class="my-4" />
  <h1>Secretaría</h1>
  <div class="card-deck">
    @forelse($secretarios as $secretario)
      <div class="col-md-4 col-sm-6 col-xm-12">
      <div class="card mb-3"> <!-- Borde primario primary danger warning -->
        <div class="card-body text-center"> <!-- Texto primario -->
          <p><img src="{{\Tools\Img\ToServer::getFile($secretario->user->foto)}}" alt="avatar" class="rounded-circle" style="width: 10rem;"></p>
          <h5 class="card-title">{{$secretario->user->nombre." ".$secretario->user->apellidos}}</h5>
          <a class="stretched-link" href="/cordinates/{{$secretario->id}}" class="card-link">Ver mas...</a>
        </div>
      </div>
      </div>
    @empty
    @endforelse
    <div class="col-md-12">
        <a class="col-md-12 btn btn-light btn-lg" href="/cordinates/create/Secretaría" role="button"><i class="fas fa-plus"></i></a>
    </div>
  </div>

  <hr class="my-4" />
  <h1>Bocalía</h1>
  <div class="card-deck">
    @foreach($bocales as $bocal)
      <div class="col-md-4 col-sm-6 col-xm-12">
      <div class="card mb-3"> <!-- Borde primario primary danger warning -->
        <div class="card-body text-center"> <!-- Texto primario -->
          <p><img src="{{\Tools\Img\ToServer::getFile($bocal->user->foto)}}" alt="avatar" class="rounded-circle" style="width: 10rem;"></p>
          <h5 class="card-title">{{$bocal->user->nombre." ".$bocal->user->apellidos}}</h5>
          <a class="stretched-link" href="/cordinates/{{$bocal->id}}" class="card-link">Ver mas...</a>
        </div>
      </div>
      </div>
    @endforeach
    <div class="col-md-12">
        <a class="col-md-12 btn btn-light btn-lg" href="/cordinates/create/Bocalía" role="button"><i class="fas fa-plus"></i></a>
    </div>
  </div>
@endsection