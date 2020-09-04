<?php 
use Carbon\Carbon;
use Tools\Utils\Fecha;
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

    <div class="form-group">
        <label for="validity-fin">Ultimo día de aplicación del cuestionario:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
            </div>
            <input name="fin" class="form-control datepicker" placeholder="Fecha final" type="text" value="{{ old('fin', Carbon::parse($validity->fin)->format('d/m/Y')) }}">
        </div>
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
                    startDate: new Date('{{Carbon::parse($validity->inicio)->format("Y/m/d")}}')
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