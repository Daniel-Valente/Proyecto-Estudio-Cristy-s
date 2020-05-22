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
                        @foreach ($ordenes as $orden)
                            @can('view', $orden)
                                <h3> ID Del Pedido: {{ $orden->id }} </h3>
                                <h3> Fecha del Pedido: {{ $orden->fecha_Orden->format('d/M/Y') }} </h3>
                                <h3> Fecha del Cita: {{ $orden->fecha_Cita->format('d/M/Y') }} </h3>
                                <h3> Estado Cita: {{ $orden->cita->nombre_Cita }} </h3>
                                <h3>
                                    Fecha de Entrega:
                                    @if ($orden->fecha_Entrega == null)
                                        Por Confirmar
                                    @else
                                        {{ $orden->fecha_Entrega }}
                                    @endif
                                 </h3>
                                <h3> Tipo de Foto: {{ $orden->categoria->nombre_Categoria }} </h3>
                                <h3> Precio: {{ $orden->categoria->precio }} </h3>
                                <h3> Descripcion del Pedido: {{ $orden->descripcion }} </h3>
                                <h3> Estatus del Pedido: {{ $orden->estatus }} </h3>
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
