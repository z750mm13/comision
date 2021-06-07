<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>

@forelse ($validities as $validity)
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
@empty
  <div class="card mb-3"> <!-- Borde primario primary danger warning -->
    <div class="card-body text-center"> <!-- Texto primario -->
      <h4>Aún no hay evaluaciones realizadas</h4>
    </div>
  </div>
@endforelse