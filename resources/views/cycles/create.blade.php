@extends('layouts.content.default.form',[
    'title' => 'Programar ciclo',
    'titlelist' => 'Acciones',
    'titlebody' => 'Ciclo',
    'actividades' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/cycles">Ciclos</a></li>
<li class="breadcrumb-item active" aria-current="page">Programación de ciclo</li>
@endpush

<?php use Carbon\Carbon; ?>

@section('list')
<ol class="list-unstyled">
    <li><a href="/cycles">Ciclos programados</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('cycles.store')}}" method="Post" autocomplete="off">
    {{csrf_field()}}
    {{method_field('POST')}}
    
    <label for="cycle-inicio">Rango de fechas:</label>
    <div class="input-daterange datepicker row align-items-center">
        <div class="col">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                    </div>
                    <input name="inicio" class="form-control @if($errors->first('inicio')) is-invalid @endif" id="enddatepicker" placeholder="Fecha de inicio" type="text" required>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                    </div>
                    <input name="fin" class="form-control @if($errors->first('fin')) is-invalid @endif" placeholder="Fecha final" type="text" required>
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
      <label for="cycle-codigo">Código:</label>
      <input type="text" class="form-control" placeholder="Código del ciclo (Ago-Dic{{ now()->year }} ó Ene-Jun{{ now()->year }})" name="codigo" id="cycle-codigo" rows="3" required>
    </div>
    <div class="form-group">
      <label for="cycle-descripcion">Descripcion:</label>
      <textarea class="form-control" placeholder="Descripción del ciclo" name="descripcion" id="cycle-descripcion" rows="3"></textarea>
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
    			useCurrent: false,
                //startDate: Date(moment().toDate())
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