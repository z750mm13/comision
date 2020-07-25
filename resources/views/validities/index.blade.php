@extends('layouts.app')

@section('title', 'Programación de evaluaciones')

@section('content')
<?php
  use Carbon\Carbon;
  use Tools\Utils\Fecha;
?>

<div class="jumbotron">
  <h1 class="display-4">Programación de evaluaciones</h1>
  <p class="lead">Las evaluaciones se podrán programar para su realización.</p>
  <hr class="my-4">
  <p>En este apartado podrá programar las evaluaciones que se van a realizar durante el ciclo en las distintas áreas de la institución.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="/validities/create" role="button">Programar evaluaciones</a>
  </p>
</div>

<div class="container-fluid">
  <div class="row">
    <aside>
      <div class="p-4">
        <h4 class="font-italic">Historial de evaluaciones</h4>
        <ol class="list-unstyled">
        <li><a href="/validities/"><i class="fas fa-calendar-day"></i> Recientes</a></li>
        <li><a href="/validities/time/proximo"><i class="fas fa-paste"></i> Próximas</a></li>
        <li><a href="/validities/time/realizados"><i class="fas fa-clipboard-check"></i> Realizadas</a></li>
      </ol>
      </div>
    </aside>
    <div class="col-md-8 col-sm-12">
      <h1>
        Evaluaciones 
        @if($tiempo)
          @if($tiempo=="proximo")
          próximas
          @elseif($tiempo=="realizados")
          realizadas
          @endif
        @endif
      </h1>
      @foreach ($validities as $validity)
        <div class="col-12">
        <div class="card mb-3"> <!-- Borde primario primary danger warning-->
          <div class="card-body"> <!-- Texto primario -->
            <div class="row justify-content-between">
              <div class="col-md-4 col-xm-12">
                <p class="card-text">Fecha inicio:<br>{{Fecha::texto(Carbon::parse($validity->inicio))}}.</p>
                <p class="card-text">Fecha fin:<br>{{Fecha::texto(Carbon::parse($validity->fin))}}.</p>
              </div>
              <div class="col-md-3 col-xm-12 row align-items-center">
                <a href="/validities/{{$validity->id}}" class="btn btn-primary">Ver detalles</a>
              </div>
            </div>
          </div>
        </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection