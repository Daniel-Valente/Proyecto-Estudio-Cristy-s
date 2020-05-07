<nav class="nav-menu d-none d-lg-block">
    <ul>
        @if(\Auth::id())
            <li><a href="{{ route('home') }}">Home</a></li>
            @if (\Gate::allows('administrador'))
            <li><a href="{{ route('orden.index') }}">pedidos</a></li>
            <li><a href="{{ route('home') }}">Pagos</a></li>
            @else
                <li><a href="{{ route('cita.index') }}">Mi Cita</a></li>
                @include('layouts.historial-menu')
            @endif
            @include('layouts.user-menu')
        @else
            <li><a href="#resume">Resume</a></li>
            <li><a href="#services">Servicios</a></li>
            <li><a href="#portfolio">Portafolio</a></li>
            <li><a href="#about">Acerca De</a></li>
            <a href="{{ route('login') }}">Acceder</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Registro</a>
            @endif
        @endif
    </ul>
</nav><!-- .nav-menu -->
