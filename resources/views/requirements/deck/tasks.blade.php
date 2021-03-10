@foreach($requirement->tasks as $task)
  <div class="col-sm-6 col-xm-12">
    <div class="card mb-3"> <!-- Borde primario primary danger warning-->
      @if(!$task->programable)
      <img class="card-img-top" src="{{\Tools\Img\ToServer::getFile($task->evidencia)}}" alt="Image placeholder">
      @else
      <div class="card-header">
        <h5 class="card-title">{{ substr($task->descripcion, 0, 40)."..." }}</h5>
      </div>
      @endif
      <div class="card-body"> <!-- Texto primario -->
        <h6 class="card-subtitle mb-1 text-muted">Descripcion de la norma</h6>
        <p class="card-text">Norma: {{ substr($task->requirement->norm->codigo.' Requisito: '.$task->requirement->numero, 0, 100)."..." }}</p>
        @if($task->programable)
        <p class="card-text">Fecha inicio:<br>{{Fecha::texto(Carbon::parse($task->inicio))}}.</p>
        <p class="card-text">Fecha fin:<br>{{Fecha::texto(Carbon::parse($task->fin))}}.</p>
        @else
        <p class="card-text">Descripcion: {{ substr($task->descripcion, 0, 100)."..." }}</p>
        @endif
        <p class="lead">Estado: 
        @if($task->cumplida)
        <b class="text-success"> <i class="fas fa-check"></i> Se ha cumplido.</b>
        </p>
        <p class="lead">
          Cumplido por: <spam class="text-body">{{$task->user->rol??$task->user->nombre.' '.$task->user->apellidos}}</spam>
        @else
        <b class="text-danger"><i class="fas fa-times"></i> No se ha cumplido.</b>
        @endif
        </p>
        <a class="stretched-link" href="/tasks/{{$task->id}}" class="card-link">Ver mas...</a>
      </div>
    </div>
    </div>
  @endforeach