@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards',
    compact('problems', 'compliments', 'por_compliments', 'solved', 'por_solved'))
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
                        @include('components.calendar.dash',compact('calendar_validities'))
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
                        <div class="chart">
                            <!-- Chart wrapper -->
                            <canvas id="chart-sales" class="chart-canvas"></canvas>
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
                                <img class="card-img-top" img data-original="{{ asset('assets') }}/images/maps/Itste-alarcon.webp" src="{{ asset('assets') }}/images/maps/Itste-gertrudis.webp" alt="Unidad Santa Gertrudis">
                                <div class="card-body">
                                    <h5 class="h2 card-title mb-0">Santa Gertrudis</h5>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Instalaciones</h6>
                                <h2 class="mb-0">Unidad</h2>
                            </div>

                            <div class="col">
                                <ul class="nav nav-pills justify-content-end">
                                    <li class="nav-item mr-2 mr-md-0" data-toggle="map" data-target="#map-progress" data-update='alarcon' data-prefix="$" data-suffix="k">
                                        <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                                            <span class="d-none d-md-block">Alarcón</span>
                                            <span class="d-md-none">A</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" data-toggle="map" data-target="#map-progress" data-update='gertrudis' data-prefix="$" data-suffix="k">
                                        <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                                            <span class="d-none d-md-block">Santa Gertrudis</span>
                                            <span class="d-md-none">S</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('components.map.dash',[
                            'subareas' => $subareas,
                            'areas' => $areas
                            ])
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Problemas</h6>
                                <h2 class="mb-0">Total de problemas</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Chart -->
                        @include('components.chart.problems',[
                            'validities' => $validities
                        ])
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Áreas</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('areas.index') }}" class="btn btn-sm btn-primary">Ver todo</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Área</th>
                                    <th scope="col">Unidad</th>
                                    <th scope="col">Normas que aplica</th>
                                    <th scope="col">Avance</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($areas as $area)
                                <tr>
                                    <th scope="row">
                                        {{$area->nombre}}
                                    </th>
                                    <td>
                                        {{$area->area}}
                                    </td>
                                    <td>
                                        {{$area->norms}}
                                    </td>
                                    <td>
                                        46,53%
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Normas</h3>
                            </div>
                            <div class="col text-right">
                                <a href="{{ route('norms.index') }}" class="btn btn-sm btn-primary">Ver todo</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Referral</th>
                                    <th scope="col">Visitors</th>
                                    <th scope="col">Avance</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($norms as $norm)
                                <tr>
                                    <th scope="row">
                                        {{$norm->codigo}}
                                    </th>
                                    <td>
                                        1,480
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">60%</span>
                                            <div>
                                                <div class="progress">
                                                <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
@push('css')
<link  href="{{ asset('assets') }}/vendor/viewerjs/viewer.css" rel="stylesheet">
<style>
    .pictures {
      list-style: none;
      margin: 0;
      max-width: 30rem;
      padding: 0;
    }

    .pictures > li {
      border: 1px solid transparent;
      float: left;
      height: calc(100% / 3);
      margin: 0 -1px -1px 0;
      overflow: hidden;
      width: calc(100% / 3);
    }

    .pictures > li > img {
      cursor: zoom-in;
      width: 100%;
    }
</style>
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