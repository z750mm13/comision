@extends('layouts.app')

@section('title', 'Problemas')

@section('content')

<div class="jumbotron">
  <h1 class="display-4">Problemas de la institución</h1>
  <p class="lead">Las problemas son inconsistencias encontradas en inmuebles.</p>
  <hr class="my-4">
  <p>En este apartado se podrá tener la visualizacion de las estádisticas de los problemas.</p>
</div>

<div class="container">
<div class="card-deck">
@foreach($problems as $problem)
  <div class="col-md-4 col-sm-6 col-xm-12">
    <div class="card @if($problem->commitments->count()) border-warning @else border-danger @endif mb-3 shadow-sm">
      <img src="{{\Tools\Img\ToServer::getFile($problem->evidencia)}}" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">Pregunta: {{substr($problem->question->encabezado, 0, 50)."..."}}</h5>
        <h6 class="card-title">Detalles: {{substr($problem->descripcion, 0, 50)."..."}}</h6>
        @forelse($problem->commitments as $commitment)
            <h6 class="card-title">Responsable(s):
              <ul>
                <li>{{$commitment->helper->rol}}</li>
              </ul>
            </h6>
            <h6 class="card-title">Completo: @if($commitment->compliment) <b class="text-success"><i class="fas fa-check"></i> Se ha cumplido.</b> @else <b class="text-danger"><i class="fas fa-times"></i> Aún no se ha cumplido.</b> @endif</h6>
            @empty
            <h6 class="card-title">Responsable(s): <b class="text-danger"><i class="fas fa-times"></i> No se han comprometido a reparar.</b></h6>
            @endforelse
        <a class="stretched-link" href="/reviews/{{$problem->id}}" class="card-link">Ver más...</a>
      </div>
    </div>
  </div>
@endforeach
</div>
</div>

@endsection