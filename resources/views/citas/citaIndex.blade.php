@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Mi Cita</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="{{ action('CitaController@create') }}" class="btn btn-success btn-sm">Nueva Cita</a>
                        {{ $ordens->links() }}
                        <hr>
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Fecha del Pedido</th>
                                <th>Fecha de Cita</th>
                                <th>Estado de Cita</th>
                                <th>Usuario</th>
                            </tr>
                            @foreach ($ordens as $orden)
                            @can('view', $orden)
                            @if($orden->cita->nombre_Cita == "Programada")
                                <tr>
                                    <td>{{ $orden->id }}</td>
                                    <td>
                                        <a href=" {{ route('orden.show', $orden->id) }} ">
                                            {{ $orden->fecha_Orden->format('d/m/Y') }}
                                        </a>
                                    </td>
                                    <td>{{ $orden->fecha_Cita->format('d/m/Y') }}</td>
                                    <td>{{ $orden->cita->nombre_Cita }}</td>
                                    <td>{{ $orden->user->name }}</td>
                                    </tr>
                            @endif
                            @endcan
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
