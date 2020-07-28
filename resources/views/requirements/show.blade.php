@extends('layouts.content.nobody.show',[
  'bg' => '../../argon/img/theme/requirements.jpg',
  'title' => 'Requisito '.$requirement->numero,
  'titlelist' => 'Acciones',
  'descriptions' => [$requirement->descripcion, 'Tipo: '. $requirement->tipo, 'Norma: '. $requirement->norm->codigo],
  'normativa' => 'active'
])

@section('list')
<ol class="list-unstyled">
  <li><a href="/requirements"><i class="fas fa-home"></i> Todos los requisitos</a></li>
  @if(Auth::user()->admin)
  <li><a href="/requirements/create"><i class="fas fa-plus"></i> Agregar requisito</a></li>
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