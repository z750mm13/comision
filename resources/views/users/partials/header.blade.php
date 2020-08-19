<div class="header pb-8 pt-4 d-flex align-items-center" style="@if(isset($bg) && $bg)background-image: url({{$bg}});@endif background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-12">
                <h6 class="h2 text-white d-inline-block mb-0"></h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        @stack('bread')
                    </ol>
                </nav>
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