@extends('layouts.content.default.form',[
  'title' => $matrix->subarea->nombre." [".$matrix->subarea->area->nombre." ".$matrix->subarea->area->area."]",
  'descriptions' => [
    'Descripcion: '. $matrix->activity->descripcion,
    'Area que aplica: '. $matrix->subarea->nombre
  ],
  'titlelist' => 'Acciones',
  'titlebody' => 'Actividades del área',
  'instalaciones' => 'active',
  'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/arrays">Actividades</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$matrix->subarea->nombre." [".$matrix->subarea->area->nombre." ".$matrix->subarea->area->area."]"}}</li>
@endpush

<?php
  use Carbon\Carbon;
  use Tools\Utils\Fecha;
?>

@section('bodycontent')
<div class="card-deck">
  @foreach ($evaluations as $evaluation)
  <div class="col-md-4 col-sm-6 col-xm-12">
  <div class="card mb-3"> <!-- Borde primario primary danger warning-->
    <div class="card-header">
      <h5 class="card-title">{{Fecha::texto(Carbon::parse($evaluation->inicio))}}</h5>
    </div>
    <div class="card-body"> <!-- Texto primario -->
      <h6 class="card-subtitle mb-2">Descripcion de la evalución</h6>
      <p class="card-text">Fecha de inicio: {{Fecha::texto(Carbon::parse($evaluation->inicio))}}</p>
      <p class="card-text">Fecha final: {{Fecha::texto(Carbon::parse($evaluation->fin))}}</p>
      <p class="card-text">{{ $evaluation->descripcion }}</p>
      <a class="stretched-link" href="/problems/{{$evaluation->id}}/subarea/{{$matrix->subarea->id}}">Ver detalles</a>
    </div>
  </div>
  </div>
  @endforeach
</div>
@endsection

@section('list')
<ol class="list-unstyled">
  <li><a href="/arrays"><i class="fas fa-home"></i> Ver actividades de las areas</a></li>
  <li><a href="/arrays/create"><i class="fas fa-plus"></i> Asignar actividad a zona</a></li>
  <li><a href="/arrays/{{$matrix->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar actividad de area</a></li>
  <li><a href="#" onclick="
  let result =confirm('Esta seguro de eliminar al el actividad?');
  if(result){
    event.preventDefault();
    document.getElementById('delete-form').submit();
  }
  "><i class="fas fa-trash-alt"></i> Eliminar actividad</a></li>
  <form action="{{ route('arrays.destroy',[$matrix->id]) }}" id="delete-form" method="post" style="display:none">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="delete">
  </form>
</ol>
@endsection