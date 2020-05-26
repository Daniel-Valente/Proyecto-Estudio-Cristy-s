@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            {!! Form::open(['route' => ['perfil.update', $user], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
            @csrf
            <section id="testimonials" class="testimonials">
                    <div class="testimonial-item">
                        <h3>
                            <div class="form-row  justify-content-center">
                                <div class="form-group col-md-12">
                                    <label for="avatar">Cambiar Imagen</label><br>
                                    <img src=" {{ asset('img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt=""><br>
                                    {!! Form::file('avatar') !!}
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name">Nombre</label>
                                    {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email">Correo</label>
                                    {!! Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' =>
                                    'example@gmail.com']) !!}
                                </div>
                                <div class="form-group col-md-8">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i> <br>
                                            <label for="descripcion">Descripción</label>
                                            {!! Form::textarea('descripcion', $user->descripcion, ['class' => 'form-control', 'row'
                                            => '2']) !!}
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                                <div class="form-group col-md-8">
                                    <button type="submit" class="btn btn-primary">Confirmar</button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </h3>
                    </div>
            </section>
        </div>
    </div>
</div>
@endsection
