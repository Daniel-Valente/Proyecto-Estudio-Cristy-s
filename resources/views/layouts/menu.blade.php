<nav class="nav-menu d-none d-lg-block">
    <ul>
        @if(\Auth::id())
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('orden.index') }}">Mis Ordenes</a></li>
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
