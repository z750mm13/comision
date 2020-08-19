@extends('layouts.content.nobody.show',[
  'title' => $guard->cordinate->user->nombre." ".$guard->cordinate->user->apellidos,
  'titlelist' => 'Acciones',
  'descriptions' => ['Rol que desempeña: '. $guard->cordinate->rol, $guard->area->nombre. ' - '. $guard->area->area],
  'instalaciones' => 'active'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/guards">Supervisores</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$guard->cordinate->user->nombre." ".$guard->cordinate->user->apellidos}}</li>
@endpush

@section('list')
<ol class="list-unstyled">
  <li><a href="/guards">Ver resguardos</a></li>
  <li><a href="/guards/create"><i class="fas fa-plus"></i> Agregar responsabilidad</a></li>
  <li><a href="/guards/{{$guard->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar responsabilidad</a></li>
  <li><a href="#" onclick="
  let result =confirm('Esta seguro de eliminar al responsabilidad?');
  if(result){
    event.preventDefault();
    document.getuserById('delete-form').submit();
  }
  "><i class="fas fa-trash-alt"></i> Eliminar responsabilidad</a></li>
  <form action="{{ route('guards.destroy',[$guard->id]) }}" id="delete-form" method="post" style="display:none">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="delete">
  </form>
</ol>
@endsection