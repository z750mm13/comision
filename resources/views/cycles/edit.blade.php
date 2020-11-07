<?php 
use Carbon\Carbon;
use Tools\Utils\Fecha;

$hoy = Carbon::parse(Carbon::now()->toDateString());
$finicio = Carbon::parse($cycle->inicio); // para editar debe haber una dif 1 mas
$ffin = Carbon::parse($cycle->fin); // para editar debe haber una dif 1 mas

$inicio = $hoy->diffInDays($finicio) * ($hoy->diff($finicio)->invert? -1: 1);

$fin = $hoy->diffInDays($ffin) * ($hoy->diff($ffin)->invert? -1: 1);
?>

@extends('layouts.content.default.form',[
    'title' => 'Edición del ciclo',
    'titlelist' => 'Acciones',
    'titlebody' => 'Ciclo',
    'actividades' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/cycles">Ciclos</a></li>
<li class="breadcrumb-item"><a href="/cycles/{{$cycle->id}}">{{$cycle->codigo}}</a></li>
<li class="breadcrumb-item active" aria-current="page">Edición</li>
@endpush

@section('list')
<ol class="list-unstyled">
    <li><a href="/cycles/{{$cycle->id}}">Este ciclo</a></li>
    <li><a href="/cycles">Ciclos programados</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('cycles.update',[$cycle->id])}}" method="Post">
    {{csrf_field()}}
    {{method_field('PUT')}}
    @if($inicio>0)
    <label for="cycle-inicio">Rango de fechas:</label>
    <div class="input-daterange datepicker row align-items-center">
        <div class="col">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                    </div>
                    <input name="inicio" class="form-control @if($errors->first('inicio')) is-invalid @endif" id="enddatepicker" placeholder="Fecha de inicio" type="text" required value="{{ old('fin', Carbon::parse($cycle->inicio)->format('d/m/Y')) }}">
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                    </div>
                    <input name="fin" class="form-control @if($errors->first('fin')) is-invalid @endif"  placeholder="Fecha final" type="text" value="{{ old('fin', Carbon::parse($cycle->fin)->format('d/m/Y')) }}" required>
                </div>
            </div>
        </div>
    </div>
    @elseif($fin>=0)
    <div class="form-group">
        <label for="cycle-fin">Ultimo día de aplicación del cuestionario:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
            </div>
            <input name="fin" class="form-control datepicker" placeholder="Fecha final" type="text" value="{{ old('fin', Carbon::parse($cycle->fin)->format('d/m/Y')) }}">
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
        <label for="cycle-codigo">Código:</label>
        <input type="text" value="{{$cycle->codigo}}" class="form-control  @if($errors->first('codigo')) is-invalid @endif" placeholder="Código del ciclo (Ago-Dic{{ now()->year }} ó Ene-Jun{{ now()->year }})" name="codigo" id="cycle-codigo" rows="3" required>
      </div>
      <div class="form-group">
        <label for="cycle-descripcion">Descripcion:</label>
        <textarea class="form-control  @if($errors->first('descripcion')) is-invalid @endif" placeholder="Descripción del ciclo" name="descripcion" id="cycle-descripcion" rows="3">{{$cycle->descripcion}}</textarea>
    </div>

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
        var fecha = new Date('{{Carbon::parse($cycle->inicio)->format("Y/m/d")}}');
        @if($inicio>0) fecha = Date(moment().toDate()); @endif
        //
        // Bootstrap Datepicker
        //
        'use strict';
        var Datepicker = (function() {
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