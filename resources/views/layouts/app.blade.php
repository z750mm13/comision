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