<div class="col-md-2">
    <div class="container">
    <div class="card">
        <div class="alert alert-success" role="alert">
            Ve todos nuestros Ministerios
        </div>
        <div class="list-group">
            <a href="{{route('alabanza.web')}}" class="list-group-item list-group-item-action 
            {{ (Request::fullUrl() == route('alabanza.web')) ? 'active':''   }}">
                MINISTERIO DE ALABANZA
            </a>
            <a href="{{route('consolacion.web')}}" class="list-group-item list-group-item-action
            {{ (Request::fullUrl() == route('consolacion.web')) ? 'active':''   }}
           ">CONSOLACIÓN</a>
            <a href="{{route('intersecion.web')}}" class="list-group-item list-group-item-action
            {{ (Request::fullUrl() == route('intersecion.web')) ? 'active':''   }}
            ">INTERCESIÓN</a>
            <a href="{{route('juvenil.web')}}" class="list-group-item list-group-item-action
            {{ (Request::fullUrl() == route('juvenil.web')) ? 'active':''   }}
            ">
            JUVENIL</a>
            <a href="{{route('infantil.web')}}" class="list-group-item list-group-item-action
            {{ (Request::fullUrl() == route('infantil.web')) ? 'active':''   }}
            ">
            INFANTIL</a>
            <a href="{{route('femenil.web')}}" class="list-group-item list-group-item-action
            {{ (Request::fullUrl() == route('femenil.web')) ? 'active':''   }}
            ">
            FEMENIL</a>
            <a href="{{route('varonil.web')}}" class="list-group-item list-group-item-action
            {{ (Request::fullUrl() == route('varonil.web')) ? 'active':''   }}
            ">VARONIL</a>
            <a href="{{route('discipulado.web')}}" class="list-group-item list-group-item-action
            {{ (Request::fullUrl() == route('discipulado.web')) ? 'active':''   }}
            ">
            DISCIPULADO</a>
            <a href="{{route('convencion.web')}}" class="list-group-item list-group-item-action
            {{ (Request::fullUrl() == route('convencion.web')) ? 'active':''   }}
            ">
            CENTRO DE CONVENCIONES CRISTIANAS: LLANO CAMINO DEL CIELO</a>

        </div>
    </div>
</div>
</div>
