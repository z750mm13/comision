<?php
use Carbon\Carbon;
use Tools\Utils\Fecha;
?>

@extends('layouts.content.statistics.table',[
  'title' => 'Matriz de riesgos',
  'description' => 'Resultados del analisis de riesgos',
  'estadistica' => 'active',
])

@push('bread')
<li class="breadcrumb-item active" aria-current="page">Matriz</li>
@endpush

@section('bodycontent')
<form action="{{route('statistics.matrix.index')}}" method="get" autocomplete="off" class="row align-items-center">
<div class="col-md-10 col-sm-12">
  <div class="form-group">
      <label for="evaluation_id"></label>
      <select class="form-control" name="evaluation_id" id="evaluation_id">
        <option value="{{$matriz->id}}">{{Fecha::texto(Carbon::parse($matriz->inicio))}}</option>
        @foreach ($evaluations as $evaluation)
        <option value="{{$evaluation->id}}">{{Fecha::texto(Carbon::parse($evaluation->inicio))}}</option>
        @endforeach
      </select>
  </div>
</div>
<div class="col-md-2 text-center">
  <input type="submit"  class="btn btn-primary " name="submit"  value="Mostrar">
</div>
</form>
@endsection

@section('extern')
<div class="col-12">
<div class="card shadow">
  <!-- Card header -->
  <div class="card-header border-0">
    <h3 class="mb-0">Matriz de riesgos del {{Fecha::texto(Carbon::parse($matriz->inicio))}}</h3>
  </div>
  <!-- Light table -->
  <div class="table-responsive">
    <table class="table align-items-center table-flush">
      <thead class="thead-light">
        <tr>
          <th scope="col">Lugar</th>
          <th scope="col">Actividad</th>
          <th scope="col">Peligro</th>
          <th scope="col">Seguridad</th>
          <th scope="col">Salud</th>
          <th scope="col">Exposicion</th>
          <th scope="col">Personas</th>
          <th scope="col">Ocurrencia</th>
          <th scope="col">Consecuencia en infraestructura</th>
          <th scope="col">Consecuencia en personas</th>
          <th scope="col">Significancia</th>
        </tr>
      </thead>
      <tbody class="list">
        @foreach($subareas as $subarea)
        <tr>
          <td>
            <div class="media align-items-center">
              <div class="media-body">
                <span class="name mb-0 text-sm">{{$subarea->lugar}}</span>
              </div>
            </div>
          </td>
          <td>
            <div class="media align-items-center">
              <div class="media-body">
                <span class="name mb-0 text-sm">{{$subarea->actividad}}</span>
              </div>
            </div>
          </td>
          <td>
            <div class="media align-items-center">
              <div class="media-body">
                <span class="name mb-0 text-sm">{{$subarea->peligro}}</span>
              </div>
            </div>
          </td>
          <td class="text-center">
            <div class="media align-items-center">
              <div class="media-body">
                <span class="name mb-0 text-sm">@if($subarea->tipo=='Seguridad')<i class="ni ni-check-bold"></i>@endif</span>
              </div>
            </div>
          </td>
          <td class="text-center">
            <div class="media align-items-center">
              <div class="media-body">
                <span class="name mb-0 text-sm">@if($subarea->tipo=='Salud')<i class="ni ni-check-bold"></i>@endif</span>
              </div>
            </div>
          </td>
          <td class="text-center">
            <div class="media align-items-center">
              <div class="media-body">
                <span class="name mb-0 text-sm">{{$subarea->exposicion}}</span>
              </div>
            </div>
          </td>
          <td class="text-center">
            <div class="media align-items-center">
              <div class="media-body">
                <span class="name mb-0 text-sm">{{$subarea->personas}}</span>
              </div>
            </div>
          </td>
          <td class="text-center">
            <div class="media align-items-center">
              <div class="media-body">
                <span class="name mb-0 text-sm">{{$subarea->ocurrencia}}</span>
              </div>
            </div>
          </td>
          <td class="text-center">
            <div class="media align-items-center">
              <div class="media-body">
                <span class="name mb-0 text-sm">{{$subarea->consecuencia_infraestructura}}</span>
              </div>
            </div>
          </td>
          <td class="text-center">
            <div class="media align-items-center">
              <div class="media-body">
                <span class="name mb-0 text-sm">{{$subarea->consecuencia_salud}}</span>
              </div>
            </div>
          </td>
          <td class="text-center 
            @if($subarea->significancia>=1&&$subarea->significancia<=15)table-success
            @elseif($subarea->significancia>=16&&$subarea->significancia<=34)table-yellow
            @elseif($subarea->significancia>=35)table-danger
            @endif
            ">
            <div class="media align-items-center">
              <div class="media-body">
                <span class="name mb-0 text-sm">{{$subarea->significancia}}</span>
              </div>
            </div>
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
    			useCurrent: false
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