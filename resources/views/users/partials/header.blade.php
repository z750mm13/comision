<div class="header pb-8 pt-4 d-flex align-items-center" style="@if(isset($bg) && $bg)background-image: url({{$bg}});@endif background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-12">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                @stack('bread')
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        @if(Auth::user()->tipo == 'Apoyo' || Auth::user()->admin)
                        @if (isset($button) && $button)
                        <a href="{{$urlbutton}}/create" class="btn btn-sm btn-neutral">{{$button}}</a>
                        @endif
                        @if(!isset($nodelete))
                        <a href="{{isset($urlbutton)? $urlbutton.'/deleted':'#'}}" class="btn btn-sm btn-neutral" data-toggle="tooltip" data-original-title="{{$titlebody}}"
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
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-12 pt-5"></div>
            @if(isset($image) && $image)
            <div class="col-lg-3">
                <div class="card-profile-image">
                    <a href="#">
                        <img src="{{$image}}" class="rounded-circle">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 {{ $class ?? '' }}">
                <h1 class="display-2 text-white">{{ $title }}</h1>
                @if (isset($descriptions) && $descriptions)
                <div class="mb-5">
                    @foreach($descriptions as $description)
                        <p class="text-white">{{ $description }}</p>
                    @endforeach
                    @stack('hd')
                </div>
                @endif
            </div>
            @else
            <div class="@if(isset($hsize) && $hsize){{$hsize}}@else{{'col-md-12'}}@endif {{ $class ?? '' }}">
                <h1 class="display-2 text-white">{{ $title }}</h1>
                @if (isset($descriptions) && $descriptions)
                <div class="mb-5">
                    @foreach($descriptions as $description)
                        <p class="text-white">{{ $description }}</p>
                    @endforeach
                    @stack('hd')
                </div>
                @endif
            </div>
            @endif
        </div>
        @stack('aditional')
    </div>
</div> 