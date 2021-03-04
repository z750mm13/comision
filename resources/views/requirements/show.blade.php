@extends('layouts.content.default.form',[
  'title' => 'Requisito '. $requirement->numero,
  'titlelist' => 'Acciones',
  'descriptions' => [$requirement->descripcion, 'Tipo: '. $requirement->tipo, 'Norma: '. $requirement->norm->codigo],
  'normativa' => 'active',
  'titlebody' => 'Propiedades del requisito '. $requirement->numero,
  'nodelete' => 'no'
])

@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/requirements">Requisitos</a></li>
<li class="breadcrumb-item active" aria-current="page">{{'Requisito '.$requirement->numero}}</li>
@endpush

@section('precardbody')
<ul class="list-group list-group-flush">
  <li class="list-group-item">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link active" href="{{route('requirements.show',[$requirement->id])}}">Cumplimientos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/requirements/questionnaires">Cuestionarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/requirements/activities">Actividades</a>
      </li>
    </ul>
  </li>
</ul>
@endsection

@section('bodycontent')
<div class="card-deck">
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
</div>
@endsection

@section('list')
<ol class="list-unstyled">
  <li><a href="/requirements"><i class="fas fa-home"></i> Todos los requisitos</a></li>
  @if(Auth::user()->admin)
  <li><a href="/requirements/create"><i class="fas fa-plus"></i> Agregar requisito</a></li>
  <li><a href="/tasks/create/{{$requirement->id}}"><i class="fas fa-plus"></i> Crear cumplimiento</a></li>
  <li><a href="/questionnaires/create/{{$requirement->id}}"><i class="fas fa-plus"></i> Crear cuestionario</a></li>
  <li><a href="/activities/create/{{$requirement->id}}"><i class="fas fa-plus"></i> Crear actividad</a></li>
  <li><a href="/requirements/{{$requirement->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar requisto</a></li>
  <li><a href="#" onclick="
  let result =confirm('Esta seguro de eliminar el requisito?');
  if(result){
    event.preventDefault();
    document.getElementById('delete-form').submit();
  }
  "><i class="fas fa-trash-alt"></i> Eliminar requisito</a></li>
  <form action="{{ route('requirements.destroy',[$requirement->id]) }}" id="delete-form" method="post" style="display:none">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="DELETE">
  </form>
  @endif
</ol>
@endsection