<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Comisión SH'). ((isset($title) && $title)? ' - '. $title : '') }}</title>
        <!-- Favicon -->
        <link rel="icon" href="{{ asset('argon') }}/img/brand/favicon.png" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        {{--<link rel="stylesheet" href="{{ asset('assets') }}/fonts/css?family=Open+Sans:300,400,600,700">--}}
        <!-- Icons -->
        <link rel="stylesheet" href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" type="text/css">
        <link rel="stylesheet" href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
        <!-- Page plugins -->
        <link rel="stylesheet" href="{{ asset('argon') }}/vendor/sweetalert2/dist/sweetalert2.min.css">
        @stack('css')
        <!-- Argon CSS -->
        <link rel="stylesheet" href="{{ asset('argon') }}/css/argon.css?v=1.1.0" type="text/css">
    </head>
    <body class="{{ $class ?? '' }}">
        <div id="app">
        @include('messages.modals',[
            'success'=>session()->has('success')?session()->get('success'):null,
            'error'=>session()->has('error')?session()->get('error'):null
        ])
        @auth()
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            @include('layouts.navbars.sidebar')
        @endauth
        
            <div class="main-content">
                @include('layouts.navbars.navbar')
                @yield('content')
            </div>

            @auth
            <div class="modal fade" id="modal-soporte" tabindex="-1" role="dialog" aria-labelledby="modal-default" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title" id="modal-title-default">Soporte técnico</h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h1 class="display-1 text-center" style="color:#52757F"><i class="fas fa-headset"></i></h1>
                                <p>El desarrollo del sistema fue en la modalidad de residencia profesional por lo que el funcionamiento del mismo solo está limitado a los requisitos recabados para ello.</p>
                                <p>Para ponerse en contacto con el desarrollador dejamos a su dispocición los siguentes medios:</p>
                                <div class="px-lg-6">
                                    <ul class="list-unstyled my-4">
                                        <li class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <!-- Avatar -->
                                                    <div class="icon icon-xs icon-shape bg-gradient-primary shadow rounded-circle text-white">
                                                        <i class="ni ni-email-83"></i>
                                                    </div>
                                                </div>
                                                <div class="col ml--1">
                                                    <h4 class="mb-0">
                                                        <a href="mailto:331.regino@gmai.com">331.Regino@gmai.com</a>
                                                    </h4>
                                                    <span><h4><a href="mailto:maurir_@hotmail.com">Maurir_@hotmail.com</a></h4></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="icon icon-xs icon-shape bg-gradient-primary shadow rounded-circle text-white">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </div>
                                                </div>
                                                <div class="col ml--3">
                                                    <h4 class="pl-2"><a href="https://www.facebook.com/mauricio.hasselo" target="_blank">Mauricio Hasselo</a></h4>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Cerrar</button>
                          </div>
                        </div>
                    </div>
              </div>
              @endauth
        @guest()
            @include('layouts.footers.guest')
        @endguest
        </div>
        <!-- Argon Scripts -->
        <!-- Core -->
        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/js-cookie/js.cookie.js"></script>
        <script src="{{ asset('argon') }}/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <!-- Optional JS -->
        @stack('js')
        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.1.0"></script>
        @stack('postjs')
    </body>
</html>