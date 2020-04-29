@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Vista de Ordenes</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="{{ action('OrdenController@create') }}" class="btn btn-success btn-sm">Nueva Orden</a>
                        <hr>
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Fecha Orden</th>
                                <th>Fecha Cita</th>
                                <th>Descripción</th>
                                <th>Usuario</th>
                            </tr>

                            @foreach ($ordens as $orden)
                            <tr>
                                <td>{{ $orden->id }}</td>
                                <td>
                                    <a href=" {{ route('orden.show', $orden->id) }} ">
                                        {{ $orden->fecha_Orden->format('d/m/Y') }}
                                    </a>
                                </td>
                                <td>{{ $orden->fecha_Cita->format('d/m/Y') }}</td>
                                <td>{{ $orden->descripcion }}</td>
                                <td>{{ $orden->user->name }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
