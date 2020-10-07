@extends('layouts.content.default.form',[
    'title' => 'Edición de actividad',
    'titlelist' => 'Acciones',
    'titlebody' => 'Cuestionario',
    'actividades' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/activities">Cuestionarios</a></li>
<li class="breadcrumb-item"><a href="/activities/{{$activity->id}}">{{$activity->titulo}}</a></li>
<li class="breadcrumb-item active" aria-current="page">Edición de actividad</li>
@endpush

@section('list')
<ol class="list-unstyled">
    <li><a href="/activities/{{$activity->id}}">Ver actividad</a></li>
    <li><a href="/activities">Ver actividades</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('activities.update',[$activity->id])}}" method="POST" id="formulario">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <div class="form-group">
        <h2>Tipo de actividad</h2>
    </div>
    <div class="form-group">
        <label for="">Titulo</label>
        <input type="text" name="titulo" placeholder="Tipo de actividad" required value="{{ $activity->titulo }}" class="form-control  @if($errors->first('titulo')) is-invalid @endif">
        <small class="text-danger">{{ $errors->first('titulo') }}</small>
    </div>
    <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$activity->descripcion}}</textarea>
    </div>

    <div class="form-group">
        <h2>Peligros de la actividad</h2>
    </div>
    <div id="peligros">
    @foreach ($activity->dangers as $danger)
    <div class="form-group">
        <div class="card">
          <div class="card-body">
            <label>Peligro:</label>
            <input value="{{ $danger->titulo }}" type="text" name="peligros[]" class="form-control" placeholder="Peligro">
            <input type="text" name="dangers_id[]" hidden value="{{$danger->id}}">
          </div>
        </div>
    </div>
    @endforeach
    </div>
    <div class="form-group">
        <a class="col-md-12 btn btn-light btn-lg" onclick="clonar()" role="button"><i class="fas fa-plus"></i></a>
    </div>

    <div class="form-group">
        <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
    </div
</form>
@endsection

@push('js')
<script type="text/javascript">
    function clonar() {
        // Clona el .form-group
        var $clone = $('#peligros .form-group').last().clone();
        // Borra los valores de los inputs clonados
        $clone.find(':input').each(function () {
            this.value = '';
        });
        //Clon de la ultima pregunta
        $clone.appendTo('#peligros');
    }
    function eliminar($id){
        var $input = document.getElementById();
    }
</script>
@endpush