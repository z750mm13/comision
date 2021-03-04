@extends('layouts.content.default.form',[
    'title' => 'Edición compromiso',
    'titlelist' => 'Acciones',
    'titlebody' => 'Compromiso',
    'actividades' => 'active',
    'compromisos' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/commitments">Compromisos</a></li>
<li class="breadcrumb-item"><a href="/commitments/{{$commitment->id}}">{{$commitment->review->target->subarea->nombre." [".$commitment->review->target->subarea->area->nombre."/".$commitment->review->target->subarea->area->area."]"}}</a></li>
<li class="breadcrumb-item active" aria-current="page">Edición de compromiso</li>
@endpush

@section('list')
<ol class="list-unstyled">
    <li><a href="/commitments/{{$commitment->id}}">Ver compromiso</a></li>
    <li><a href="/commitments">Todos los compromisos</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('commitments.update',[$commitment->id])}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <div class="form-group">
        <label for="commitment-user">Responsable:</label>
        <select name="user_id" id="commitment-user" require class="form-control  @if($errors->first('user_id')) is-invalid @endif" >
        <option value="{{$commitment->user->id}}">{{$commitment->user->nombre. ' ('. $commitment->user->rol. ')'}}</option>
        @foreach($errors as $user)
            <option value="{{$user->id}}">{{$user->nombre. ' ('. $user->rol. ')'}}</option>
        @endforeach
        </select>
        <small class="text-danger">{{ $errors->first('user_id') }}</small>
    </div>
    <div class="form-group">
        <label for="commitment-norm">Necesidad:</label>
        <select name="review_id" id="commitment-review" require class="form-control  @if($errors->first('review_id')) is-invalid @endif" >
        <option value="{{$commitment->review->id}}">{{$commitment->review->target->subarea->nombre}} [{{$commitment->review->target->subarea->area->nombre}}] {{substr($commitment->review->descripcion, 0, 30)."..."}}</option>
        @foreach($reviews ?? '' as $review)
            <option value="{{$review->id}}">{{$review->target->subarea->nombre}} [{{$review->target->subarea->area->nombre}}] {{substr($review->descripcion, 0, 30)."..."}}</option>
        @endforeach
        </select>
        <small class="text-danger">{{ $errors->first('review_id') }}</small>
    </div>
    <div class="form-group">
        <label for="commitment-fecha">Fecha:</label>
        <input type="date" id="commitment-fecha" name="fecha_cumplimiento" placeholder="Ingrese la fecha" required spellcheck="false" value="{{ $commitment->fecha_cumplimiento }}" class="form-control  @if($errors->first('fecha_cumplimiento')) is-invalid @endif" />
        <small class="text-danger">{{ $errors->first('fecha_cumplimiento') }}</small>
    </div>
    <div class="form-group">
        <label for="commitment-descripcion">Accion a realizar:</label>
        <textarea class="form-control" name="accion" id="commitment-descripcion" rows="3">{{$commitment->accion}}</textarea>
    </div>
    <div class="form-group">
        <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
    </div>
</form>
@endsection