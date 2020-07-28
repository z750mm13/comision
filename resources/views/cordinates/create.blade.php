@extends('layouts.content.default.form',[
    'bg' => '../../argon/img/theme/cordinates.jpg',
    'title' => $rol,
    'titlelist' => 'Acciones',
    'titlebody' => 'Responsable',
    'personal' => 'active'
])

@section('list')
<ol class="list-unstyled">
  <li><a href="/cordinates"><i class="fas fa-home"></i> Ver personal</a></li>
</ol>
@endsection

@section('bodycontent')
<div class="card-deck">
  @forelse($users as $user)
    <div class="col-md-4 col-sm-6 col-xm-12">
    <div class="card mb-3 shadow-sm"> <!-- Borde primario primary danger warning -->
      <div class="card-body text-center"> <!-- Texto primario -->
        <p><img src="{{\Tools\Img\ToServer::getFile($user->foto)}}" alt="avatar" class="rounded-circle" style="width: 5rem;"></p>
        <h5 class="card-title">{{$user->nombre}}</h5>
        <a href="#" onclick="
        let result =confirm('¿Está seguro que quiere a elejir a {{$user->nombre}}?');
        if(result){
          event.preventDefault();
          document.getElementById('user_id').value = '{{$user->id}}';
          document.getElementById('save-form').submit();
        }
        " class="card-link stretched-link">Elejir</a>
      </div>
    </div>
    </div>
    @empty
    <div class="container">
      <p class="text-cnter">Lo sentimos, no hay usuarios elegibles, <a href="/cordinates">Regresar</a></p>
    </div>
  @endforelse
  </div>

  <form action="{{route('cordinates.store')}}" method="Post" id="save-form">
    {{csrf_field()}}
    {{method_field('POST')}}

    @if($rol=='Rol personalizado')
    <hr class="my-4" />
    <div class="form-group">
        <label for="rol-cordinate">Rol:</label>
        <select name="rol" id="rol-cordinate" require class="form-control  @if($errors->first('rol')) is-invalid @endif" >
            <option value="0">Elije el rol</option>
            <option value="Coordinación">Cordinación</option>
            <option value="Secretaría">Secretaría</option>
            <option value="Bocalía">Bocalía</option>
        </select>
        <small class="text-danger">{{ $errors->first('rol') }}</small>
    </div>
    @else
    <div class="form-group">
        <input type="text" name="rol" value="{{$rol}}" hidden>
    </div>
    @endif
    <div class="form-group">
      <input hidden type="text" name="user_id" id="user_id">
    </div>

</form>
@endsection