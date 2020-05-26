<li class="drop-down">
    <a href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span>{{ \Auth::user()->name }}</span>
    </a>
    <ul>
        <li>
            <a class="dropdowm-item" href="{{ route('usuario.show', \Auth::user()->id) }}">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Mi Perfil
            </a>
        </li>
        <li>
            <a class="dropdowm-item" href="{{ route('galeria.index') }}">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Galeria
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="/logout" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Salir
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</li>
