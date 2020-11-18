@extends('layouts.content.default.form',[
    'title' => 'Agregar meta',
    'titlelist' => 'Acciones',
    'titlebody' => 'Meta',
    'normativa' => 'active',
    'nodelete' => 'no'
])

@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/goals?cycle_id={{$cycle_id}}">Metas</a></li>
<li class="breadcrumb-item active" aria-current="page">Agregar meta</li>
@endpush

@section('list')
<ol class="list-unstyled">
    <li><a href="/goals?cycle_id={{$cycle_id}}">Ver metas</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('goals.store')}}" method="Post">
    {{csrf_field()}}
    {{method_field('POST')}}
    
    <div class="form-group">
        <label for="norm">Norma</label>
        <select v-model="selected_norm" @change="loadRequirements" id="norm" used-data="goals" data-old="{{ old('norm_id') }}"name="norm_id" class="form-control{{ $errors->has('norm_id') ? ' is-invalid' : '' }}">
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
        <select v-model="selected_requirement" id="requirement" data-old="{{ old('requirement_id') }}" name="requirement_id" class="form-control{{ $errors->has('requirement_id') ? ' is-invalid' : '' }}">
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
    <input type="text" id="norm-cycle_id" name="cycle_id" required value="{{ Tools\Query\Reviews::getCurrentCycle() }}" hidden/>

    <div class="form-group">
        <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
    </div>
</form>
@endsection

@push('js')
<script src="{{ asset('js') }}/app.js"></script>
@endpush