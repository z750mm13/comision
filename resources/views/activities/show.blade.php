@extends('layouts.content.default.form',[
  'title' => $activity->titulo,
  'titlelist' => 'Acciones',
  'descriptions' => ['Descripción: '. $activity->descripcion],
  'titlebody' => 'Peligros',
  'actividades' => 'active',
  'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/activities">Actividades</a></li>
<li class="breadcrumb-item active" aria-current="page">{{$activity->titulo}}</li>
@endpush

@section('bodycontent')
@foreach ($activity->dangers as $danger)
  <div class="col-md-12">
    <div class="card mb-3"> <!-- Borde primario -->
      <div class="card-body"> <!-- Texto primario -->
        <div class="row justify-content-between">
          <div class="col-10">
            <p class="card-text">{{ $danger->titulo }}</p>
          </div>
          <div class="col-2">
              <button onclick="
              let result =confirm('Esta seguro de eliminar peligro?');
              if(result){
                event.preventDefault();
                document.getElementById('danger_id').value='{{ $danger->id }}';
                document.getElementById('delete-form').submit();
              }
              " type="button" class="btn btn-danger btn-sm">Eliminar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endsection

@section('list')
<ol class="list-unstyled">
  <li><a href="/activities"><i class="fas fa-home"></i> Ver cuestionarios</a></li>
  <li><a href="/activities/create"><i class="fas fa-plus"></i> Agregar cuestionario</a></li>
  <li><a href="/activities/{{$activity->id}}/edit"><i class="fas fa-pencil-alt"></i> Editar cuestionario</a></li>
  <li><a href="#" onclick="
  let result =confirm('Esta seguro de eliminar el cuestionario?');
  if(result){
    event.preventDefault();
    document.getElementById('danger_id').value='';
    document.getElementById('delete-form').submit();
  }
  "><i class="fas fa-trash-alt"></i> Eliminar cuestionario</a></li>
  <form action="{{ route('activities.destroy', [$activity->id]) }}" id="delete-form" method="post" style="display:none">
  {{csrf_field()}}
  <input type="hidden" name="_method" value="DELETE">

  <input type="text" name="danger_id" id="danger_id">
  </form>
</ol>
@endsection