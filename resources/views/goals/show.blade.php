@extends('layouts.content.default.form',[
  'title' => 'Requisito '. $goal->requirement->numero,
  'titlelist' => 'Acciones',
  'titlebody' => 'Propiedades de la meta',
  'descriptions' => [
    'Ciclo de aplicación: '. $goal->cycle->codigo,
    'Norma: '. $goal->requirement->norm->codigo,
    'Requisito: '. $goal->requirement->numero
  ],
  'normativa' => 'active',
  'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/goals?cycle_id={{$cycle_id}}">Metas</a></li>
<li class="breadcrumb-item active" aria-current="page">Meta {{$goal->id}}</li>
@endpush

@section('list')
<ol class="list-unstyled">
  <li><a href="/goals?cycle_id={{$cycle_id}}"><i class="fas fa-home"></i> Todas las metas</a></li>
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