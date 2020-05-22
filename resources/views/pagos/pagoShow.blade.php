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
                                <td>{{ $pago->orden->categoria->nombre_Categoria }}</td>
                                <td>{{ $pago->orden->categoria->precio }}</td>
                                <td>{{ $pago->pago }}</td>
                                <td>{{ $pago->restante }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    Nombre del Usuario: {{$pago->orden->user->name}} <br> Correo del Usuario: {{$pago->orden->user->email}}
                                </td>
                            </tr>
                        </table>
                        <a href="{{ route('Factura.pdf', $pago->id) }}" class="btn btn-info btn-sm">Factura</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
