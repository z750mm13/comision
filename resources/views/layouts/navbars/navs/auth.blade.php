<?php
use App\User;
use App\Validity;
use App\Task;
use App\Evaluation;
use App\Publication;
use App\Commitment;
use Illuminate\Support\Facades\DB;
?>
<!-- Top navbar -->
<nav class="navbar navbar-top navbar-expand navbar-light bg-white border-bottom">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar links -->
        <a class="h4 mb-0 text-black text-uppercase d-none d-lg-inline-block" href="{{ route('home') }}">{{ __('Panel') }}</a>
        
        <ul class="navbar-nav align-items-center ml-md-auto">
          <li class="nav-item d-xl-none">
            <!-- Sidenav toggler -->
            <div class="pr-3 sidenav-toggler sidenav-toggler" data-action="sidenav-pin" data-target="#sidenav-main">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ni ni-bell-55"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
              <!-- Dropdown header -->
              <?php
              $solicitudes = User::select(DB::raw("nombre||' '||apellidos as titulo, 'Ha solicitado unirse como '||tipo as descripcion, created_at as fecha, CASE WHEN tipo='Integrante' THEN 'elements.index' ELSE 'helpers.index' END as url, null as id, 'ni ni-single-02' as icono, 'bg-gradient-green ' as color"))
              ->where('active',false);
              $recorridos = Validity::select(DB::raw("'Recorrido' as titulo, 'Se aproxima un recorrido' as descripcion, inicio as fecha, 'validities.show' as url, id, 'fas fa-walking' as icono, 'bg-gradient-orange ' as color"))
              ->where('fin','>=',now());
              $tasks = Task::select(DB::raw("'Cumplimiento normativo' as titulo, descripcion, inicio as fecha, 'tasks.show' as url, id, 'fas fa-book' as icono, 'bg-gradient-info ' as color"))
              ->where([
                ['fin','>=',now()],
                ['cumplida',false]
                ]);
              $matriz = Evaluation::select(DB::raw("'Matriz de riesgos' as titulo, 'Se aproxima la realización de la matriz' as descripcion, inicio as fecha, 'evaluations.show' as url, id, 'fa fa-qrcode ' as icono, 'bg-gradient-orange ' as color"))
              ->where('fin','>=',now());
              $publicaciones = Publication::select(DB::raw("nombre||' '||apellidos as titulo,'Ha creado una nueva publicación' as descripcion, publications.created_at as fecha, 'publications.show' as url, publications.id, 'ni ni-ungroup ' as icono, 'bg-gradient-green ' as color"))
              ->join('users', 'users.id', 'publications.user_id')
              ->where('visible',true);
              $cumplimientos = Commitment::select(DB::raw("'Cumplimiento' as titulo, 'Se aproxima la realización del cumplimiento' as descripcion, fecha_cumplimiento as fecha, 'commitments.show' as url, commitments.id, 'fas fa-check ' as icono, 'bg-gradient-orange ' as color"))
              ->leftJoin('compliments', 'compliments.commitment_id', 'commitments.id')
              ->where('compliments.id','=',null);

              $notificaciones = $publicaciones;
              if(Auth::user())
                if(Auth::user()->admin){
                  $notificaciones->union($recorridos)
                  ->union($tasks)
                  ->union($matriz)
                  ->union($solicitudes)
                  ->union($cumplimientos);
                }
              $notificaciones = $notificaciones->limit(10)->orderByDesc('fecha')->get();
              ?>
              <div class="px-3 py-3">
                <h6 class="text-sm text-muted m-0">Tienes <strong class="text-primary">{{$notificaciones->count()}}</strong> notificaciones.</h6>
              </div>
              <!-- List group -->
              @foreach($notificaciones as $notificacion)
              <div class="list-group list-group-flush">
                <a href="{{$notificacion->id?route($notificacion->url,[$notificacion->id]):route($notificacion->url)}}" class="list-group-item list-group-item-action">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <div class="icon icon-shape {{$notificacion->color??''}}text-white rounded-circle shadow">
                        <i class="{{$notificacion->icono}}"></i>
                      </div>
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <h4 class="mb-0 text-sm">{{$notificacion->titulo}}</h4>
                        </div>
                        <div class="text-right text-muted">
                          <small>{{$notificacion->fecha}}</small>
                        </div>
                      </div>
                      <p class="text-sm mb-0">{{$notificacion->descripcion}}</p>
                    </div>
                  </div>
                </a>
                @endforeach
              </div>

            </div>
          </li>
        </ul>
        
        <ul class="navbar-nav align-items-center ml-auto ml-md-0">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="{{\Tools\Img\ToServer::getFile(auth()->user()->foto)}}">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm text-black font-weight-bold">{{auth()->user()->nombre}}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-header noti-title">
                <h6 class="text-overflow m-0">¡Hola!</h6>
              </div>
              <a href="{{ route('profile.edit') }}" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Mi perfil</span>
              </a>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                <i class="ni ni-user-run"></i>
                <span>Cerrar sesión</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>