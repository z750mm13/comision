@extends('layouts.content.default.index',[
    'title' => 'Metas',
    'descriptions' => [
      __('Las metas del ciclo se mostrarán a continuación.'),
      __('En este apartado se podrá tener el control de las metas. Si desea agregar una nueva presione el botón superior.')
    ],
    'titlebody' => __('Metas'),
    'image' => null,
    'button' => __('Agregar meta'),
    'urlbutton' => __('/goals'),
    'actividades' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item active" aria-current="page">Metas</li>
@endpush

@section('bodycontent')
<div class="card-deck">
  @foreach($goals as $goal)
  <div class="col-md-4 col-sm-6 col-xm-12">
  <div class="card mb-3"> <!-- Borde primario primary danger warning-->
    <div class="card-header">Año {{ $goal->anio }}</div>
    <div class="card-body"> <!-- Texto primario -->
      <h6 class="card-subtitle mb-1 text-muted">Descripcion de la meta</h6>
      <p class="card-text">Porcentaje proyectado: {{ $goal->porcentaje."%" }}</p>
      <p class="card-text">Año aplicable: {{ $goal->anio }}</p>
      <a class="stretched-link" href="/goals/{{$goal->id}}" class="card-link">Ver mas...</a>
    </div>
  </div>
  </div>
  @endforeach
</div>
@endsection