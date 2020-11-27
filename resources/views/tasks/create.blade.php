@extends('layouts.content.default.form',[
    'title' => 'Agregar tarea',
    'titlelist' => 'Acciones',
    'titlebody' => 'Tarea',
    'actividades' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/tasks">Tareas</a></li>
<li class="breadcrumb-item active" aria-current="page">Creación de tarea</li>
@endpush

@section('list')
<ol class="list-unstyled">
    <li><a href="/tasks">Ver tareas</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('tasks.store')}}" method="Post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('POST')}}
    
    @if ($requirement_id == null)
    <div class="form-group">
        <label for="norm">Norma</label>
        <select v-model="selected_norm" @change="loadRequirements" id="norm" data-old="{{ old('norm_id') }}" name="norm_id" class="form-control{{ $errors->has('norm_id') ? ' is-invalid' : '' }}" required>
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
        <select v-model="selected_requirement" id="requirement" data-old="{{ old('requirement_id') }}" name="requirement_id" class="form-control{{ $errors->has('requirement_id') ? ' is-invalid' : '' }}" required>
            <option value="">Selecciona un requisito</option>
            <option v-for="(requirement, index) in requirements" v-bind:value="index">
                @{{requirement}}
            </option>>
        </select>

        @if ($errors->has('requirement_id'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('requirement_id') }}</strong>
            </span>
        @endif
    </div>
    @else
    <div class="form-group">
        <input type="hidden" class="form-control" name="requirement_id" value="{{$requirement_id}}">
    </div>
    @endif

    <div class="form-group">
        <label for="task-descripcion">Descripcion:</label>
        <textarea class="form-control" placeholder="Descripción del ciclo" name="descripcion" id="task-descripcion" rows="3" required></textarea>
    </div>

    <div class="form-group">
        <label for="programable">Pogramable:</label>
        <br>
        <label class="custom-toggle">
            <input id="programable" name="programable" type="checkbox">
            <span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Si"></span>
        </label>
    </div>
    <div id="fechas" class="form-group" style="display: none;">
        <label for="validity-inicio">Rango de fechas:</label>
        <div class="input-daterange datepicker row align-items-center">
            <div class="col">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                        </div>
                        <input name="inicio" class="form-control @if($errors->first('inicio')) is-invalid @endif" autocomplete="off" id="inicio" placeholder="Fecha de inicio" type="text">
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                        </div>
                        <input name="fin" class="form-control @if($errors->first('fin')) is-invalid @endif" autocomplete="off" id="fin" placeholder="Fecha final" type="text">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="archivo" class="form-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="customFile" name="evidencia" lang="es" accept=".jpg,.png" required>
            <label class="custom-file-label" for="customFile">Evidencia</label>
        </div>
        <small class="text-danger">{{ $errors->first('evidencia') }}</small>
    </div>

    <div class="form-group">
        <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
    </div>
</form>
@endsection

@push('js')
<script src="{{ asset('js') }}/app.js"></script>
<script src="{{ asset('argon') }}/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="{{ asset('argon') }}/vendor/bootstrap-datepicker/dist/locales/bootstrap-datepicker.es.min.js"></script>
<script src="{{ asset('argon') }}/vendor/moment/min/moment.min.js"></script>
<script>
    $(document).ready(function() {
        let btnProgramable = $('#programable');
        btnProgramable.click(function () {
            if(btnProgramable.is(":checked")){
                $('#inicio').prop('required',true);
                $('#fin').prop('required',true);
                $('#customFile').prop('required',false);
                $('#customFile').val('');
                $('#fechas').show('fast','linear','slow');
                $('#archivo').hide('fast','linear','slow');
            } else {
                $('#inicio').prop('required',false);
                $('#fin').prop('required',false);
                $('#inicio').val('');
                $('#fin').val('');
                $('#customFile').prop('required',true);
                $('#fechas').hide('fast','linear','slow');
                $('#archivo').show('fast','linear','slow');
            }
        });
    });
</script>
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
                    startDate: Date(moment().toDate())
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