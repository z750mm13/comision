<?php 
use Carbon\Carbon;
use Tools\Query\Reviews;
?>

<?php 
$hoy = Carbon::now()->toDateString();
?>
@extends('layouts.content.default.form',[
  'title' => 'Problemas de '. $subarea->area->nombre.'-'.$subarea->nombre,
  'titlelist' => 'Acciones',
  'titlebody' => 'Problemas',
  'actividades' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/problems">Problemas</a></li>
<li class="breadcrumb-item active" aria-current="page">{{'Problemas de '. $subarea->area->nombre.'-'.$subarea->nombre}}</li>
@endpush

@section('bodycontent')
<div class="container">
  <p class="lead"><b>Feha de inicio programada</b><br>{{Carbon::parse($validity->inicio)->format('d/m/Y')}}</p>
  <p class="lead"><b>Ultimo día para realizar evaluación</b><br>{{Carbon::parse($validity->fin)->format('d/m/Y')}}</p>
  <p class="lead"><b>Estado de evaluación: </b>
  @if($validity->inicio > $hoy)
    <a href="/validities/{{$validity->id}}">Porxima a realizar</a>
  @elseif($validity->fin < $hoy)
    <a href="/validities/{{$validity->id}}">Realizada</a>
  @else
    <a href="/validities/{{$validity->id}}">En curso</a>
  @endif
</p>
</div>
<hr class="my-3">
<div class="card-deck">
  @foreach($problems as $problem)
    <div class="col-md-4 col-sm-6 col-xm-12">
    <div class="card @if( {{-- Si se ha cumplido --}}
      $problem->hascompliment
    ) border-success @elseif( {{-- Si se ha prometido pero no cumplido --}}
      $problem->hascommitment
    ) border-warning
    @else border-danger @endif mb-3"> <!-- Borde primario -->
      <img src="{{\Tools\Img\ToServer::getFile($problem->evidencia)}}" class="card-img-top">
      <div class="card-body"> <!-- Texto primario -->
        <h5 class="card-title">Pregunta: {{substr($problem->question->encabezado, 0, 50)."..."}}</h5>
        <h6 class="card-title">Detalles: {{substr($problem->descripcion, 0, 50)."..."}}</h6>
        @forelse($problem->commitments as $commitment)
        <h6 class="card-title">Responsable(s):
          <ul>
            <li>{{$commitment->user->rol}}</li>
          </ul>
        </h6>
        <h6 class="card-title">Completo: @if($commitment->compliment) <b class="text-success"><i class="fas fa-check"></i> Se ha cumplido.</b> @else <b class="text-danger"><i class="fas fa-times"></i> Aún no se ha cumplido.</b> @endif</h6>
        @empty
        <h6 class="card-title">Responsable(s): <b class="text-danger"><i class="fas fa-times"></i> No se han comprometido a reparar.</b></h6>
        @endforelse
        <a class="stretched-link" href="/reviews/{{$problem->id}}" class="card-link">Ver mas...</a>
      </div>
    </div>
    </div>
  @endforeach
</div>
@endsection

@section('list')
<ol class="list-unstyled">
  <li><a href="/problems"><i class="fas fa-home"></i> Todos los problemas</a></li>
</ol>
@endsection