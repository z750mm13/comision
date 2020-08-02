@extends('layouts.app')
@section('title', 'Cordinacion')

@section('content')
@include('users.partials.header', [
        'title' => $title,
        'descriptions' => $descriptions,
        'class' => 'col-lg-7',
        'image' => $image
    ])
<div class="container-fluid mt--7">
<div class="col-xl-12 order-xl-1">
  <div class="card bg-secondary shadow">
      <div class="card-header border-0">
          <div class="row">
            <div class="col-6">
              <h3 class="mb-0">{{ $titlebody }}</h3>
            </div>
            @if((Auth::user()->tipo == 'Apoyo' || Auth::user()->admin) && isset($button) && $button)
              <div class="col-6 text-right mt--5">
                <a class="btn btn-primary btn-lg" href="{{$urlbutton}}/create" role="button">{{$button}}</a>
                <a href="{{$urlbutton}}/deleted" class="btn btn-sm btn-danger btn-round btn-icon" data-toggle="tooltip" data-original-title="Elementos eliminados">
                  <span class="btn-inner--icon"><i class="fas fa-trash"></i></span>
                  <span class="btn-inner--text">Eliminados</span>
                </a>
              </div>
            @endif
          </div>
      </div>
      <div class="card-body">
        @yield('bodycontent')
      </div>
  </div>
</div>

@include('layouts.footers.auth')
</div>
@endsection