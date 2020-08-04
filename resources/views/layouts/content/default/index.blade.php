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
          <div class="row">
            <div class="col-6">
              <h3 class="mb-0">{{ $titlebody }}</h3>
            </div>
            @if((Auth::user()->tipo == 'Apoyo' || Auth::user()->admin) && (isset($urlbutton) && $urlbutton) || (isset($pbutton) && $pbutton))
                @if (isset($button) && $button)
                <div class="col-6 text-right mt--5">
                <a class="btn btn-primary btn-lg" href="{{$urlbutton}}/create" role="button">{{$button}}</a>
                @else
                <div class="col-6 text-right">
                @endif
                @if(!isset($nodelete))
                <a href="{{isset($urlbutton)? $urlbutton.'/deleted':'#'}}" class="btn btn-sm {{$pclassb ?? 'btn-danger'}} btn-round btn-icon" data-toggle="tooltip" data-original-title="{{$titlebody}}"
                @if(!isset($urlbutton))
                onclick="
                  let result =confirm('Esta seguro de restaurar?');
                  if(result){
                    event.preventDefault();
                    document.getElementById('restore-form').submit();
                  }
                  "
                @endif
                >
                  <span class="btn-inner--icon"><i class="{{$piconb ?? 'fas fa-trash'}}"></i></span>
                  <span class="btn-inner--text">{{$pbutton ?? 'Eliminados'}}</span>
                </a>
                @endif
              </div>
            @endif
          </div>
      </div>
      @if(!isset($pbutton))<div class="card-body"> @endif
        @yield('bodycontent')
      @if(!isset($pbutton))</div>@endif
  </div>
</div>

@include('layouts.footers.auth')
</div>
@endsection