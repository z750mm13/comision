<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="/">
              <img src="{{ asset('argon') }}/img/brand/Logo.png" class="navbar-brand-img" alt="...">
            </a>
            <div class="ml-auto">
              <!-- Sidenav toggler -->
              <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </div>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    @if(Auth::user())
                    @if(Auth::user()->tipo == 'Integrante'||Auth::user()->admin)
                    @if(Auth::user()->cordinates->count()||Auth::user()->admin)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                          <i class="ni ni-tv-2 text-primary"></i>
                          <span class="nav-link-text">{{ __('Panel') }}</span>
                        </a>
                    </li>
                    @if(Auth::user()->admin)
                    <li class="nav-item">
                      <a class="nav-link {{ $personal ?? '' }}" href="#navbar-personal" data-toggle="collapse" role="button" aria-expanded="{{ isset($personal)? 'true':'false' }}" aria-controls="navbar-personal">
                        <i class="fas fa-user text-info"></i>
                        <span class="nav-link-text">{{ __('Personal de la comisión') }}</span>
                      </a>
                      <div class="collapse {{ isset($personal)? 'show':'' }}" id="navbar-personal">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                              <a href="{{ route('elements.index') }}" class="nav-link">{{ __('Integrantes de la comisión') }}</a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('helpers.index') }}" class="nav-link">{{ __('Apoyo de la comisión') }}</a>
                          </li>
                          <hr class="my-3">
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('cordinates.index') }}">
                                  {{ __('Roles') }}
                              </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link {{ $normativa ?? '' }}" href="#navbar-normativa" data-toggle="collapse" role="button" aria-expanded="{{ isset($normativa)? 'true':'false' }}" aria-controls="navbar-examples">
                            <i class="fas fa-book text-green"></i>
                            <span class="nav-link-text">{{ __('Normativa') }}</span>
                        </a>
    
                        <div class="collapse {{ isset($normativa)? 'show':'' }}" id="navbar-normativa">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('norms.index') }}">
                                        {{ __('Normas') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('requirements.index') }}">
                                        {{ __('Requisitos') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $instalaciones ?? '' }}" href="#navbar-intalaciones" data-toggle="collapse" role="button" aria-expanded="{{ isset($instalaciones)? 'true':'false' }}" aria-controls="navbar-examples">
                            <i class="fas fa-city text-yellow"></i>
                            <span class="nav-link-text">{{ __('Instalaciones') }}</span>
                        </a>
    
                        <div class="collapse {{ isset($instalaciones)? 'show':'' }}" id="navbar-intalaciones">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('areas.index') }}">
                                        {{ __('Áreas') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('subareas.index') }}">
                                        {{ __('Subáreas') }}
                                    </a>
                                </li>
                                @if(Auth::user()->admin)
                                <hr class="my-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('guards.index') }}">
                                        {{ __('Encargados de las áreas') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('targets.index') }}">
                                        {{ __('Propiedades de área') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('arrays.index') }}">
                                        {{ __('Actividades de área') }}
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link {{ $actividades ?? '' }}" href="#navbar-actividades" data-toggle="collapse" role="button" aria-expanded="{{ isset($actividades)? 'true':'false' }}" aria-controls="navbar-examples">
                            <i class="ni ni-archive-2 text-orange"></i>
                            <span class="nav-link-text">{{ __('Actividades') }}</span>
                        </a>
    
                        <div class="collapse {{ isset($actividades)? 'show':'' }}" id="navbar-actividades">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('reviews.index') }}">
                                        {{ __('Realizar evaluación') }}
                                    </a>
                                </li>
                                @if(Auth::user()->admin)
                                <li class="nav-item">
                                    <a href="#nav-recorridos" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="nav-recorridos">
                                        <i class="fas fa-walking text-orange"></i>
                                        <span class="nav-link-text">{{__('Recorridos')}}</span>
                                    </a>
                                    <div class="collapse show" id="nav-recorridos">
                                      <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('questionnaires.index') }}">
                                                {{ __('Cuestionarios') }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('validities.index') }}">
                                                {{ __('Programación') }}
                                            </a>
                                        </li>
                                      </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#navbar-riesgos" class="nav-link collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-multilevel">
                                        <i class="fa fa-qrcode text-orange"></i>
                                        <span class="nav-link-text">{{__('Riesgos')}}</span>
                                    </a>
                                    <div class="collapse" id="navbar-riesgos" style="">
                                      <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('activities.index') }}">
                                                {{ __('Actividades') }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('evaluations.index') }}">
                                                {{ __('Programación') }}
                                            </a>
                                        </li>
                                      </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#navbar-multilevel" class="nav-link collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-multilevel">
                                        <i class="fas fa-handshake text-orange"></i>
                                        <span class="nav-link-text">{{__('Compromisos')}}</span>
                                    </a>
                                    <div class="collapse" id="navbar-multilevel" style="">
                                      <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('commitments.index') }}">
                                                {{ __('Promesas') }}
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('compliments.index') }}">
                                                {{ __('Cumplimientos') }}
                                            </a>
                                        </li>
                                      </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cycles.index') }}">
                                        {{ __('Ciclos') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('reviews.index') }}">
                                        {{ __('Metas normativas') }}
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </li>
                    @if(Auth::user()->admin)
                    <li class="nav-item">
                      <a class="nav-link {{ $estadistica ?? '' }}" href="#navbar-estadistica" data-toggle="collapse" role="button" aria-expanded="{{ isset($estadistica)? 'true':'false' }}" aria-controls="navbar-estadistica">
                        <i class="ni ni-chart-pie-35 text-red"></i>
                        <span class="nav-link-text">{{ __('Estadísticas') }}</span>
                      </a>
                      <div class="collapse {{ isset($estadistica)? 'show':'' }}" id="navbar-estadistica">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                              <a href="{{ __('/statistics/reviews?problema=on') }}" class="nav-link">{{ __('Recorridos') }}</a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('helpers.index') }}" class="nav-link">{{ __('Áreas') }}</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('cordinates.index') }}">
                                  {{ __('Normas') }}
                              </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    @endif
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                          <i class="ni ni-tv-2 text-primary"></i>
                          <span class="nav-link-text">{{ __('Panel') }}</span>
                        </a>
                    </li>
                    @endif
                    @elseif(Auth::user()->tipo == 'Apoyo')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                          <i class="ni ni-tv-2 text-primary"></i>
                          <span class="nav-link-text">{{ __('Inicio') }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('commitments.index') }}">
                          <span class="nav-link-text">{{ __('Compromisos prometidos') }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('compliments.index') }}">
                          <span class="nav-link-text">{{ __('Compromisos cumplidos') }}</span>
                        </a>
                    </li>
                    @endif
                    @endif
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading text-muted">Documentación</h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('docs') }}/Manual.pdf">
                            <i class="fas fa-question"></i>
                          <span class="nav-link-text">Ayuda</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>