@extends('layouts.app', ['panel' => 'active'])

@section('content')
@include('users.partials.header', [
        'title' => 'Estadísticas',
        'titlebody' => '',
        'nodelete' => 'no'
    ])
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4">
                <div class="card widget-calendar">
                    <!-- Card header -->
                    <div class="card-header">
                      <div class="h5 text-muted mb-1 widget-calendar-year"></div>
                      <div class="h3 mb-0 widget-calendar-day"></div>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        @include('components.calendar.helper',compact('commitments'))
                    </div>
                </div>
            </div>
            <div class="col-xl-8 mb-5">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Vista general</h6>
                                <h2 class="text-darck mb-0">Avance total</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Chart -->
                        @include('components.chart.compliments',compact('cumplimientos', 'problemas'))
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-transparent">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="text-uppercase text-muted ls-1 mb-1">Señalización</h6>
                            <h2 class="mb-0">Mapa señalizado</h2>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="galley" class="container">
                        <div class="card-deck">
                        <div class="col-sm card">
                            <img class="card-img-top" img data-original="{{ asset('assets') }}/images/maps/Itste-alarcon.webp" src="{{ asset('assets') }}/images/maps/Itste-alarcon.webp" alt="Unidad alarcón">
                            <div class="card-body">
                                <h5 class="h2 card-title mb-0">Alarcón</h5>
                            </div>
                        </div>
                        <div class="col-sm card">
                            <img class="card-img-top" img data-original="{{ asset('assets') }}/images/maps/Itste-gertrudis.webp" src="{{ asset('assets') }}/images/maps/Itste-gertrudis.webp" alt="Unidad Santa Gertrudis">
                            <div class="card-body">
                                <h5 class="h2 card-title mb-0">Santa Gertrudis</h5>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection
@push('css')
<link  href="{{ asset('assets') }}/vendor/viewerjs/viewer.css" rel="stylesheet">
@endpush
@push('js')
<script type="module" src="{{ asset('assets') }}/vendor/viewerjs/viewer.js"></script>
<script>
window.addEventListener('DOMContentLoaded', function () {
      var galley = document.getElementById('galley');
      var viewer = new Viewer(galley, {
        url: 'data-original',
        title: function (image) {
          return image.alt + ' (' + (this.index + 1) + '/' + this.length + ')';
        },
      });
    });
</script>
@endpush