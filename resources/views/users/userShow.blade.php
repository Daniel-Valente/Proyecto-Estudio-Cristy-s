@extends('layouts.tema')

@section('content')
<div class="container">
    <div>
        <div class="card shadow mb-2">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">MI PERFIL</h6>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <section id="testimonials" class="testimonials">
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="images/{{ \Auth::user()->avatar}}" class="testimonial-img" alt="">
                        <h3>{{ \Auth::user()->name}}</h3>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ \Auth::user()->descripcion}}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <a class="dropdowm-item" href="{{ route('usuario.edit', \Auth::user()->id ) }}">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Editar
                        </a>
                    </div>
                </div>
            </section>
        </div>
        @if(!\Gate::allows('administrador'))
            <div class="form-group col-md-4">
                <div class="card shadow mb-2">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">MI PEDIDOS</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            {{ $ordenes->links() }}
                            <hr>
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha de los Pedidos</th>
                                    <th>Estatus de los Pedidos</th>
                                </tr>
                                @foreach ($ordenes as $orden)
                                @can('view', $orden)
                                    <tr>
                                        <td>{{ $orden->id }}</td>
                                        <td>
                                            <a href=" {{ route('orden.show', $orden->id) }} ">
                                                {{ $orden->fecha_Orden->format('d/m/Y') }}
                                            </a>
                                        </td>
                                        <td>{{ $orden->estatus }}</td>
                                    </tr>
                                @endcan
                                @endforeach
                            </table>
                            <a href="{{ route('FacturaOrdenes.pdf') }}" class="btn btn-info btn-sm">Estados de Pedidos</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-4">
                <div class="card shadow mb-2">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">MI PAGOS</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            {{ $pagos->links() }}
                            <hr>
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th>Fecha de los Pagos</th>
                                </tr>
                                @foreach ($pagos as $pago)
                                @can('view', $pago->orden)
                                    <tr>
                                        <td>{{ $pago->id }}</td>
                                        <td>
                                            <a href=" {{ route('pago.show', $pago->id) }} ">
                                                {{ $pago->fecha_Pago->format('d/m/Y') }}
                                            </a>
                                        </td>
                                    </tr>
                                @endcan
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
