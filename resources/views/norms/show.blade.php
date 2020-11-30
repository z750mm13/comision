@extends('layouts.content.default.form',[
  'title' => $norm->codigo,
  'titlelist' => 'Acciones',
  'titlebody' => 'Propiedades de la norma',
  'descriptions' => [$norm->titulo, 'Direccion: '. $norm->direccion],
  'normativa' => 'active',
  'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/norms">Normas</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$norm->codigo}}</li>
@endpush

@section('bodycontent')
<div class="card-deck">
  @foreach($requirements as $requirement)
    <div class="col-md-4 col-sm-6 col-xm-12">
    <div class="card mb-3"> <!-- Borde primario -->
      <div class="card-body"> <!-- Texto primario -->
        <h3 class="card-title mb-3">Requisito {{$requirement->numero}}</h3>
        <p class="card-text mb-4">{{substr($requirement->descripcion, 0, 37)."..."}}</p>
        @if($requirement->questionn)
        <p class="card-text">Estado: <b class="text-success"> <i class="fas fa-check"></i> Actualmente está en uso.</b></p>
        @else
        <p class="card-text">Estado: <b class="text-danger"><i class="fas fa-times"></i> Actualmente no está en uso.</b></p>
        @endif
        <a class="stretched-link" href="/requirements/{{$requirement->id}}" class="card-link">Ver mas...</a>
      </div>
    </div>
    </div>
  @endforeach
</div>
@endsection

@section('list')
<ol class="list-unstyled">
  <li><a href="/norms"><i class="fas fa-home"></i> Todas las normas</a></li>
  @if(Auth::user()->admin)
  <li><a href="/norms/create"><i class="fas fa-plus"></i> Agregar norma</a></li>
  <li><a href="/requirements/create/{{$norm->id}}"><i class="fas fa-plus"></i> Agregar requisito</a></li>
  <li><a href="/norms/{{$norm->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar</a></li>
  <li><a href="#" onclick="
  let result =confirm('Esta seguro de eliminar la norma?');
  if(result){
    event.preventDefault();
    document.getElementById('delete-form').submit();
  }
  "><i class="fas fa-trash-alt"></i> Eliminar norma</a></li>
  <form action="{{ route('norms.destroy',[$norm->id]) }}" id="delete-form" method="post" style="display:none">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="delete">
  </form>
  @endif
</ol>
@endsection