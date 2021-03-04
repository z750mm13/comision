@extends('layouts.app')

@section('content')
@include('users.partials.header', [
        'title' => $title,
        'descriptions' => $descriptions,
        'class' => 'col-lg-7',
        'image' => $image
    ])
<div class="container-fluid mt--7">
<div class="col-xl-12 order-xl-1">
  <div class="card {{!isset($pbutton)?'bg-secondary':''}} shadow">
      <div class="card-header border-0">
        <h3 class="mb-0">{{ $titlebody }}</h3>
      </div>
      @yield('precardbody')
      @if(!isset($pbutton))<div class="card-body"> @endif
        @yield('bodycontent')
      @if(!isset($pbutton))</div>@endif
  </div>
</div>

@include('layouts.footers.auth')
</div>
@endsection