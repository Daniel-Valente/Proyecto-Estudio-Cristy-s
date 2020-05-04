<li class="drop-down">
    <a href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span>Historial</span>
    </a>
    <ul>
        <li>
            <a class="dropdowm-item" href="{{ route('pedido.index') }}">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Pedidos
            </a>
        </li>
        <li>
            <a class="dropdowm-item" href="{{ route('pago.index') }}">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Pagos
            </a>
        </li>
    </ul>
</li>
