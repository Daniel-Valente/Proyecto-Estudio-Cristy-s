@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Contenido</div>
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
                    {!! Form::open(['route' => 'galeria.upload', 'enctype' => 'multipart/form-data', 'method' =>
                    'POST']) !!}
                    @csrf
                    <div class="form-group col-md-4">
                        <label for="categoria">Categoria</label>
                        {!! Form::select('categoria_id', array('1' => 'Fotos en exterior', '2' => 'Fotos en estudio', '3' => 'Edición de fotos'), ['class' => 'forn-control', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="mi_archivo">Cargar Fotografía</label>
                        {!! Form::file('mi_archivo', ['class' => 'forn-control', 'required']) !!}
                    </div>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
