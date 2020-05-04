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
                                <td></td>
                            </tr>
                            <tr>
                                <td>Usuario:</td>
                            </tr>
                            <tr>
                                <td>
                                    Factura: <a href="" class="btn btn-info btn-sm">Generar</a>

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
