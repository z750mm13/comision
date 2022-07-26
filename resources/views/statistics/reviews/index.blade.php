<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>

@extends('layouts.content.statistics.table',[
  'title' => 'Recorridos',
  'description' => 'Apartado de recorridos.',
  'estadistica' => 'active',
])

@push('bread')
<li class="breadcrumb-item active" aria-current="page">Recorridos</li>
@endpush

@section('bodycontent')
<form action="/statistics/reviews" method="get" autocomplete="off" class="row">
<div class="col-md-9 col-sm-12 input-daterange datepicker row">
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                </div>
                <input autocomplete="off" name="inicio" value="{{$inicio??''}}" class="form-control" id="enddatepicker" placeholder="Fecha inicial" type="text">
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                </div>
                <input autocomplete="off" name="fin" value="{{$fin??''}}" class="form-control"  placeholder="Fecha final" type="text">
            </div>
        </div>
    </div>
</div>
<div class="col-md-3 d-none d-md-block d-xl-block">
  <a id="limpiar" href="/statistics/reviews" class="mb-2 btn btn-secondary">Limpiar</a>
  <input type="submit"  class="mb-2 btn btn-primary " name="submit"  value="Mostrar">
</div>
<div class="col-12">
  <div class="custom-control-inline custom-control custom-checkbox">
    <input class="custom-control-input" name="problema" id="problema" type="checkbox" {{$problema? 'checked':''}}>
    <label class="custom-control-label" for="problema">Con problemas</label>
  </div>
  <div class="custom-control-inline custom-control custom-checkbox">
    <input class="custom-control-input" name="compromiso" id="compromiso" type="checkbox" {{$compromiso? 'checked':''}}>
    <label class="custom-control-label" for="compromiso">Compromiso</label>
  </div>
  <div class="custom-control-inline custom-control custom-checkbox">
    <input class="custom-control-input" name="cumplimiento" id="cumplimiento" type="checkbox" {{$cumplimiento? 'checked':''}}>
    <label class="custom-control-label" for="cumplimiento">Cumplimiento</label>
  </div>
</div>
<div class="d-md-none col-sm-12">
  <a id="limpiar" href="/statistics/reviews"  class="btn btn-secondary">Limpiar</a>
</div>
<div class="d-md-none col-sm-12">
  <br>
</div>
<div class="d-md-none col-sm-12">
  <input type="submit"  class="btn btn-primary " name="submit"  value="Mostrar">
</div>
</form>
@endsection

@section('extern')
<div class="col-12">
<div class="card shadow">
  <!-- Card header -->
  <div class="card-header border-0">
    <h3 class="mb-0">Evaluaciones ({{$problems->count()}})</h3>
  </div>
  <!-- Light table -->
  <div class="table-responsive">
    <table class="table align-items-center table-flush">
      <thead class="thead-light">
        <tr>
          <th scope="col">Area</th>
          <th scope="col">Problema</th>
          <th scope="col">Comprometido</th>
          <th scope="col">Cumplimiento</th>
        </tr>
      </thead>
      <tbody class="list">
        @foreach ($problems as $problem)
        <tr>
          <th>
            <div class="media align-items-center">
              <div class="media-body">
                <span class="name mb-0 text-sm">{{$problem->subarea." (".$problem->area. ')'}}</span>
              </div>
            </div>
          </th>
          <td>
            <a href="/reviews/{{$problem->id}}">
            <span class="badge badge-dot mr-4">
              @if($problem->cumple)
              <i class="bg-green"></i>
              @else
              <i class="bg-danger"></i>
              @endif
              <span class="status">
                {{(($problem->cumple? 'C':'No c').'umple con '. $problem->encabezado)}}
              </span>
            </span>
            </a>
          </td>
          <td>
            <span class="badge badge-dot mr-4">
              @if(!$problem->cumple && $problem->compromiso)
              <i class="bg-green"></i>
              <span class="status">{{$problem->compromiso}}</span>
              @elseif (!$problem->cumple && !$problem->compromiso)
              <i class="bg-danger"></i>
              <span class="status">No exciste compromiso</span>
              @else
              <i class="bg-green"></i>
              <span class="status">No se necesita</span>
              @endif
            </span>
          </td>
          <td>
            <span class="badge badge-dot mr-4">
              @if(!$problem->cumple && $problem->cumplimiento)
              <i class="bg-green"></i>
              <span class="status">{{Fecha::texto(Carbon::parse($problem->cumplimiento))}}</span>
              @elseif(!$problem->cumple && !$problem->cumplimiento)
              <i class="bg-danger"></i>
              <span class="status">No exciste cumplimiento</span>
              @else
              <i class="bg-green"></i>
              <span class="status">No se necesita</span>
              @endif
            </span>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
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
          format: 'yyyy-mm-dd'
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