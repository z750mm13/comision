@extends('layouts.content.default.form',[
  'title' => $user->nombre." ".$user->apellidos,
  'image' => \Tools\Img\ToServer::getFile($user->foto),
  'description' => ' ',
  'titlelist' => 'Acciones',
  'titlebody' => 'Propiedades del usuario',
  'personal' => 'active'
])
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