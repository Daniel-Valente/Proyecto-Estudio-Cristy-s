@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Rango de Usuarios</div>

                <div class="card-body">
                    <hr>
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Rango</th>
                            <th>Usuarios</th>
                            <th>Acción</th>
                        </tr>
                        @foreach ($tipos as $tipo)
                            <tr>
                                <td>{{ $tipo->id }}</td>
                                <td>{{ $tipo->nombre_Tipo }}</td>
                                <td>
                                    @foreach ($tipo->users as $user)
                                        {{ $user->name }} <br>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('tipo.edit', $tipo->id)}}" class="btn btn-sm btn-warning">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
