@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cita</div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @isset($orden)
                        {!! Form::model($orden, ['route' => ['orden.update', $orden->id], 'method' => 'PATCH']) !!}
                    @else
                        {!! Form::open(['route' => 'orden.store']) !!}
                    @endisset ()
                    <div class="form-row">
                        @if(!\Gate::allows('administrador'))
                            <div class="form-group col-md-4">
                                <label for="categoria">Categoria</label>
                                {!! Form::select('categoria_id', $categorias ,null, ['class' => 'form-control', 'required']) !!}
                            </div>
                        @endif
                        <div class="form-group col-md-4">
                            <label for="fecha_Cita">Fecha Cita</label>
                            {!! Form::date('fecha_Cita', isset($orden) ? $orden->fecha_Cita->toDateString() : null,
                            ['class' => 'form-control', 'required'])!!}
                        </div>
                        @if(!\Gate::allows('administrador'))
                            <div class="form-group col-md-4">
                                <label for="cita">Cita</label> <br>
                                {!! Form::select('Cita_id', array('1' => 'Programada', '2' => 'Cancelada'), ['class' => 'forn-control', 'required']) !!}
                            </div>
                        @else
                            <div class="form-group col-md-4">
                                <label for="cita">Cita</label> <br>
                                {!! Form::select('Cita_id', $citas, null, ['class' => 'forn-control', 'required']) !!}
                            </div>
                            <div class="form-group col-md-4">
                                <label for="fecha_Cita">Fecha Entrega</label>
                                {!! Form::date('fecha_Entrega', null, ['class' => 'form-control', 'required'])!!}
                            </div><div class="form-group col-md-4">
                                <label for="fecha_Cita">estatus</label>
                                {!! Form::text('estatus', null, ['class' => 'form-control', 'required'])!!}
                            </div>
                        @endif

                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción del pedido</label>
                        {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'row' => '3', 'required']) !!}
                    </div>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
