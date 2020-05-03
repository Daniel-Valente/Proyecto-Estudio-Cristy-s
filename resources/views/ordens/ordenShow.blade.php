@extends('layouts.tema')

@section('content')
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Detalles del Pedidos</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Fecha de la orden</th>
                                <th>Fecha de la cita</th>
                                <th>Descripción</th>
                                <th>Categoría</th>
                                <th>Fecha de la entrega</th>
                            </tr>
                            <tr>
                                <td>{{ $orden->id }}</td>
                                <td>{{ $orden->fecha_Orden->format('d/m/Y') }}</td>
                                <td>{{ $orden->fecha_Cita->format('d/m/Y') }}</td>
                                <td>{{ $orden->descripcion }}</td>
                                <td>{{ $orden->categoria->nombre_Categoria }}</td>
                                <td>
                                    @if ($orden->fecha_Entrega == null)
                                    Por Confirmar
                                    @else
                                    {{ $orden->fecha_Entrega->format('d/m/Y') }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                    Usuario: {{$orden->user->name}} ({{$orden->user->email}}) <br>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
