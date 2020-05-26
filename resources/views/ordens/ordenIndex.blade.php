@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="form-row">
                <div class="form-group col-md-7"></div>
                <div class="form-group col-md-5">
                    <h6 class="m-0 font-weight-bold text-warning"> Búsqueda de Pedidos: </h6>
                    {!! Form::open(['route' => 'orden.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) !!}
                        <div class="input-group is-invalid">
                            <h6 class="m-0 font-weight-bold text-info">fecha pedido:</h6>
                            <div class="custom-file">
                                {!! Form::date('date', null, ['class'=>'form-control', 'required']) !!}
                            </div>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-dark">Buscar</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pedidos</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
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
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
