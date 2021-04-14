<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{asset('images/navbar_logo.png')}}" alt="Estacion Riquelme Navbar Logo" style="height:80px" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                @if(request()->path() === 'carta')
                    <li class="nav-item active"><a href="/" class="nav-link">Hogar</a></li>
                    @else
                <li class="nav-item active"><a href="/" class="nav-link">Hogar</a></li>
                <li class="nav-item"><a href="#normalidad" class="nav-link">Nueva Normalidad</a></li>
                <li class="nav-item"><a href="#servicios" class="nav-link">Servicios</a></li>
                <li class="nav-item"><a href="{{url('/carta')}}" class="nav-link">Carta</a></li>
                <li class="nav-item"><a href="#galeria" class="nav-link">Galeria</a></li>
                <li class="nav-item"><a href="#contacto" class="nav-link">Contacto</a></li>
                    @endif
            </ul>
        </div>
    </div>
</nav>