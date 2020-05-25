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
                        {!! Form::model($orden, ['route' => ['cita.update', $orden->id], 'method' => 'PATCH', 'role'=> 'form', 'class'=> 'php-email-form'] ) !!}
                    @else
                        {!! Form::open(['route' => 'cita.store']) !!}
                    @endisset ()
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="categoria">Categoria</label> <br>
                            {!! Form::select('categoria_id', $categorias ,null, ['class' => 'form-control', 'required']) !!}
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fecha_Cita">Fecha Cita</label>
                            {!! Form::date('fecha_Cita', isset($orden) ? $orden->fecha_Cita->toDateString() : null,
                            ['class' => 'form-control', 'required'])!!}
                        </div>
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
