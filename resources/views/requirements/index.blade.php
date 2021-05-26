@extends('layouts.content.default.index',[
    'title' => 'Requerimientos',
    'descriptions' => [
      __('Los requerimientos o requisitos son aspectos particulares que se deben de cumplir de las normas enumerados según su naturaleza. Se mostrarán a continuación de manera general.'),
      __(auth()->user()->admin?'En este apartado se podrá tener el control de los requisitos. Si desea agregar un nuevo requisito presione el botón superior.':'')
    ],
    'titlebody' => __('Requisitos'),
    'image' => null,
    'button' => __('Agregar requisito'),
    'urlbutton' => __('/requirements'),
    'normativa' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item active" aria-current="page">Requisitos</li>
@endpush

@section('precardbody')
<ul class="list-group list-group-flush">
  <li class="list-group-item">
    <div class="form-group">
      <div class="input-group input-group-merge">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-search"></i></span>
        </div>
        <input name="busqueda" id="busqueda" class="form-control" placeholder="Buscar" type="text">
      </div>
    </div>
  </li>
</ul>
@endsection

@section('bodycontent')
<div class="card-deck">
  @foreach($requirements as $requirement)
  <div class="col-md-4 col-sm-6 col-xm-12">
  <div class="card mb-3"> <!-- Borde primario -->
    <div class="card-header">{{$requirement->numero}}</div>
    <div class="card-body text-primary"> <!-- Texto primario -->
      <h4 hidden>{{$requirement->id}} {{$requirement->numero}} {{$requirement->norm->codigo}} {{substr($requirement->descripcion, 0, 37)}}</h4>
      <h5 class="card-title">Norma: {{$requirement->norm->codigo}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">Descripcion del requisito</h6>
      <p class="card-text">{{substr($requirement->descripcion, 0, 37)."..."}}</p>
      <a class="stretched-link" href="/requirements/{{$requirement->id}}" class="card-link">Ver mas...</a>
    </div>
  </div>
  </div>
  @endforeach
  </div>
@endsection

@push('js')
<script>
  $('#busqueda').keyup(function (){
    $('.col-md-4.col-sm-6.col-xm-12').show();
    var filter = $(this).val(); // optiene el valor de la busqueda
    $('.card-deck').find('.col-md-4.col-sm-6.col-xm-12 .card .card-body h4:not(:contains("'+filter+'"))').parent().parent().parent().hide();
})
</script>
@endpush