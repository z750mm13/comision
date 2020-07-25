@extends('layouts.content.default.form',[
  'bg' => '../../argon/img/theme/reviews.jpg',
  'title' => $review->question->encabezado,
  'titlelist' => 'Acciones',
  'titlebody' => 'Propiedades de la evaluación',
  'image' => \Tools\Img\ToServer::getFile($review->evidencia)
])

@section('bodycontent')
<p class="lead">Estado:<br>@if($review->valor)<b class="text-success"> <i class="fas fa-check"></i> Cumple con el requisito.</b> @else <b class="text-danger"><i class="fas fa-times"></i> No cumple con el requisito.</b>@endif</p>
<p class="lead">Descripción:<br>{{$review->descripcion}}</p>
<p class="lead">Fecha de observación:<br>{{$review->created_at}}</p>
@forelse($review->commitments as $commitment)
<p class="lead">Responsable(s):
  <ul>
    <li><a class="text-body" href="/commitments/{{$commitment->id}}">{{$commitment->helper->rol}}</a></li>
  </ul>
</p>
<p class="lead">Completo: @if($commitment->compliment) <a class="text-success" href="/compliments/{{$commitment->compliment->id}}"><i class="fas fa-check"></i> Se ha cumplido.</a> @else <b class="text-danger"><i class="fas fa-times"></i> Aún no se ha cumplido.</b> @endif</h6>
@empty
@if($review->valor)
<p class="lead">Responsable(s): <b class="text-success"> <i class="fas fa-check"></i> No se requiere compromiso.</b></p>
@else
<p class="lead">Responsable(s): <b class="text-danger"><i class="fas fa-times"></i> No se han comprometido a reparar.</b></p>
@endif
@endforelse
<p class="lead">Área:<br><a href="/problems/{{$review->validity->id}}/subarea/{{$review->target->subarea->id}}">{{$review->target->subarea->nombre." ".$review->target->subarea->area->nombre}}</a></p>
@endsection

@section('list')
<ol class="list-unstyled">
  <li><a href="/reviews"><i class="fas fa-home"></i> Todas las evaluaciones</a></li>
</ol>
@endsection