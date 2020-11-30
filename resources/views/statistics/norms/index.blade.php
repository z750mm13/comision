@extends('layouts.app')

@section('content')
@include('layouts.headers.norms',compact('total'))
<div class="container-fluid mt--7">
  <div class="row">
    <div class="col-12">
      <div class="card shadow">
          <div class="card-header border-0">
            <h3 class="mb-0">Filtros</h3>
          </div>
          <div class="card-body">
            <form action="{{_('/statistics/norms')}}" method="get" autocomplete="off" class="row">
              <div class="col-md-9 col-sm-12 input-daterange datepicker row">
                  <div class="col-sm-12">
                      <div class="form-group">
                          <div class="input-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                              </div>
                              <input autocomplete="off" name="anio" value="{{$anio??''}}" class="form-control" id="enddatepicker" placeholder="Año" type="text">
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 d-none d-md-block d-xl-block">
                <a id="limpiar" href="/statistics/norms"  class="mb-2 btn btn-secondary">Limpiar</a>
                <input type="submit"  class="mb-2 btn btn-primary " name="submit"  value="Mostrar">
              </div>
              <div class="col-12">
                <div class="custom-control-inline custom-control custom-checkbox">
                  <input class="custom-control-input" name="cumplidos" id="cumplidos" type="checkbox" {{$cumplidos? 'checked':''}}>
                  <label class="custom-control-label" for="cumplidos">Cumplidos</label>
                </div>
              </div>
              <div class="d-md-none col-sm-12">
                <a id="limpiar" href="/statistics/norms"  class="btn btn-secondary">Limpiar</a>
              </div>
              <div class="d-md-none col-sm-12">
                <br>
              </div>
              <div class="d-md-none col-sm-12">
                <input type="submit"  class="btn btn-primary " name="submit"  value="Mostrar">
              </div>
            </form>
          </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card shadow">
          <div class="card-header bg-transparent">
              <div class="row align-items-center">
                  <div class="col">
                      <h6 class="text-uppercase text-muted ls-1 mb-1">Vista general</h6>
                      <h2 class="text-darck mb-0">Avance total</h2>
                  </div>
              </div>
          </div>
          <div class="card-body">
              <!-- Chart -->
              @include('components.chart.advance',compact('meses'))
          </div>
      </div>
    </div>
    <div class="col-12">
      <div class="card shadow">
      <!-- Card header -->
      <div class="card-header border-0">
        <h3 class="mb-0">Normas ({{$requirements->count()}})</h3>
      </div>
      <!-- Light table -->
      <div class="table-responsive">
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col">Norma</th>
              <th scope="col">Requisito</th>
              <th scope="col">Descripción</th>
              <th scope="col">Estado</th>
            </tr>
          </thead>
          <tbody class="list">
            @foreach ($requirements as $requirement)
            <tr>
              <th>
                <div class="media align-items-center">
                  <div class="media-body">
                    <span class="name mb-0 text-sm">{{$requirement->norma}}</span>
                  </div>
                </div>
              </th>
              <td>
                <a href="/statistics/norms/{{$requirement->id}}?anio={{$anio}}">
                <span class="badge badge-dot mr-4">
                  @if($requirement->cumple)
                  <i class="bg-green"></i>
                  @else
                  <i class="bg-danger"></i>
                  @endif
                  <span class="status">
                    {{$requirement->requisito}}
                  </span>
                </span>
                </a>
              </td>
              <td>
                <span class="badge badge-dot mr-4">
                  @if($requirement->cumple)
                  <i class="bg-green"></i>
                  <span class="status">{{mb_substr($requirement->descripcion, 0, 50,"utf-8")."..."}}</span>
                  @else
                  <i class="bg-danger"></i>
                  <span class="status">{{mb_substr($requirement->descripcion, 0, 50,"utf-8")."..."}}</span>
                  @endif
                </span>
              </td>
              <td>
                <span class="badge badge-dot mr-4">
                  @if($requirement->cumple)
                  <i class="bg-green"></i>
                  <span class="status">Se cumple</span>
                  @else
                  <i class="bg-danger"></i>
                  <span class="status">No se cumple</span>
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
  </div>
  @include('layouts.footers.auth')
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

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush