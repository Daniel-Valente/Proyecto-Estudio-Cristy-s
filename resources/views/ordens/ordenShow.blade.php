@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="card shadow mb-4d">
                <div class="card-header py-3">Fecha del Pedido</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="{{ route('orden.edit', $orden->id ) }}" class="btn btn-success btn-sm">Modificar</a>
                        <a href="{{ route('orden.edit', $orden->id ) }}" class="btn btn-info btn-sm">Pagar</a>
                        <hr>
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Fecha Pedido</th>
                                <th>Fecha Cita</th>
                                <th>Estado Cita</th>
                                <th>Fecha Entrega</th>
                            </tr>
                            <tr>
                                <td>{{ $orden->id }}</td>
                                <td>{{ $orden->fecha_Orden->format('d/m/Y') }}</td>
                                <td>{{ $orden->fecha_Cita->format('d/m/Y') }}</td>
                                <td>{{ $orden->cita->nombre_Cita }}</td>
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
                                    Datos del usuario: {{$orden->user->name}} Correo: {{$orden->user->email}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <form action="{{ route('cita.destroy', $orden->id ) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card shadow mb-4">
                <div class="card-header py-3">Detalle del Perdido</div>
                <div class="card-body">

                    <hr>
                    <table class="table">
                        <tr>
                            <th>Categoría</th>
                            <th>Descripción</th>
                            <th>Estatus</th>
                        </tr>
                        <tr>
                            <td>{{ $orden->categoria->nombre_Categoria }}</td>
                            <td>{{ $orden->descripcion }}</td>
                            <td>{{ $orden->estatus }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
