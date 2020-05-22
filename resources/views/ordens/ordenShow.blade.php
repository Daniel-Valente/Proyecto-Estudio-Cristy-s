@extends('layouts.tema')

@section('content')
@include('pagos.pagoForm')
@include('contact')

<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="card shadow mb-4d">
                <div class="card-header py-3">Fecha del Pedido</div>
                <div class="card-body">
                    <div class="table-responsive">
                        @can('editar', $orden)
                            @can('completada', $orden)
                                <a href="{{ route('orden.edit', $orden->id ) }}" class="btn btn-success btn-sm">Modificar</a>
                            @endcan
                            @if(!\Gate::allows('administrador'))
                                @can('pagado', $orden)
                                    <button type="button"  class="btn btn-primary  btn-sm" data-toggle="modal" data-target="#pagoModal">
                                        Pagar
                                    </button>
                                @endcan
                            @endif
                        @endcan
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
                                    @if($orden->cita->nombre_Cita == "Cancelada")
                                        Cancelada
                                    @else
                                        @if ($orden->fecha_Entrega == null)
                                        Por Confirmar
                                        @else
                                        {{ $orden->fecha_Entrega->format('d/m/Y') }}
                                        @endif
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
                                    <form action="{{ route('orden.destroy', $orden->id ) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger  btn-sm">Eliminar</button>
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
                    <button type="button"  class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#contactoModal">
                        Contactar Estudio
                    </button>
                    <hr>
                    <table class="table" >
                        <tr>
                            <th>Tipo de Foto</th>
                            <th>Precio</th>
                            <th>Descripción</th>
                            <th>Estatus</th>
                        </tr>
                        <tr>
                            <td>{{ $orden->categoria->nombre_Categoria }}</td>
                            <td>${{ $orden->categoria->precio }}</td>
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
