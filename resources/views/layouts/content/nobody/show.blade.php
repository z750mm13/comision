@extends('layouts.app')

@section('content')
@include('users.partials.header', [
        'bg' => $bg,
        'title' => $title,
        'description' => $description,
        'class' => 'col-lg-7',
        'image' => $image
])
<div class="container-fluid mt--7">
<div class="row">
  <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
    <div class="card card-profile shadow">
      <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
        <h4 class="font-italic">{{$titlelist}}</h4>
      </div>
      <div class="card-body pt-0 pt-md-4">
        @yield('list')
      </div>
    </div>
  </div>

  <div class="col-xl-8 order-xl-1">
  </div>

</div>
@include('layouts.footers.auth')
</div>

@endsection