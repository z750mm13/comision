@extends('layouts.content.default.form',[
  'title' => $user->nombre." ".$user->apellidos,
  'descriptions' => ['Rol '.$user->rol,'Correo: '.$user->email],
  'titlelist' => 'Acciones',
  'titlebody' => 'Propiedades del usuario',
  'personal' => 'active',
  'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/helpers">Personal de apoyo</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$user->nombre." ".$user->apellidos}}</li>
@endpush

@push('aditional')
<div class="col-md-2" id="galley">
  <img class="rounded" data-original="{{\Tools\Img\ToServer::getFile($user->foto)}}" src="{{\Tools\Img\ToServer::getFile($user->foto)}}" alt="evidencia" style="width: 10rem;">
</div>
@endpush

@section('bodycontent')
@if(Auth::user()->admin & Auth::user()->id != $user->id)
  @if(!$user->rol)
  <form class="form-group form-inline" action="{{route('helpers.setrol',[$user->id])}}" method="post">
    @csrf
    @method('post')
    <label class="my-1 mr-2 col" for="rol">Rol</label>
    <select name="rol" class="custom-select my-1 mr-sm-2 col-9" id="rol">
      <option selected value="null">Selecciona el rol</option>
      @foreach($roles as $rol)
      <option value="{{$rol->rol}}">{{$rol->rol}}</option>
      @endforeach
    </select>
    <button type="submit" class="btn btn-primary my-1 col">Asignar</button>
  </form>
  @endif
  @if($user->active==false) <!-- helpers/active/{id?}  -->
  <div class="form-group">
    <a id="" class="btn btn-primary" href="/helpers/active/{{$user->id}}" role="button">Activar cuenta</a>
    @if($user->admin==false) <!-- helpers/active/{id?}  -->
      <a id="" class="btn btn-primary" href="/helpers/admin/{{$user->id}}" role="button">Dar privilegios de administrador</a>
    @else
      <a id="" class="btn btn-primary" href="/helpers/noadmin/{{$user->id}}" role="button">Retirar privilegios de administrador</a>
    @endif
  </div>
  @else
  <div class="form-group">
    <a id="" class="btn btn-primary" href="/helpers/inactive/{{$user->id}}" role="button">Desactivar cuenta</a>
    @if($user->admin==false) <!-- helpers/active/{id?}  -->
      <a id="" class="btn btn-primary" href="/helpers/admin/{{$user->id}}" role="button">Dar privilegios de administrador</a>
    @else
      <a id="" class="btn btn-primary" href="/helpers/noadmin/{{$user->id}}" role="button">Retirar privilegios de administrador</a>
    @endif
  </div>
  @endif
@endif
@endsection

@section('list')
<ol class="list-unstyled">
  <li><a href="/helpers"><i class="fas fa-home"></i> Personal de la comisión</a></li>
  @if(Auth::user()->admin)
  <li><a href="/helpers/create"><i class="fas fa-plus"></i> Inscribir personal</a></li>
  <li><a href="/helpers/{{$user->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar personal</a></li>
  <li><a href="#" onclick="
  let result =confirm('Esta seguro de eliminar al integrante?');
  if(result){
    event.preventDefault();
    document.getElementById('delete-form').submit();
  }
  "><i class="fas fa-trash-alt"></i> Eliminar integrante</a></li>
  <form action="{{ route('helpers.destroy',[$user->id]) }}" id="delete-form" method="post" style="display:none">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="delete">
  </form>
  @endif
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