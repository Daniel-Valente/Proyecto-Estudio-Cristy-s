@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="form-row">
                <div class="form-group col-md-7"></div>
                <div class="form-group col-md-4">
                    <h6 class="m-0 font-weight-bold text-warning"> Búsqueda de Usuario: </h6>
                    {!! Form::open(['route' => 'usuario.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) !!}
                    <div class="input-group is-invalid">
                        <div class="custom-file">
                            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'nombre del usuario']) !!}
                        </div>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-dark">Buscar</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="card">
                <div class="card-header">Usuarios</div>

                <div class="card-body">
                    {{ $users->links() }}
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Acción</th>
                        </tr>
                        @foreach ($users as $user)
                        <tr>
                            @if(\Auth::id() != $user->id)
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <form action="{{ route('usuario.destroy', $user->id ) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger  btn-sm">Eliminar</button>
                                </form>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
