@extends('layouts.content.default.index',[
    'title' => 'Supervisores de área',
    'descriptions' => [
      __('Los supervisores son los encargados de piso. Encargados de realizár los recorridos y resolver los cuestionarios propuestos a fin de cada area para su evaluación.'),
      __('En este apartado se podrá tener el control de las asignaciónes de area de cada persona que previamente tenga ya un rol asignado. Para asignar un área a una persona presione el botón superior o el botón + de cada usuario.')
    ],
    'titlebody' => __('Supervisores'),
    'image' => null,
    'button' => __('Asignar área a responsable'),
    'urlbutton' => __('/guards'),
    'instalaciones' => 'active'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item active" aria-current="page">Supervisores</li>
@endpush

@section('bodycontent')
@foreach($users as $user)
<div class="col-md-12">
<h1>{{$user->nombre ." ". $user->apellidos}}</h1>
</div>
<div class="card-deck">
  @foreach ($user->guards as $guard)
  <div class="col-md-4 col-sm-6 col-xm-12">
  <div class="card mb-3"> <!-- Borde primario primary danger warning-->
    <div class="card-header">
      <h5 class="card-title"><a class="stretched-link" href="/guards/{{$guard->id}}" >{{$guard->area->nombre}}</a></h5>
    </div>
    <div class="card-body text-center"> <!-- Texto primario -->
      <h6 class="card-subtitle mb-2 text-muted">Area: {{$guard->area->area}}</h6>
    </div>
  </div>
  </div>
  @endforeach
</div>
<div class="col-md-12">
<a class="col-md-12 btn btn-light btn-lg" href="/guards/create/{{$user->cordinates->first()->id}}" role="button"><i class="fas fa-plus"></i></a>
</div>
@endforeach
@endsection