<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header d-flex align-items-center">
            <a class="navbar-brand" href="{{ route('home') }}">
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                          <i class="ni ni-tv-2 text-primary"></i>
                          <span class="nav-link-text">{{ __('Panel') }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link {{ $personal ?? '' }}" href="#navbar-personal" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-personal">
                        <i class="fas fa-user text-success"></i>
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
                          <li class="dropdown-divider"></li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('cordinates.index') }}">
                                  {{ __('Roles') }}
                              </a>
                          </li>
                        </ul>
                      </div>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link {{ $normativa ?? '' }}" href="#navbar-normativa" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                            <i class="fas fa-book text-info"></i>
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
                        <a class="nav-link {{ $instalaciones ?? '' }}" href="#navbar-intalaciones" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                            <i class="fas fa-city text-orange"></i>
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
                                <li class="dropdown-divider"></li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('guards.index') }}">
                                        {{ __('Encargados de las áreas') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('targets.index') }}">
                                        {{ __('Asignacion del tipo a las áreas') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link {{ $actividades ?? '' }}" href="#navbar-actividades" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-examples">
                            <i class="ni ni-archive-2 text-pink"></i>
                            <span class="nav-link-text">{{ __('Actividades') }}</span>
                        </a>
    
                        <div class="collapse {{ isset($actividades)? 'show':'' }}" id="navbar-actividades">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('questionnaires.index') }}">
                                        {{ __('Cuestionarios de evaluación') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('validities.index') }}">
                                        {{ __('Programa de evaliuaciones') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('reviews.index') }}">
                                        {{ __('Realizar evaluación') }}
                                    </a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('commitments.index') }}">
                                        {{ __('Compromisos prometidos') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('compliments.index') }}">
                                        {{ __('Compromisos cumplidos') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading text-muted">Documentación</h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('docs') }}/Manual.pdf">
                          <i class="ni ni-spaceship"></i>
                          <span class="nav-link-text">Ayuda</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>