<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>
<div class="card-deck">
  @forelse($commitments as $commitment)
  <div class="col-md-4 col-sm-6 col-xm-12">
  <div class="card border-primary mb-3"> <!-- Borde primario -->
    <div class="card-header">{{$commitment->user->nombre. ' ('. $commitment->user->rol. ')'}}</div>
    <div class="card-body text-primary"> <!-- Texto primario -->
      <h6 class="card-subtitle mb-2 text-muted">Descripcion del compromiso</h6>
      <p class="card-text">Fecha de observación:<br>{{Fecha::texto(Carbon::parse($commitment->review->created_at))}}</p>
      <p class="card-text">Fecha de cumplimiento:<br>{{Fecha::texto(Carbon::parse($commitment->fecha_cumplimiento))}}</p>
      <p class="card-text">Area:<br>{{
        $commitment->review->target->subarea->nombre." [".
        $commitment->review->target->subarea->area->nombre."/".$commitment->review->target->subarea->area->area."]"
      }}</p>
      <p class="card-text">Accion a realizar:<br>{{$commitment->accion}}</p>
      <p class="card-text">Estado del compromiso:<br>{{$commitment->compliment? 'S':'No s'}}e ha cumplido</p>
      <a class="stretched-link" href="/commitments/{{$commitment->id}}" class="card-link">Ver mas...</a>
    </div>
  </div>
  </div>
  @empty
  <div class="card mb-3"> <!-- Borde primario primary danger warning -->
    <div class="card-body text-center"> <!-- Texto primario -->
      <h4>No existen compromisos</h4>
    </div>
  </div>
  @endforelse
</div>