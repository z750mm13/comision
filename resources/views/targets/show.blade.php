@extends('layouts.content.default.form',[
  'title' => $target->subarea->nombre." [".$target->subarea->area->nombre." ".$target->subarea->area->area."]",
  'descriptions' => [
    'Norma: '. $target->questionnaire->requirement->norm->codigo,
    'Descripcion: '. $target->questionnaire->descripcion,
    'Area que aplica: '. $target->subarea->nombre
  ],
  'titlelist' => 'Acciones',
  'titlebody' => 'Propiedades del área',
  'instalaciones' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/targets">Tipos</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$target->subarea->nombre." [".$target->subarea->area->nombre." ".$target->subarea->area->area."]"}}</li>
@endpush

<?php
  use Carbon\Carbon;
  use Tools\Utils\Fecha;
?>

@section('bodycontent')
<div class="card-deck">
  @foreach ($validities as $validity)
  <div class="col-md-4 col-sm-6 col-xm-12">
  <div class="card mb-3"> <!-- Borde primario primary danger warning-->
    <div class="card-header">
      <h5 class="card-title">{{Fecha::texto(Carbon::parse($validity->inicio))}}</h5>
    </div>
    <div class="card-body"> <!-- Texto primario -->
      <h6 class="card-subtitle mb-2">Descripcion de la evalución</h6>
      <p class="card-text">Fecha de inicio: {{Fecha::texto(Carbon::parse($validity->inicio))}}</p>
      <p class="card-text">Fecha final: {{Fecha::texto(Carbon::parse($validity->fin))}}</p>
      <a class="stretched-link" href="/problems/{{$validity->id}}/subarea/{{$target->subarea->id}}">Ver detalles</a>
    </div>
  </div>
  </div>
  @endforeach
</div>
@endsection

@section('list')
<ol class="list-unstyled">
  <li><a href="/targets"><i class="fas fa-home"></i> Ver requisitos de las areas</a></li>
  <li><a href="/targets/create"><i class="fas fa-plus"></i> Asignar requisito a zona</a></li>
  <li><a href="/targets/{{$target->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar requisito de area</a></li>
  <li><a href="#" onclick="
  let result =confirm('Esta seguro de eliminar al el requisito?');
  if(result){
    event.preventDefault();
    document.getElementById('delete-form').submit();
  }
  "><i class="fas fa-trash-alt"></i> Eliminar requisito</a></li>
  <form action="{{ route('targets.destroy',[$target->id]) }}" id="delete-form" method="post" style="display:none">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="delete">
  </form>
</ol>
@endsection