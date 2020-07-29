@extends('layouts.app')

@section('title', 'Agregar cumplimiento')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-6">
        <form action="{{route('compliments.store')}}" method="Post" enctype="multipart/form-data">
            {{csrf_field()}}
            {{method_field('POST')}}

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
            <div class="form-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="evidencia" lang="es" accept=".jpg,.png">
                <label class="custom-file-label" for="customFile">Evidencia</label>
            </div>
                <small class="text-danger">{{ $errors->first('evidencia') }}</small>
            </div>
            <div class="form-group">
                <input type="submit"  class="btn btn-primary " name="submit"  value="Guardar">
            </div>

        </form>
    </div>
    <aside class="col-md-2 offset-md-4">
        <div class="p-4">
        <h4 class="font-italic">Acciones</h4>
            <ol class="list-unstyled">
                <li><a href="/compliments">Ver cumplimientos</a></li>
            </ol>
        </div>
    </aside>
</div>
</div>
@endsection