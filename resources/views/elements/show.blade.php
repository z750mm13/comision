@extends('layouts.content.default.form',[
  'title' => $user->nombre." ".$user->apellidos,
  'description' => ' ',
  'titlelist' => 'Acciones',
  'titlebody' => 'Propiedades del usuario',
  'personal' => 'active'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/elements">Integrantes</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$user->nombre." ".$user->apellidos}}</li>
@endpush

@push('aditional')
<div class="col-md-2">
  <img class="rounded" src="{{\Tools\Img\ToServer::getFile($user->foto)}}" alt="evidencia" style="width: 10rem;" data-toggle="modal" data-target="#exampleModalCenter">
</div>
<div class="modal fade bg-transparent" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="bg-transparent transparent-border">
      <div class="d-flex justify-content-center">
        <img class="rounded" src="{{\Tools\Img\ToServer::getFile($user->foto)}}" alt="evidencia">
      </div>
    </div>
  </div>
</div>
@endpush

@section('bodycontent')
@if(Auth::user()->admin & Auth::user()->id != $user->id)
  @if($user->active==false) <!-- elements/active/{id?}  -->
  <div class="form-group">
    <a id="" class="btn btn-primary" href="/elements/active/{{$user->id}}" role="button">Activar cuenta</a>
    @if($user->admin==false) <!-- elements/active/{id?}  -->
      <a id="" class="btn btn-primary" href="/elements/admin/{{$user->id}}" role="button">Dar privilegios de administrador</a>
    @else
      <a id="" class="btn btn-primary" href="/elements/noadmin/{{$user->id}}" role="button">Retirar privilegios de administrador</a>
    @endif
  </div>
  @else
  <div class="form-group">
    <a id="" class="btn btn-primary" href="/elements/inactive/{{$user->id}}" role="button">Desactivar cuenta</a>
    @if($user->admin==false) <!-- elements/active/{id?}  -->
      <a id="" class="btn btn-primary" href="/elements/admin/{{$user->id}}" role="button">Dar privilegios de administrador</a>
    @else
      <a id="" class="btn btn-primary" href="/elements/noadmin/{{$user->id}}" role="button">Retirar privilegios de administrador</a>
    @endif
  </div>
  @endif
@endif
@endsection

@section('list')
<ol class="list-unstyled">
  <li><a href="/elements"><i class="fas fa-home"></i> Personal de la comisión</a></li>
  @if(Auth::user()->admin)
  <li><a href="/elements/create"><i class="fas fa-plus"></i> Inscribir personal</a></li>
  <li><a href="/elements/{{$user->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar personal</a></li>
  <li><a href="#" onclick="
  let result =confirm('Esta seguro de eliminar al integrante?');
  if(result){
    event.preventDefault();
    document.getElementById('delete-form').submit();
  }
  "><i class="fas fa-trash-alt"></i> Eliminar integrante</a></li>
  <form action="{{ route('elements.destroy',[$user->id]) }}" id="delete-form" method="post" style="display:none">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="delete">
  </form>
  @endif
</ol>
@endsection