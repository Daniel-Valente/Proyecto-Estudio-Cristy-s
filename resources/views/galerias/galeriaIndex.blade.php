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
                        {{ $galerias->links() }}
                        <hr>
                        <div class="row portfolio-container">
                            @foreach($galerias as $galeria)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <div class="portfolio-img"><img src="images/{{ $galeria->nombre_original }}"
                                        class="img-fluid" alt=""></div>
                                <div class="portfolio-info">
                                    <h4>{{ $galeria->categoria->nombre_Categoria }}</h4>
                                    <p>>{{ $galeria->user->name }}</p>
                                    <a href="images/{{ $galeria->nombre_original }}" data-gall="portfolioGallery"
                                        class="venobox preview-link"
                                        title="{{ $galeria->categoria->nombre_Categoria }}"><i
                                            class="bx bx-plus"></i></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
