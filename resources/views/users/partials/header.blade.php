<div class="header pb-8 pt-5 pt-lg-6 d-flex align-items-center" style="@if(isset($bg) && $bg)background-image: url({{$bg}});@endif background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            @if(isset($image) && $image)
            <div class="col-lg-3 order-lg-2">
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
                </div>
                @endif
            </div>
            @else
            <div class="col-md-12 {{ $class ?? '' }}">
                <h1 class="display-2 text-white">{{ $title }}</h1>
                @if (isset($descriptions) && $descriptions)
                <div class="mb-5">
                    @foreach($descriptions as $description)
                            <p class="text-white">{{ $description }}</p>
                    @endforeach
                </div>
                @endif
            </div>
            @endif
        </div>
    </div>
</div> 