<li class="drop-down">
    <a href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span>Usuarios</span>
    </a>
    <ul>
        <li>
            <a class="dropdowm-item" href="{{ route('tipo.index') }}">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Rango de Usuarios
            </a>
        </li>
        <li>
            <a class="dropdowm-item" href="{{ route('usuario.index') }}">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Todos los Usuarios
            </a>
        </li>
        <li>
            <a class="dropdowm-item" href="{{ route('usersJson') }}">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Usuarios Json
            </a>
        </li>
    </ul>
</li>
