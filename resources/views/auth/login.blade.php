@extends('layouts.app')

@section('content')
    @include('layouts.headers.guest')

    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow-sm card-border">
                    <div class="card-header bg-transparent pb-5">
                        <h3>Inicio de sesión</h3>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-black mb-4">
                            <small>
                                {{ __('Si no tienes una cuenta puedes ') }} <a href="{{ route('register') }}">{{ __('Solicitarla aquí') }}</a>
                            </small>
                            <br>
                            <small>
                                <strong>Comisión de Seguridad e Higiene del</strong>
                                <br><strong>Instituto Nacional de México Campus Teposcolula</strong>
                            </small>
                        </div>
                        <form role="form" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-gray-dark"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Correo electrónico') }}" type="email" name="email" value="{{ old('email') }}" required autofocus>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-gray-dark"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="pass" placeholder="{{ __('Contraseña') }}" type="password" required>
                                    <div class="input-group-append" id="eye">
                                      <span class="input-group-text" id="eyec"><i class="fas fa-eye"></i></span>
                                    </div>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" name="remember" id="customCheckLogin" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customCheckLogin">
                                    <span class="text-muted text-gray-dark">{{ __('Recordarme') }}</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">{{ __('Iniciar  sesión') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-darck">
                                <small>{{ __('¿Olvidó su contraseña?') }}</small>
                            </a>
                        @endif
                    </div>
                    <div class="col-6 text-right">
                        <a href="{{ route('register') }}" class="text-darck">
                            <small>{{ __('Solicitar una cuenta') }}</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
<script>
    $("#eye").click(function(){
        let pass = $('#pass');
        let eye = $('#eyec');
        if(pass.prop('type') === 'password') {
            eye.addClass('text-gray-dark');
            pass.prop('type', 'text');
        } else {
            eye.removeClass('text-gray-dark');
            pass.prop('type', 'password');
        }
   });
 </script>
@endpush