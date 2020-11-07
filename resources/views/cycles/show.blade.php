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
if($cycle->inicio > $hoy)
  $estado = 'Porxima a realizar';
elseif($cycle->fin < $hoy)
  $estado = 'Finalizado';
else
  $estado = 'En curso';
?>
@extends('layouts.content.default.form',[
  'title' => 'Ciclo '. $cycle->codigo,
  'descriptions' => [
    'Feha de inicio el '. Fecha::texto(Carbon::parse($cycle->inicio)),
    'Ultimo día del ciclo '. Fecha::texto(Carbon::parse($cycle->fin)),
    'Estado de evaluación: '. $estado,
    'Descripción: '. $cycle->descripcion
  ],
  'titlelist' => 'Acciones',
  'titlebody' => 'Propiedades del ciclo',
  'actividades' => 'active',
  'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/cycles">Ciclos</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$cycle->codigo}}</li>
@endpush

@section('list')
<ol class="list-unstyled">
  <li><a href="/cycles"><i class="fas fa-home"></i> Ciclos programados</a></li>
  <li><a href="/cycles/create"><i class="fas fa-plus"></i> Progrmar ciclo</a></li>
  <li><a href="/cycles/{{$cycle->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar</a></li>
  <li><a href="#" onclick="
  let result =confirm('Esta seguro de eliminar este ciclo?');
  if(result){
    event.preventDefault();
    document.getElementById('delete-form').submit();
  }
  "><i class="fas fa-trash-alt"></i> Eliminar</a></li>
  <form action="{{ route('cycles.destroy',[$cycle->id]) }}" id="delete-form" method="post" style="display:none">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="delete">
  </form>
</ol>
@endsection