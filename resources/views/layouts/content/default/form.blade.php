@extends('layouts.app')

@section('content')
@include('users.partials.header', [
        'bg' => $bg,
        'title' => $title,
        'class' => 'col-lg-7'
    ])
<div class="container-fluid mt--7">
<div class="row">
  <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
    <div class="card card-profile shadow">
      <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
        <h4 class="font-italic">{{$titlelist}}</h4>
      </div>
      <div class="card-body pt-0 pt-md-4">
        <div class="p-4">
          @yield('list')
        </div>
      </div>
    </div>
  </div>

  <div class="col-xl-8 order-xl-1">
    <div class="card bg-secondary shadow">
      <div class="card-header bg-white border-0">
          <div class="row align-items-center">
            @if(isset($button) && $button)
              <div class="col-md-4 offset-md-8 mt--5">
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
</div>
@include('layouts.footers.auth')
</div>
@endsection