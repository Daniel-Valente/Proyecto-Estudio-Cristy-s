@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Rango de usuarios</div>
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

                    @isset($tipo)
                    {!! Form::model($tipo, ['route' => ['tipo.update', $tipo->id], 'method' => 'PATCH']) !!}
                    @else
                    {!! Form::open(['route' => 'tipo.store']) !!}
                    @endisset ()
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            {!! Form::label('nombre_Tipo', 'Tipo') !!}
                            {!! Form::text('nombre_Tipo', null, ['class' => 'form-control', 'id' => 'nombre_Tipo',
                            'readonly' => 'readonly']) !!}
                        </div>
                        <div class="form-group col-md-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text">Usuarios</label>
                                </div>
                                {!! Form::select('user_id[]', $users, isset($tipo) ? $tipo->users()->pluck('id') : null,
                                ['class' => 'forn-control', 'multiple']) !!}
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Aceptar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
