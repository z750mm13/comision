@extends('layouts.content.nobody.show',[
  'title' => $cordinate->user->nombre." ".$cordinate->user->apellidos,
  'descriptions' => ['Rol que desempeña: '. $cordinate->rol],
  'titlelist' => 'Acciones',
  'personal' => 'active',
  'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/cordinates">Roles</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$cordinate->user->nombre." ".$cordinate->user->apellidos}}</li>
@endpush

@push('aditional')
<div class="col-md-2" id="galley">
  <img class="rounded" data-original="{{\Tools\Img\ToServer::getFile($cordinate->user->foto)}}" src="{{\Tools\Img\ToServer::getFile($cordinate->user->foto)}}" alt="foto" style="width: 10rem;">
</div>
@endpush

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

@push('css')
<link  href="{{ asset('assets') }}/vendor/viewerjs/viewer.css" rel="stylesheet">
@endpush
@push('js')
<script type="module" src="{{ asset('assets') }}/vendor/viewerjs/viewer.js"></script>
<script>
window.addEventListener('DOMContentLoaded', function () {
      var galley = document.getElementById('galley');
      var viewer = new Viewer(galley, {
        url: 'data-original',
        title: function (image) {
          return image.alt + ' (' + (this.index + 1) + '/' + this.length + ')';
        },
      });
    });
</script>
@endpush