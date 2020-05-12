@extends('layouts.tema')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Galería</div>
                <div class="card-body">
                    <section id="portfolio" class="portfolio">
                        <div class="row portfolio-container">
                            @foreach($galerias as $galeria)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <div class="portfolio-img"><img src="images/{{ $galeria->nombre_original }}"
                                        class="img-fluid" alt=""></div>
                                <div class="portfolio-info">
                                    <h4>{{ $galeria->user_id }}</h4>
                                    <p>App</p>
                                    <a href="images/{{ $galeria->nombre_original }}" data-gall="portfolioGallery"
                                        class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
