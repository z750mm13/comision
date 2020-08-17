@extends('layouts.content.default.form',[
  'title' => $norm->codigo,
  'titlelist' => 'Acciones',
  'titlebody' => 'Propiedades de la norma',
  'descriptions' => [$norm->titulo, 'Direccion: '. $norm->direccion, 'Asignación: '. '60'. '%'],
  'normativa' => 'active'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/norms">Normas</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$norm->codigo}}</li>
@endpush

@section('bodycontent')
<div class="card-deck">
  @foreach($norm->requirements as $requirement)
    <div class="col-md-4 col-sm-6 col-xm-12">
    <div class="card border-primary mb-3"> <!-- Borde primario -->
      <div class="card-header">{{$requirement->numero}}</div>
      <div class="card-body text-primary"> <!-- Texto primario -->
        <h5 class="card-title">{{substr($requirement->descripcion, 0, 37)."..."}}</h5>
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