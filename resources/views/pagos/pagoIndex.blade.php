@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Mis Pagos</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        {{ $pagos->links() }}
                        <hr>
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Fecha Pedido</th>
                                <th>Fecha Pago</th>
                                <th>Usuario</th>
                            </tr>
                            @foreach ($pagos as $pago)
                            <tr>
                                <td>{{ $pago->id }}</td>
                                <td>{{ $pago->fecha_Orden->format('d/m/Y') }}</td>
                                <td>
                                    <a href=" {{ route('orden.show', $orden->id) }} ">
                                        {{ $pago->fecha_Pago->format('d/m/Y') }}
                                    </a>
                                </td>
                                <td>{{ $pago->user->name }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
