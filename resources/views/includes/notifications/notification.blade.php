<li class="nav-item dropdown">
    <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fa fa-bell-o"></i>
        <span class="badge badge-warning navbar-badge">{{$conteo}}</span>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">{{$conteo}} 
            @if ($conteo == 1)
                Notificacion

            @else
                Notificaciones

            @endif
            </span>
        <div class="dropdown-divider"></div>
        <a href="{{route('visita.lista')}}" class="dropdown-item">
            <i class="fa fa-envelope mr-2"></i> {{$visita}} 
            @if ($visita == 1)
                Solicitud de visita

                @else
                Solicitudes de visita

            @endif
            <span class="float-right text-muted text-sm"></span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="{{route('oracion.lista')}}" class="dropdown-item">
            <i class="fas fa-pray mr-2"></i>   {{$oracion}} 
            @if ($oracion == 1)
                Solicitud de oracion

                @else
                Solicitudes de oracion

            @endif
            <span class="float-right text-muted text-sm"></span>
        </a>
        <div class="dropdown-divider"></div>
       
    </div>
    
</li>