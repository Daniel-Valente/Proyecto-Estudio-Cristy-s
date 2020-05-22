@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="portfolio">
                <div class="card">
                    <div class="card-header">Galería</div>
                    <div class="card-body">
                        <a href="{{ action('GaleriaController@create') }}" class="btn btn-success btn-sm">Subir foto</a>
                        <ul id="portfolio-flters" class="d-flex justify-content-center">
                            <li data-filter="*" class="filter-active">Todas</li>
                            <li data-filter=".filter-app">Exterior</li>
                            <li data-filter=".filter-card">Estudio</li>
                            <li data-filter=".filter-web">Edición</li>
                        </ul>
                        {{ $galerias->links() }}
                        <hr>
                        <div class="row portfolio-container">
                            @foreach($galerias as $galeria)
                            @if($galeria->categoria->nombre_Categoria == "Fotos en exterior")
                                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                    <div class="portfolio-img"><img src="images/{{ $galeria->nombre_original }}"
                                            class="img-fluid" alt=""></div>
                                    <div class="portfolio-info">
                                        <h4>{{ $galeria->categoria->nombre_Categoria }}</h4>
                                        <p>>
                                            {{ $galeria->user->name }}
                                        <a href="{{ route('galeria.download', $galeria->id) }}" class="btn btn-sm btn-success">Descargar</a>
                                            @can('view', $galeria)
                                                {!! Form::open(['route' => ['galeria.delete', $galeria->id]]) !!}
                                                    <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                                                {!! Form::close() !!}
                                            @endcan
                                        </p>
                                        <a href="images/{{ $galeria->nombre_original }}" data-gall="portfolioGallery"
                                            class="venobox preview-link"
                                            title="{{ $galeria->categoria->nombre_Categoria }}"><i
                                                class="bx bx-plus"></i></a>
                                    </div>
                                </div>
                            @endif
                            @if($galeria->categoria->nombre_Categoria == "Fotos en estudio")
                                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                    <div class="portfolio-img"><img src="images/{{ $galeria->nombre_original }}"
                                        class="img-fluid" alt=""></div>
                                    <div class="portfolio-info">
                                        <h4>{{ $galeria->categoria->nombre_Categoria }}</h4>
                                        <p>>
                                            {{ $galeria->user->name }}
                                        <a href="{{ route('galeria.download', $galeria->id) }}" class="btn btn-sm btn-success">Descargar</a>
                                            @can('view', $galeria)
                                                {!! Form::open(['route' => ['galeria.delete', $galeria->id]]) !!}
                                                    <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                                                {!! Form::close() !!}
                                            @endcan
                                        </p>
                                        <a href="images/{{ $galeria->nombre_original }}" data-gall="portfolioGallery"
                                            class="venobox preview-link"
                                            title="{{ $galeria->categoria->nombre_Categoria }}"><i
                                                class="bx bx-plus"></i></a>
                                    </div>
                                </div>
                            @endif
                            @if($galeria->categoria->nombre_Categoria == "Edición de fotos")
                            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                <div class="portfolio-img"><img src="images/{{ $galeria->nombre_original }}"
                                    class="img-fluid" alt=""></div>
                                <div class="portfolio-info">
                                    <h4>{{ $galeria->categoria->nombre_Categoria }}</h4>
                                    <p>>
                                        {{ $galeria->user->name }}
                                    <a href="{{ route('galeria.download', $galeria->id) }}" class="btn btn-sm btn-success">Descargar</a>
                                        @can('view', $galeria)
                                            {!! Form::open(['route' => ['galeria.delete', $galeria->id]]) !!}
                                                <button type="submit" class="btn btn-sm btn-danger">Borrar</button>
                                            {!! Form::close() !!}
                                        @endcan
                                    </p>
                                    <a href="images/{{ $galeria->nombre_original }}" data-gall="portfolioGallery"
                                        class="venobox preview-link"
                                        title="{{ $galeria->categoria->nombre_Categoria }}"><i
                                            class="bx bx-plus"></i></a>
                                </div>
                            </div>
                        @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
