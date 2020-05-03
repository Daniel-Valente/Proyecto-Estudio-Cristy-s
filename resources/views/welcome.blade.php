@extends('layouts.tema')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <main id="main">
                        <!-- ======= My Resume Section ======= -->
                        <section id="resume" class="resume">
                            <div class="container">

                                <div class="section-title">
                                    <span>My Resume</span>
                                    <h2>My Resume</h2>
                                    <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <h3 class="resume-title">Sumary</h3>
                                        <div class="resume-item pb-0">
                                            <h4>Alice Barkley</h4>
                                            <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of
                                                    experience designing and developing user-centered digital/print
                                                    marketing material from initial concept to final, polished
                                                    deliverable.</em></p>
                                            <p>
                                                <ul>
                                                    <li>Portland par 127,Orlando, FL</li>
                                                    <li>(123) 456-7891</li>
                                                    <li>alice.barkley@example.com</li>
                                                </ul>
                                            </p>
                                        </div>

                                        <h3 class="resume-title">Education</h3>
                                        <div class="resume-item">
                                            <h4>Master of Fine Arts &amp; Graphic Design</h4>
                                            <h5>2015 - 2016</h5>
                                            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                                            <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto
                                                autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti
                                                sand markend</p>
                                        </div>
                                        <div class="resume-item">
                                            <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                                            <h5>2010 - 2014</h5>
                                            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                                            <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis
                                                et quis Eius vel ratione eius unde vitae rerum voluptates asperiores
                                                voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h3 class="resume-title">Professional Experience</h3>
                                        <div class="resume-item">
                                            <h4>Senior graphic design specialist</h4>
                                            <h5>2019 - Present</h5>
                                            <p><em>Experion, New York, NY </em></p>
                                            <p>
                                                <ul>
                                                    <li>Lead in the design, development, and implementation of the
                                                        graphic, layout, and production communication materials</li>
                                                    <li>Delegate tasks to the 7 members of the design team and provide
                                                        counsel on all aspects of the project. </li>
                                                    <li>Supervise the assessment of all graphic materials in order to
                                                        ensure quality and accuracy of the design</li>
                                                    <li>Oversee the efficient use of production project budgets ranging
                                                        from $2,000 - $25,000</li>
                                                </ul>
                                            </p>
                                        </div>
                                        <div class="resume-item">
                                            <h4>Graphic design specialist</h4>
                                            <h5>2017 - 2018</h5>
                                            <p><em>Stepping Stone Advertising, New York, NY</em></p>
                                            <p>
                                                <ul>
                                                    <li>Developed numerous marketing programs (logos,
                                                        brochures,infographics, presentations, and advertisements).</li>
                                                    <li>Managed up to 5 projects or tasks at a given time while under
                                                        pressure</li>
                                                    <li>Recommended and consulted with clients on the most appropriate
                                                        graphic design</li>
                                                    <li>Created 4+ design presentations and proposals a month for
                                                        clients and account managers</li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section><!-- End My Resume Section -->

                        <!-- ======= My Services Section ======= -->
                        <section id="services" class="services">
                            <div class="container">

                                <div class="section-title">
                                    <span>My Services</span>
                                    <h2>My Services</h2>
                                    <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                        <div class="icon-box">
                                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et
                                                quas molestias excepturi sint occaecati cupiditate non provident</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                        <div class="icon-box">
                                            <div class="icon"><i class="bx bx-file"></i></div>
                                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                        <div class="icon-box">
                                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt
                                                in culpa qui officia deserunt mollit anim id est laborum</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                                        <div class="icon-box">
                                            <div class="icon"><i class="bx bx-world"></i></div>
                                            <h4 class="title"><a href="">Nemo Enim</a></h4>
                                            <p class="description">At vero eos et accusamus et iusto odio dignissimos
                                                ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </section><!-- End My Services Section -->

                        <!-- ======= My Portfolio Section ======= -->
                        <section id="portfolio" class="portfolio">
                            <div class="container">

                                <div class="section-title">
                                    <span>My Portfolio</span>
                                    <h2>My Portfolio</h2>
                                    <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
                                </div>

                                <ul id="portfolio-flters" class="d-flex justify-content-center">
                                    <li data-filter="*" class="filter-active">All</li>
                                    <li data-filter=".filter-app">App</li>
                                    <li data-filter=".filter-card">Card</li>
                                    <li data-filter=".filter-web">Web</li>
                                </ul>

                                <div class="row portfolio-container">

                                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                                                alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>App 1</h4>
                                            <p>App</p>
                                            <a href="{{ asset('img/portfolio/portfolio-1.jpg') }}"
                                                data-gall="portfolioGallery" class="venobox preview-link"
                                                title="App 1"><i class="bx bx-plus"></i></a>
                                            <a href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('img/portfolio/portfolio-2.jpg') }}" class="img-fluid"
                                                alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>Web 3</h4>
                                            <p>Web</p>
                                            <a href="{{ asset('img/portfolio/portfolio-2.jpg') }}"
                                                data-gall="portfolioGallery" class="venobox preview-link"
                                                title="Web 3"><i class="bx bx-plus"></i></a>
                                            <a href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('img/portfolio/portfolio-3.jpg') }}" class="img-fluid"
                                                alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>App 2</h4>
                                            <p>App</p>
                                            <a href=" {{ asset('img/portfolio/portfolio-3.jpg') }}"
                                                data-gall="portfolioGallery" class="venobox preview-link"
                                                title="App 2"><i class="bx bx-plus"></i></a>
                                            <a href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('img/portfolio/portfolio-4.jpg') }}" class="img-fluid"
                                                alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>Card 2</h4>
                                            <p>Card</p>
                                            <a href="{{ asset('img/portfolio/portfolio-4.jpg') }}"
                                                data-gall="portfolioGallery" class="venobox preview-link"
                                                title="Card 2"><i class="bx bx-plus"></i></a>
                                            <a href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('img/portfolio/portfolio-5.jpg') }}" class="img-fluid"
                                                alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>Web 2</h4>
                                            <p>Web</p>
                                            <a href="{{ asset('img/portfolio/portfolio-5.jpg') }}"
                                                data-gall="portfolioGallery" class="venobox preview-link"
                                                title="Web 2"><i class="bx bx-plus"></i></a>
                                            <a href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
                                                alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>App 3</h4>
                                            <p>App</p>
                                            <a href="{{ asset('img/portfolio/portfolio-6.jpg') }}"
                                                data-gall="portfolioGallery" class="venobox preview-link"
                                                title="App 3"><i class="bx bx-plus"></i></a>
                                            <a href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('img/portfolio/portfolio-7.jpg') }}" class="img-fluid"
                                                alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>Card 1</h4>
                                            <p>Card</p>
                                            <a href="{{ asset('img/portfolio/portfolio-7.jpg') }}"
                                                data-gall="portfolioGallery" class="venobox preview-link"
                                                title="Card 1"><i class="bx bx-plus"></i></a>
                                            <a href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('img/portfolio/portfolio-8.jpg') }}" class="img-fluid"
                                                alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>Card 3</h4>
                                            <p>Card</p>
                                            <a href="{{ asset('img/portfolio/portfolio-8.jpg') }}"
                                                data-gall="portfolioGallery" class="venobox preview-link"
                                                title="Card 3"><i class="bx bx-plus"></i></a>
                                            <a href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                        <div class="portfolio-img"><img
                                                src="{{ asset('img/portfolio/portfolio-9.jpg') }}" class="img-fluid"
                                                alt=""></div>
                                        <div class="portfolio-info">
                                            <h4>Web 3</h4>
                                            <p>Web</p>
                                            <a href="{{ asset('img/portfolio/portfolio-9.jpg') }}"
                                                data-gall="portfolioGallery" class="venobox preview-link"
                                                title="Web 3"><i class="bx bx-plus"></i></a>
                                            <a href="portfolio-details.html" class="details-link"
                                                title="More Details"><i class="bx bx-link"></i></a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </section><!-- End My Portfolio Section -->

                        <!-- ======= About Me Section ======= -->
                        <section id="about" class="about">
                            <div class="container">

                                <div class="section-title">
                                    <span>About Me</span>
                                    <h2>About Me</h2>
                                    <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
                                </div>

                                <div class="row">
                                    <div
                                        class="image col-lg-4 d-flex align-items-stretch justify-content-center justify-content-lg-start">
                                    </div>
                                    <div class="col-lg-8 d-flex flex-column align-items-stretch">
                                        <div class="content pl-lg-4 d-flex flex-column justify-content-center">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <ul>
                                                        <li><i class="icofont-rounded-right"></i> <strong>Name:</strong>
                                                            Laura Thomson</li>
                                                        <li><i class="icofont-rounded-right"></i>
                                                            <strong>Website:</strong> www.example.com</li>
                                                        <li><i class="icofont-rounded-right"></i>
                                                            <strong>Phone:</strong> +123 456 7890</li>
                                                        <li><i class="icofont-rounded-right"></i> <strong>City:</strong>
                                                            City : New York, USA</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ul>
                                                        <li><i class="icofont-rounded-right"></i> <strong>Age:</strong>
                                                            30</li>
                                                        <li><i class="icofont-rounded-right"></i>
                                                            <strong>Degree:</strong> Master</li>
                                                        <li><i class="icofont-rounded-right"></i>
                                                            <strong>Email:</strong> email@example.com</li>
                                                        <li><i class="icofont-rounded-right"></i>
                                                            <strong>Freelance:</strong> Available</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row mt-n4">
                                                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                                    <div class="count-box">
                                                        <i class="icofont-simple-smile" style="color: #20b38e;"></i>
                                                        <span data-toggle="counter-up">65</span>
                                                        <p><strong>Happy Clients</strong> consequuntur voluptas nostrum
                                                            aliquid ipsam architecto ut.</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                                    <div class="count-box">
                                                        <i class="icofont-document-folder" style="color: #8a1ac2;"></i>
                                                        <span data-toggle="counter-up">85</span>
                                                        <p><strong>Projects</strong> adipisci atque cum quia aspernatur
                                                            totam laudantium et quia dere tan</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                                    <div class="count-box">
                                                        <i class="icofont-clock-time" style="color: #2cbdee;"></i>
                                                        <span data-toggle="counter-up">12</span>
                                                        <p><strong>Years of experience</strong> aut commodi quaerat modi
                                                            aliquam nam ducimus aut voluptate non vel</p>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mt-5 d-md-flex align-items-md-stretch">
                                                    <div class="count-box">
                                                        <i class="icofont-award" style="color: #ffb459;"></i>
                                                        <span data-toggle="counter-up">15</span>
                                                        <p><strong>Awards</strong> rerum asperiores dolor alias quo
                                                            reprehenderit eum et nemo pad der</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End .content-->

                                        <div class="skills-content pl-lg-4">
                                            <div class="progress">
                                                <span class="skill">HTML <i class="val">100%</i></span>
                                                <div class="progress-bar-wrap">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <div class="progress">
                                                <span class="skill">CSS <i class="val">90%</i></span>
                                                <div class="progress-bar-wrap">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <div class="progress">
                                                <span class="skill">JavaScript <i class="val">75%</i></span>
                                                <div class="progress-bar-wrap">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </section><!-- End About Me Section -->

                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
