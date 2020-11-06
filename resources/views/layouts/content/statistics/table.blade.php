@extends('layouts.app')

@section('content')
<div class="header pb-8 pt-4 d-flex align-items-center" style=" background-size: cover; background-position: center top;">
  <!-- Mask -->
  <span class="mask bg-gradient-default opacity-8"></span>
  <!-- Header container -->
  <div class="container-fluid align-items-center">
    <div class="row">
      <div class="col-12">
        <div class="row align-items-center py-4">
          <div class="col-12">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="/home"><i class="fas fa-home"></i></a></li>
                  @stack('bread')
              </ol>
            </nav>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <h1 class="display-2 text-white">{{$title}}</h1>
        <div class="mb-3">
          <p class="text-white">{{$description}}</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid mt--7">
  <div class="col-12">
    <div class="card shadow">
        <div class="card-header border-0">
          <h3 class="mb-0">Filtros</h3>
        </div>
        <div class="card-body">
          @yield('bodycontent')
        </div>
    </div>
  </div>
  @yield('extern')
  @include('layouts.footers.auth')
</div>
@endsection