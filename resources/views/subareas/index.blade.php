@extends('layouts.content.default.index',[
    'bg' => '../argon/img/theme/subareas.jpg',
    'title' => 'Subáreas',
    'descriptions' => [
      __('Las subáreas son inmuebles pertenecientes a un edificio (Edificio A, Edificio B... Etc.).'),
      __('En este apartado se podrá tener el control de las subáreas de la institución. Para agregar una subárea presione el siguiente botón.')
    ],
    'titlebody' => __('Subáreas'),
    'image' => null,
    'button' => __('Agregar subárea'),
    'urlbutton' => __('/subareas/create')
])

@section('bodycontent')
<div class="card-deck">
  @foreach($subareas as $subarea)
    <div class="col-md-4 col-sm-6 col-xm-12">
    <div class="card mb-3"> <!-- Borde primario primary danger warning-->
      <div class="card-header">
        <h5 class="card-title">{{$subarea->nombre}}</h5>
      </div>
      <div class="card-body"> <!-- Texto primario -->
        <h6 class="card-subtitle mb-2 text-muted">Area: {{$subarea->area->nombre}}</h6>
        <a class="stretched-link" href="/subareas/{{$subarea->id}}" class="card-link">Ver mas...</a>
      </div>
    </div>
    </div>
  @endforeach
</div>
@endsection