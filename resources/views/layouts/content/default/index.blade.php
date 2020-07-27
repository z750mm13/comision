@extends('layouts.app')
@section('title', 'Cordinacion')

@section('content')
@include('users.partials.header', [
        'bg' => $bg,
        'title' => $title,
        'descriptions' => $descriptions,
        'class' => 'col-lg-7',
        'image' => $image
    ])
<div class="container-fluid mt--7">
<div class="col-xl-12 order-xl-1">
  <div class="card bg-white shadow">
      <div class="card-header bg-white border-0">
          <div class="row align-items-center">
            @if(isset($button) && $button)
              <div class="col-md-3 offset-md-9 mt--5">
                <a class="btn btn-primary btn-lg" href="{{$urlbutton}}" role="button">{{$button}}</a>
              </div>
            @endif
              <h3 class="col-12 mb-0">{{ $titlebody }}</h3>
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