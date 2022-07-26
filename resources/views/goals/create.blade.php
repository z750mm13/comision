@extends('layouts.content.default.form',[
    'title' => 'Agregar meta',
    'titlelist' => 'Acciones',
    'titlebody' => 'Meta',
    'normativa' => 'active',
    'nodelete' => 'no'
])

@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/goals">Metas</a></li>
<li class="breadcrumb-item active" aria-current="page">Agregar meta</li>
@endpush

@section('list')
<ol class="list-unstyled">
    <li><a href="/goals">Ver metas</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('goals.store')}}" method="Post">
    {{csrf_field()}}
    {{method_field('POST')}}
    
    <div class="form-group">
        <label for="porcentaje" class="form-label">Porcentaje estimado</label>
        <input name="porcentaje" id="porcentaje" placeholder="Porcentaje" class="form-control" type="number" min="1" max="100">
    </div>
    <div class="form-group">
        <label for="goal-anio">Año aplicable:</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
            </div>
            <input name="anio" class="form-control datepicker" placeholder="Año" type="text" value="{{ old('anio') }}">
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
    			format: "yyyy",
                autoclose: true,
                minViewMode: "years"
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