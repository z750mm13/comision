<?php 
use Carbon\Carbon;
use Tools\Utils\Fecha;

$hoy = Carbon::parse(Carbon::now()->toDateString());
$finicio = Carbon::parse($task->inicio); // para editar debe haber una dif 1 mas
$ffin = Carbon::parse($task->fin); // para editar debe haber una dif 1 mas

$inicio = $hoy->diffInDays($finicio) * ($hoy->diff($finicio)->invert? -1: 1);

$fin = $hoy->diffInDays($ffin) * ($hoy->diff($ffin)->invert? -1: 1);
?>

@extends('layouts.content.default.form',[
    'title' => 'Edición de tarea',
    'titlelist' => 'Acciones',
    'titlebody' => 'Requisito '.$task->requirement->numero,
    'actividades' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/tasks">Tareas</a></li>
<li class="breadcrumb-item"><a href="/tasks/{{$task->id}}">{{$task->requirement->norm->codigo.' - '.$task->requirement->numero}}</a></li>
<li class="breadcrumb-item active" aria-current="page">Edición de tarea</li>
@endpush

@section('list')
<ol class="list-unstyled">
    <li><a href="/tasks/{{$task->id}}">Ver tarea</a></li>
    <li><a href="/tasks">Todas las tareas</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('tasks.update',[$task->id])}}" method="Post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('PUT')}}
    
    <div class="form-group">
        <label for="norm">Norma</label>
        <select v-model="selected_norm" @change="loadRequirements" id="norm" data-old="{{ old('norm_id')?? $task->requirement->norm_id }}"name="norm_id" class="form-control{{ $errors->has('norm_id') ? ' is-invalid' : '' }}">
            <option value="">Selecciona la norma</option>
            @foreach($norms as $norm)
            <option value="{{ $norm->id }}">
                {{ substr($norm->codigo.' '.$norm->titulo, 0, 100)."..." }}
            </option>
            @endforeach
        </select>
        <small class="text-danger">{{ $errors->first('norm_id') }}</small>
    </div>
    <div class="form-group">
        <label for="requirement">Requisito</label>
        <select v-model="selected_requirement" id="requirement" data-old="{{ old('requirement_id')?? $task->requirement_id }}" name="requirement_id" class="form-control{{ $errors->has('requirement_id') ? ' is-invalid' : '' }}">
            <option value="">Selecciona un requisito</option>
            <option v-for="(requirement, index) in requirements" v-bind:value="index">
                @{{requirement}}
            </option>
        </select>

        @if ($errors->has('requirement_id'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('requirement_id') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        <label for="task-descripcion">Descripcion:</label>
        <textarea class="form-control" placeholder="Descripción del ciclo" name="descripcion" id="task-descripcion" rows="3">{{$task->descripcion}}</textarea>
    </div>
    @if($task->programable)
    <div id="fechas" class="form-group">
        @if($inicio>0)
        <label for="task-inicio">Rango de fechas:</label>
        <div class="input-daterange datepicker row align-items-center">
            <div class="col">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                        </div>
                        <input name="inicio" class="form-control @if($errors->first('inicio')) is-invalid @endif" autocomplete="off" id="inicio" placeholder="Fecha de inicio" type="text" required value="{{ old('inicio', Carbon::parse($task->inicio)->format('d/m/Y')) }}">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                        </div>
                        <input name="fin" class="form-control @if($errors->first('fin')) is-invalid @endif" autocomplete="off" id="fin" placeholder="Fecha final" type="text" required value="{{ old('fin', Carbon::parse($task->fin)->format('d/m/Y')) }}">
                    </div>
                </div>
            </div>
        </div>
        @elseif($fin>=0)
        <div class="form-group">
            <label for="task-fin">Ultimo día de aplicación de la tarea:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                </div>
                <input name="fin" class="form-control datepicker" placeholder="Fecha final" type="text" value="{{ old('fin', Carbon::parse($task->fin)->format('d/m/Y')) }}">
            </div>
        </div>
        @else
        <div class="card mb-3"> <!-- Borde primario primary danger warning -->
            <div class="card-body text-center"> <!-- Texto primario -->
                <h3>Lo sentimos</h3>
                <h4>No se pueden modificar las fechas de tareas pasadas</h4>
            </div>
        </div>
        @endif
    </div>
    @else
    <div id="archivo" class="form-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="evidencia" lang="es" accept=".jpg,.png" required>
            <label class="custom-file-label" for="customFile">Evidencia</label>
        </div>
        <small class="text-danger">{{ $errors->first('evidencia') }}</small>
    </div>
    @endif

    <div class="form-group">
        <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
    </div>
</form>
@endsection

@push('js')
<script src="{{ asset('js') }}/app.js"></script>
@endpush

@if($task->programable)
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
            var fecha = new Date('{{Carbon::parse($task->inicio)->format("Y/m/d")}}');
            @if($inicio>0) fecha = Date(moment().toDate()); @endif
            // Variables
            var $datepicker = $('.datepicker');
    
            // Methods
            function init($this) {
                var options = {
                    disableTouchKeyboard: true,
                    autoclose: false,
                    useCurrent: false,//2020/11/25
                    startDate: fecha,
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
    //
</script>
@endpush
@endif