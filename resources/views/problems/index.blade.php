<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>

@extends('layouts.content.default.index',[
    'title' => 'Problemas de la institución',
    'descriptions' => [
      __('Las problemas son inconsistencias encontradas en inmuebles.'),
      __('En este apartado se podrá tener la visualizacion de las estádisticas de los problemas.')
    ],
    'titlebody' => __('Problemas'),
    'image' => null,
    'actividades' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item active" aria-current="page">Problemas</li>
@endpush

@section('bodycontent')
<div class="card-deck">
  @foreach($problems as $problem)
    <div class="col-md-4 col-sm-6 col-xm-12">
      <div class="card @if($problem->commitments->count()) border-warning @else border-danger @endif mb-3 shadow-sm">
        <img class="card-img-top" src="{{\Tools\Img\ToServer::getFile($problem->evidencia)}}" alt="Image placeholder">
        <div class="card-body">
          <h5 class="h2 card-title mb-0">{{substr($problem->question->encabezado, 0, 25)."..."}}</h5>
          <small class="text-muted">{{"En ". $problem->target->subarea->nombre." (".$problem->target->subarea->area->nombre. ') el '. Fecha::texto(Carbon::parse($problem->created_at))}}</small>
          <p class="card-text mt-4">{{substr($problem->descripcion, 0, 50)."..."}}</p>
          @forelse($problem->commitments as $commitment)
              <p class="card-text">Responsable(s):
                <ul>
                  <li>{{$commitment->helper->rol}}</li>
                </ul>
              </p>
              <p class="card-text">Completo: @if($commitment->compliment) <b class="text-success"><i class="fas fa-check"></i> Se ha cumplido.</b> @else <b class="text-danger"><i class="fas fa-times"></i> Aún no se ha cumplido.</b> @endif</p>
              @empty
              <p class="card-text">Responsable(s): <b class="text-danger"><i class="fas fa-times"></i> No se han comprometido a reparar.</b></p>
              @endforelse
          <a class="stretched-link px-0" href="/reviews/{{$problem->id}}" class="card-link">Ver más...</a>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection