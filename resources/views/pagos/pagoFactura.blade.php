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
                    <div class="card-body">
                        @foreach ($pagos as $pago)
                            @can('view', $pago->orden)
                                <h3> ID Del Pedido: {{ $pago->id }} </h3>
                                <h3> Fecha de la Orden: {{ $pago->orden->fecha_Orden->format('d/M/Y') }} </h3>
                                <h3> Fecha del Pago: {{ $pago->fecha_Pago->format('d/M/Y') }} </h3>
                                <h3> Estado del Pago: {{ $pago->estatus }} </h3>
                                <h3> Categoría: {{ $pago->orden->categoria->nombre_Categoria }} </h3>
                                <h3> Precio: {{ $pago->orden->categoria->precio }} </h3>
                                <h3> Pago: {{ $pago->pago }} </h3>
                                <h3> Restante: {{ $pago->restante }} </h3>
                                <br> <br>
                            @endcan
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
