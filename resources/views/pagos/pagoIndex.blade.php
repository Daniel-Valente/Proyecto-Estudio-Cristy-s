@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="form-row">
                <div class="form-group col-md-8"></div>
                <div class="form-group col-md-4">
                    <h6 class="m-0 font-weight-bold text-warning"> Búsqueda de Pagos: </h6>
                    {!! Form::open(['route' => 'pagosIndex', 'method' => 'GET', 'class' => 'form-inline pull-right']) !!}
                        <div class="input-group is-invalid">
                            <h6 class="m-0 font-weight-bold text-info">fecha pago:</h6>
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
                    <h6 class="m-0 font-weight-bold text-primary">Pagos Realizados</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        {{ $pagos->links() }}
                        <hr>
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Fecha Pedido</th>
                                <th>Fecha Pago</th>
                                <th>Usuario</th>
                            </tr>
                            @foreach ($pagos as $pago)
                            <tr>
                                <td>{{ $pago->id }}</td>
                                <td>{{ $pago->orden->fecha_Orden->format('d/m/Y') }}</td>
                                <td>
                                    <a href=" {{ route('pago.show', $pago->id) }} ">
                                        {{ $pago->fecha_Pago->format('d/m/Y') }}
                                    </a>
                                </td>
                                <td>{{ $pago->orden->user->name }}</td>
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
