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
if($validity->inicio > $hoy)
  $estado = 'Porxima a realizar';
elseif($validity->fin < $hoy)
  $estado = 'Realizada';
else
  $estado = 'En curso';
?>
@extends('layouts.content.default.form',[
  'title' => 'Evaluación programada',
  'descriptions' => [
    'Feha de inicio programada '. Fecha::texto(Carbon::parse($validity->inicio)),
    'Ultimo día para realizar evaluación '. Fecha::texto(Carbon::parse($validity->fin)),
    'Estado de evaluación: '. $estado
  ],
  'titlelist' => 'Acciones',
  'titlebody' => 'Propiedades del la evaluación',
  'actividades' => 'active'
])

@section('bodycontent')
<div class="table-responsive">
  <table class="table table-hover table-striped table-sm table-bordered">
    <tr>
       <th class="text-center" colspan="3">Área</th>
       <th class="text-center" colspan="3">Subárea</th>
    </tr>
    <tr>
       <td>Nombre</td>
       <td>Planta</td>
       <td>Realizados</td>
       <td>Nombre</td>
       <td>Cuestionarios realizados</td>
       <td>Problemas</td>
    </tr>
    @foreach($areas as $area)
    <tr>
      <?php
      $resolved = sizeof(Reviews::resolvedQuestionsArea($area,$validity));
      $size = sizeof($area->subareas);
      $paso = 1;
      if($size == 0){
        $size = 1;
      }
      ?>
      <td class="align-middle" rowspan="{{$size}}">{{$area->nombre}}</td>
      <td class="align-middle" rowspan="{{$size}}">{{$area->area}}</td>
      <td class="align-middle" rowspan="{{$size}}">{{$resolved}}</td>
      @if($area->subareas->first())
        <td>{{$area->subareas->first()->nombre}}</td>
        <td>{{sizeof(Reviews::resolvedQuestions($area->subareas->first(), $validity))}}</td>
        <td><a href="/problems/{{$validity->id}}/subarea/{{$area->subareas->first()->id}}">{{Reviews::problems($area->subareas->first(), $validity)}}</a></td>
      @else
        <td></td>
        <td></td>
        <td></td>
      @endif
    </tr>
    @foreach ($area->subareas as $subarea)
    @if(!$paso)
    <tr>
      <td>{{$subarea->nombre}}</td>
      <td>{{sizeof(Reviews::resolvedQuestions($subarea, $validity))}}</td>
      <td><a href="/problems/{{$validity->id}}/subarea/{{$subarea->id}}">{{Reviews::problems($subarea, $validity)}}</a></td>
    </tr>
    @else
    <?php $paso = 0; ?>
    @endif
    @endforeach
    @endforeach
 </table>
</div>
@endsection

@section('list')
<ol class="list-unstyled">
  <li><a href="/validities"><i class="fas fa-home"></i> Evaluaciones programadas</a></li>
  <li><a href="/validities/create"><i class="fas fa-plus"></i> Progrmar evaluación</a></li>
  <li><a href="/validities/{{$validity->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar</a></li>
  <li><a href="#" onclick="
  let result =confirm('Esta seguro de eliminar la programación de evaluación?');
  if(result){
    event.preventDefault();
    document.getElementById('delete-form').submit();
  }
  "><i class="fas fa-trash-alt"></i> Eliminar</a></li>
  <form action="{{ route('validities.destroy',[$validity->id]) }}" id="delete-form" method="post" style="display:none">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="delete">
  </form>
</ol>
@endsection