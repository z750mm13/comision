@extends('layouts.content.default.form',[
  'title' => 'Proyección del año '. $goal->anio,
  'titlelist' => 'Acciones',
  'titlebody' => 'Propiedades de la meta',
  'descriptions' => [
    'Año de aplicación: '. $goal->anio,
    'Porcentaje estomado: '. $goal->porcentaje.'%'
  ],
  'actividades' => 'active',
  'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/goals">Metas</a></li>
<li class="breadcrumb-item active" aria-current="page">Meta del {{$goal->anio}}</li>
@endpush

@section('list')
<ol class="list-unstyled">
  <li><a href="/goals"><i class="fas fa-home"></i> Todas las metas</a></li>
  @if(Auth::user()->admin)
  <li><a href="/goals/{{$goal->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar</a></li>
  <li><a href="#" onclick="
  let result =confirm('Esta seguro de eliminar la meta?');
  if(result){
    event.preventDefault();
    document.getElementById('delete-form').submit();
  }
  "><i class="fas fa-trash-alt"></i> Eliminar meta</a></li>
  <form action="{{ route('goals.destroy',[$goal->id]) }}" id="delete-form" method="post" style="display:none">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="delete">
  </form>
  @endif
</ol>
@endsection