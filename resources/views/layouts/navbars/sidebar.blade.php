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
                            <a href="{{ route('elements.index') }}" class="nav-link">
                                <i class="fas fa-user-friends text-info"></i>
                                <span>{{ __('Integrantes de la comisión') }}</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{ route('helpers.index') }}" class="nav-link">
                                <i class="fas fa-users-cog text-info"></i>
                                <span>{{ __('Apoyo de la comisión') }}</span>
                            </a>
                          </li>
                          <hr class="my-3">
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('cordinates.index') }}">
                                <i class="fas fa-id-card text-info"></i>
                                <span>{{ __('Roles') }}</span>
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
                                        <i class="fas fa-book text-green"></i>
                                        <span>{{ __('Normas') }}</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('requirements.index') }}">
                                        <i class="fas fa-scroll text-green"></i>
                                        <samp>{{ __('Requisitos') }}</samp>
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
                                        <i class="fas fa-city text-yellow"></i>
                                        <samp>{{ __('Áreas') }}</samp>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('subareas.index') }}">
                                        <i class="fas fa-building text-yellow"></i>
                                        <span>{{ __('Subáreas') }}</span>
                                    </a>
                                </li>
                                @if(Auth::user()->admin)
                                <hr class="my-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('guards.index') }}">
                                        <i class="fas fa-user-tag text-yellow"></i>
                                        <span>{{ __('Encargados de las áreas') }}</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('targets.index') }}">
                                        <i class="fas fa-clinic-medical text-yellow"></i>
                                        <span>{{ __('Propiedades de área') }}</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('arrays.index') }}">
                                        <i class="fas fa-people-carry text-yellow"></i>
                                        <span>{{ __('Actividades de área') }}</span>
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
                                        <i class="fas fa-tasks text-orange"></i>
                                        <span>{{ __('Realizar evaluación') }}</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('exams.index') }}">
                                        <i class="far fa-square text-orange"></i>
                                        <samp>{{ __('Realizar matriz') }}</samp>
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
                                                <i class="fas fa-edit text-orange"></i>
                                                <samp>{{ __('Cuestionarios') }}</samp>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('validities.index') }}">
                                                <i class="fas fa-clock text-orange"></i>
                                                <samp>{{ __('Programación') }}</samp>
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
                                                <i class="fas fa-people-carry text-orange"></i>
                                                <span>{{ __('Actividades') }}</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('evaluations.index') }}">
                                                <i class="fas fa-clock text-orange"></i>
                                                <span>{{ __('Programación') }}</span>
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
                                                <i class="fas fa-handshake text-orange"></i>
                                                <span>{{ __('Promesas') }}</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('compliments.index') }}">
                                                <i class="fas fa-child text-orange"></i>
                                                <samp>{{ __('Cumplimientos') }}</samp>
                                            </a>
                                        </li>
                                      </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('tasks.index') }}">
                                        <i class="fas fa-check text-orange"></i>
                                        <samp>{{ __('Cumplimiento normativo') }}</samp>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('goals.index') }}">
                                        <i class="fas fa-flag-checkered text-orange"></i>
                                        <samp>{{ __('Metas normativas') }}</samp>
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
                            <a href="{{ __('/statistics/reviews?problema=on') }}" class="nav-link">
                                <i class="fas fa-walking text-red"></i>
                                <span>{{ __('Recorridos') }}</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="/statistics/norms" class="nav-link">
                                <i class="fas fa-book text-red"></i>
                                <samp>{{ __('Normas') }}</samp>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('statistics.matrix.index') }}">
                                <i class="fa fa-qrcode text-red"></i>
                                <span>{{ __('Matriz de riesgos') }}</span>
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