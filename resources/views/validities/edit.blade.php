<?php 
use Carbon\Carbon;
use Tools\Utils\Fecha;

$hoy = Carbon::parse(Carbon::now()->toDateString());
$finicio = Carbon::parse($validity->inicio); // para editar debe haber una dif 1 mas
$ffin = Carbon::parse($validity->fin); // para editar debe haber una dif 1 mas

$inicio = $hoy->diffInDays($finicio) * ($hoy->diff($finicio)->invert? -1: 1);

$fin = $hoy->diffInDays($ffin) * ($hoy->diff($ffin)->invert? -1: 1);
?>

@extends('layouts.content.default.form',[
    'title' => 'Edición de evaluación',
    'titlelist' => 'Acciones',
    'titlebody' => 'Evaluación',
    'actividades' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/validities">Evaluaciones</a></li>
<li class="breadcrumb-item"><a href="/validities/{{$validity->id}}">{{'Evaluación del '. Fecha::texto(Carbon::parse($validity->inicio))}}</a></li>
<li class="breadcrumb-item active" aria-current="page">Edición de evaluación</li>
@endpush

@section('list')
<ol class="list-unstyled">
    <li><a href="/validities/{{$validity->id}}">Esta evaluación</a></li>
    <li><a href="/validities">Evaluaciones programadas</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('validities.update',[$validity->id])}}" method="Post">
    {{csrf_field()}}
    {{method_field('PUT')}}

    @if($inicio>0)
    <label for="validity-inicio">Rango de fechas:</label>
    <div class="input-daterange datepicker row align-items-center">
        <div class="col">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                    </div>
                    <input name="inicio" class="form-control @if($errors->first('inicio')) is-invalid @endif" id="enddatepicker" placeholder="Fecha de inicio" type="text" required value="{{ old('inicio', Carbon::parse($validity->inicio)->format('d/m/Y')) }}">
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                    </div>
                    <input name="fin" class="form-control @if($errors->first('fin')) is-invalid @endif"  placeholder="Fecha final" type="text" value="{{ old('fin', Carbon::parse($validity->fin)->format('d/m/Y')) }}" required>
                </div>
            </div>
        </div>
    </div>
    @elseif($fin>=0)
    <div class="form-group">
        <label for="validity-fin">Ultimo día de aplicación del cuestionario:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
            </div>
            <input name="fin" class="form-control datepicker" placeholder="Fecha final" type="text" value="{{ old('fin', Carbon::parse($validity->fin)->format('d/m/Y')) }}">
        </div>
    </div>
    @else
    <div class="card mb-3"> <!-- Borde primario primary danger warning -->
        <div class="card-body text-center"> <!-- Texto primario -->
            <h3>Lo sentimos</h3>
            <h4>No se pueden modificar las fechas de evaluaciones pasadas</h4>
        </div>
    </div>
    @endif

    <div class="form-group">
        <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
    </div>
</form>
@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="{{ asset('argon') }}/vendor/bootstrap-datepicker/dist/locales/bootstrap-datepicker.es.min.js"></script>
<script src="{{ asset('argon') }}/vendor/moment/min/moment.min.js"></script>
<script type="text/javascript">
    $(function() {
        //
        // Bootstrap Datepicker
        //
        'use strict';
        var Datepicker = (function() {
            var fecha = new Date('{{Carbon::parse($validity->inicio)->format("Y/m/d")}}');
            @if($inicio>0) fecha = Date(moment().toDate()); @endif
            // Variables
            var $datepicker = $('.datepicker');
    
            // Methods
            function init($this) {
                var options = {
                    disableTouchKeyboard: true,
                    autoclose: false,
                    useCurrent: false,//2020/11/25
                    startDate: fecha
                };
                $this.datepicker(options);
            }
    
            // Events
            if ($datepicker.length) {
                $datepicker.each(function() {
                    init($(this));
                });
            }
        })();
    });
</script>
@endpush