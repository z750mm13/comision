<?php 
use Carbon\Carbon;
use Tools\Query\Reviews;
use Tools\Utils\Fecha;
?>
<?php 
$hoy = Carbon::now()->toDateString();
?>

<?php 
$estado = null; 
if($evaluation->inicio > $hoy)
  $estado = 'Porxima a realizar';
elseif($evaluation->fin < $hoy)
  $estado = 'Realizada';
else
  $estado = 'En curso';
?>
@extends('layouts.content.default.form',[
  'title' => 'Evaluación de riesgos del '. Fecha::texto(Carbon::parse($evaluation->inicio)),
  'descriptions' => [
    'Feha de inicio el '. Fecha::texto(Carbon::parse($evaluation->inicio)),
    'Ultimo día para realizar evaluación '. Fecha::texto(Carbon::parse($evaluation->fin)),
    'Estado de evaluación: '. $estado,
    'Descripción:'. $evaluation->descripcion
  ],
  'titlelist' => 'Acciones',
  'titlebody' => 'Propiedades de la evaluación',
  'actividades' => 'active',
  'matriz' => 'active',
  'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/evaluations">Evaluaciones</a></li>
<li class="breadcrumb-item active" aria-current="page">{{'Evaluación del '. Fecha::texto(Carbon::parse($evaluation->inicio))}}</li>
@endpush

@section('list')
<ol class="list-unstyled">
  <li><a href="/evaluations"><i class="fas fa-home"></i> Evaluaciones programadas</a></li>
  <li><a href="/evaluations/create"><i class="fas fa-plus"></i> Progrmar evaluación</a></li>
  <li><a href="/evaluations/{{$evaluation->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar</a></li>
  <li><a href="#" onclick="
  let result =confirm('Esta seguro de eliminar esta evaluación?');
  if(result){
    event.preventDefault();
    document.getElementById('delete-form').submit();
  }
  "><i class="fas fa-trash-alt"></i> Eliminar</a></li>
  <form action="{{ route('evaluations.destroy',[$evaluation->id]) }}" id="delete-form" method="post" style="display:none">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="delete">
  </form>
</ol>
@endsection