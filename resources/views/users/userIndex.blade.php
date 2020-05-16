@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Usuarios</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                            @foreach ($users as $user)
                             <tr>
                                <td>{{ $user->id }}</td>
                                <td>
                                    <a href=" {{ route('perfil.show', $user->id) }} ">
                                        {{ $user->name }}
                                    </a>
                                </td>
                                <td>{{ $user->email }}</td>
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
