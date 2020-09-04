@extends('layouts.content.default.form',[
  'title' => $area->nombre." ".$area->area,
  'titlelist' => 'Acciones',
  'titlebody' => 'Propiedades del área',
  'instalaciones' => 'active',
  'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/areas">Áreas</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$area->nombre." ".$area->area}}</li>
@endpush

@section('bodycontent')
<div class="card-deck">
  @foreach($area->subareas as $subarea)
    <div class="col-md-4 col-sm-6 col-xm-12">
    <div class="card mb-3"> <!-- Borde primario primary danger warning-->
      <div class="card-header">
        <h5 class="card-title">{{$subarea->nombre}}</h5>
      </div>
      <div class="card-body"> <!-- Texto primario -->
        <h6 class="card-subtitle mb-2 text-muted">Area: {{$subarea->area->nombre}}</h6>
        <h6 class="card-subtitle mb-2 text-muted">Tipo: {{$subarea->tipo}}</h6>
        <a class="stretched-link" href="/subareas/{{$subarea->id}}" class="card-link">Ver mas...</a>
      </div>
    </div>
    </div>
  @endforeach
</div>
@endsection

@section('list')
<ol class="list-unstyled">
  <li><a href="/areas"><i class="fas fa-home"></i> Areas de las instalaciones</a></li>
  @if(Auth::user()->admin)
  <li><a href="/areas/create"><i class="fas fa-plus"></i> Agregar area</a></li>
  <li><a href="/subareas/create/{{$area->id}}"><i class="fas fa-plus"></i> Agregar subárea</a></li>
  <li><a href="/areas/{{$area->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar area</a></li>
  <li><a href="#" onclick="
  let result =confirm('Esta seguro de eliminar el area?');
  if(result){
    event.preventDefault();
    document.getElementById('delete-form').submit();
  }
  "><i class="fas fa-trash-alt"></i> Eliminar area</a></li>
  <form action="{{ route('areas.destroy',[$area->id]) }}" id="delete-form" method="post" style="display:none">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="delete">
  </form>
  @endif
</ol>
@endsection