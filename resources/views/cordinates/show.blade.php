@extends('layouts.content.nobody.show',[
  'bg' => '../../argon/img/theme/cordinates.jpg',
  'title' => $cordinate->user->nombre." ".$cordinate->user->apellidos,
  'description' => 'Rol que desempeña: '. $cordinate->rol,
  'image' => \Tools\Img\ToServer::getFile($cordinate->user->foto),
  'titlelist' => 'Acciones'
])

@section('list')
<ol class="list-unstyled">
  <li><a href="/cordinates"><i class="fas fa-home"></i> Responsables de la comisión</a></li>
  <li><a href="/cordinates/{{$cordinate->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar Responsable</a></li>
  <li><a href="#" onclick="
  let result =confirm('¿Esta seguro de eliminar a {{$cordinate->user->nombre. ' '. $cordinate->user->apellidos }} de la {{$cordinate->rol}}?');
  if(result){
    event.preventDefault();
    document.getElementById('delete-form').submit();
  }
  "><i class="fas fa-trash-alt"></i> Eliminar Responsable</a></li>
  <form action="{{ route('cordinates.destroy',[$cordinate->id]) }}" id="delete-form" method="post" style="display:none">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="delete">
  </form>
</ol>
@endsection