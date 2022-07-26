@extends('layouts.content.default.form',[
    'title' => 'Agregar cumplimiento',
    'titlelist' => 'Acciones',
    'titlebody' => 'Cumplimiento',
    'actividades' => 'active',
    'compromisos' => 'active',
    'nodelete' => 'no'
])
@push('bread')
<li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
<li class="breadcrumb-item"><a href="/compliments">Cumplimientos</a></li>
<li class="breadcrumb-item active" aria-current="page">Agregar cumplimiento</li>
@endpush

@section('list')
<ol class="list-unstyled">
    <li><a href="/compliments">Ver cumplimientos</a></li>
</ol>
@endsection

@section('bodycontent')
<form action="{{route('compliments.store')}}" method="Post" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('POST')}}

    @if($commitment_id)
    <input type="text" name="commitment_id" hidden value="{{$commitment_id}}">
    @else
    <div class="form-group">
        <label for="requirement-norm">Compromiso:</label>
        <select name="commitment_id" id="commitment-compliment" require class="form-control  @if($errors->first('commitment_id')) is-invalid @endif" >
            <option value="0">Elije un compromiso</option>
            @foreach($commitments as $commitment)
            <option value="{{$commitment->id}}">{{substr($commitment->accion, 0, 30)}}</option>
            @endforeach
        </select>
        <small class="text-danger">{{ $errors->first('commitment_id') }}</small>
    </div>
    @endif
    <div class="form-group">
    <div class="custom-file">
        <input type="file" class="custom-file-input" name="evidencia" id="evidencia" lang="es" accept=".jpg,.png">
        <label class="custom-file-label" for="evidencia">Evidencia</label>
    </div>
        <small class="text-danger">{{ $errors->first('evidencia') }}</small>
    </div>
    <div class="form-group">
        <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
    </div>
</form>
@endsection

@push('js')
<script>
$('#evidencia').on('change',function() {
    var fileName = $(this).val();
    $(this).next('.custom-file-label').html(fileName);
})
</script>
@endpush