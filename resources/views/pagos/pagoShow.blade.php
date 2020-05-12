@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detalle del Pago</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Fecha Pedido</th>
                                <th>Fecha Pago</th>
                                <th>Estatus</th>
                                <th>Categoria</th>
                                <th>Total a Pagar</th>
                                <th>Cantidad Pagada</th>
                                <th>Restante</th>
                            </tr>
                            <tr>
                                <td>{{ $pago->id }}</td>
                                <td>{{ $pago->orden->fecha_Orden->format('d/m/Y') }}</td>
                                <td>{{ $pago->fecha_Pago->format('d/m/Y') }}</td>
                                <td>{{ $pago->estatus }}</td>
                                <td>{{ $pago->categoria->nombre_Categoria }}</td>
                                <td>{{ $pago->categoria->pago }}</td>
                                <td>{{ $pago->pago }}</td>
                                <td>{{ $pago->restante }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    USUARIO: {{$pago->user->name}} <br> Correo: {{$pago->user->email}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Factura: <a href="{{ route('Factura.pdf') }}" class="btn btn-info btn-sm">Generar</a>

                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
