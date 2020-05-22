<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTP-8">
        <title>Factura<title>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h1 class="m-0 font-weight-bold text-primary">
                                FACTURA: {{  \Auth::user()->name }}</h1>
                        </div>
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Fecha Pedido</th>
                                <th>Fecha Pago</th>
                            </tr>
                            <tr>
                                <td>{{ $pagos->id }}</td>
                                <td>{{ $pagos->orden->fecha_Orden->format('d/m/Y') }}</td>
                                <td>{{ $pagos->fecha_Pago->format('d/m/Y') }}</td>
                            </tr>

                            <tr>
                                <th>Estatus</th>
                                <td>{{ $pagos->estatus }}</td>
                            </tr>

                            <tr>
                                <th>Categoria</th>
                                <td>{{ $pagos->orden->categoria->nombre_Categoria }}</td>
                            </tr>

                            <tr>
                                <th>Precio</th>
                                <td>{{ $pagos->orden->categoria->precio }}</td>
                            </tr>

                            <tr >
                                <th>Pago</th>
                                <td>{{ $pagos->pago }}</td>
                            </tr>

                            <tr colspan="12">
                                <th>Restante</th>
                                <td>{{ $pagos->restante }}</td>
                            </tr>

                            <tr>
                                <td colspan="6">
                                    Nombre del Usuario: {{$pagos->orden->user->name}} <br> Correo del Usuario: {{$pagos->orden->user->email}}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
