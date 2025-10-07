@extends('homepage.layouts.main')
@section('container')
    <section class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image:url(/homepage_assets/images/bg_6.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end"
                    data-scrollax-parent="true">
                    <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>We Create
                                Elegant
                                & Functional Interiors</strong></h1>
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Delpro is the interior brand of
                            PT. Delapan Jaya Propertindo, specializing in modern design, premium detailing, and comfortable
                            spaces for your home, office, and commercial properties.</p>
                        <p><a href="{{ route('project') }}" class="btn btn-white btn-outline-white px-4 py-3 mt-3">View Our
                                Portfolio</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image:url(/homepage_assets/images/bg_7.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end"
                    data-scrollax-parent="true">
                    <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>Bringing
                                Your
                                Dream Space to Life</strong></h1>
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We design and execute every
                            interior detail with thoughtful planning, creativity, and precision to deliver comfort and
                            beauty in every space.</p>
                        <p><a href="{{ route('project') }}" class="btn btn-white btn-outline-white px-4 py-3 mt-3">View Our
                                Portfolio</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-services bg-light">
        <div class="container">
            <div class="row">
                <!-- Architecture & Planning -->
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-compass-symbol"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading"><strong>Architecture & Planning</strong></h3>
                            <p style="text-align: justify">Comprehensive planning services for residential and commercial
                                buildings, delivered by
                                experienced professionals.</p>
                        </div>
                    </div>
                </div>

                <!-- Construction & Renovation -->
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-layers"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading"><strong>Construction & Renovation</strong></h3>
                            <p style="text-align: justify">From inspection and cost estimation to execution, we ensure
                                precise and reliable services.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Interior Design & Build -->
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-idea"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading"><strong>Interior Design & Build</strong></h3>
                            <p style="text-align: justify">Dedicated to creating stylish and comfortable spaces with expert
                                craftsmanship.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section ftc-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2" style="background-image: url(/homepage_assets/images/bg_8.jpg);">
                </div>
                <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section mb-5 pl-md-5 heading-section-with-line">
                        <div class="pl-md-5 ml-md-5">
                            <span class="subheading"><strong>About Us</strong></span>
                            <h2 class="mb-4"><strong>Delpro – Professional Interior & Architectural Consultant</strong>
                            </h2>
                        </div>
                    </div>
                    <div class="pl-md-5 ml-md-5 mb-5" style="text-align: justify">
                        <p>The demand for high-quality buildings has become a top priority, making it unsurprising that
                            people are willing to invest significantly in educational institutions, offices, and residential
                            homes.</p>

                        <p>We are proud to introduce <strong>Delpro</strong>, operating under <strong>PT Delapan Jaya
                                Propertindo</strong>.
                            With full
                            commitment, we are dedicated to assisting clients in creating comfortable, functional, and
                            aesthetically pleasing spaces for both living and working.</p>

                        <p>Our team is committed to excellence in design, construction, and delivering the finest experience
                            to every client.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter"
        style="background-image: url(/homepage_assets/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row d-md-flex align-items-center justify-content-center">
                <div class="col-lg-4">
                    <div class="heading-section pl-md-5 heading-section-white">
                        <div class="pl-md-5 ml-md-5 ftco-animate">
                            <span class="subheading"><strong>Delpro</strong></span>
                            <h2 class="mb-4"><strong>Interesting Facts About Us</strong></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row d-md-flex align-items-center">
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="10">0</strong>
                                    <span>Years of Experience</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="250">0</strong>
                                    <span>Satisfied Clients</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="400">0</strong>
                                    <span>Projects Completed</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="50">0</strong>
                                    <span>Professional Team</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="ftco-section video-section">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="video-wrapper">
                    <iframe width="1400" height="551"
                        src="https://www.youtube.com/embed/Dl4rG7Uawno?si=QsyqLq2zefm4JZ7V" title="Delpro With Client"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row d-flex justify-content-center mb-5 pb-3">
                <div class="col-md-8 heading-section ftco-animate text-center">
                    <h2 class="mb-4"><strong>Our Client</strong></h2>
                    <p class="text-muted">We are proud to collaborate with our valued clients across various industries,
                        building lasting partnerships and delivering impactful solutions.</p>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        @foreach ($clients as $client)
                            <div class="item">
                                <div class="testimony-wrap p-4 pb-5">
                                    <div class="user-img "
                                        style="width: 100%;
                                    min-height: 50px;
                                    background-image: url('{{ asset('storage/public/' . $client->logo) }}');
                                    background-size: contain;
                                    background-position: center;
                                    background-repeat: no-repeat;">
                                        <span class=" d-flex align-items-center justify-content-center">
                                        </span>
                                    </div>
                                    <div class="text" style="text-align: center">
                                        <p class="name">{{ $client->name }}</p>
                                        <span class="position">{{ $client->category->name }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-8 heading-section ftco-animate text-center">
                    <h2 class="mb-4"><strong>Our People</strong></h2>
                    <p class="text-muted">We attract, develop, and retain the best talent among the industry in our
                        organization.
                        Meet our team who hold the leadership positions:</p>
                </div>
            </div>
            <div class="row">
                @if ($teams->count() > 0)
                    @foreach ($teams as $team)
                        <div class="col-md-6 col-lg-3 ftco-animate">
                            <div class="staff">
                                <div class="img"
                                    style="background-image: url({{ asset('storage/public/' . $team->photo) }});">
                                </div>
                                <div class="text pt-4">
                                    <h3>{{ $team->name }}</h3>
                                    <span class="position"><strong>{{ $team->role }}</strong></span>
                                    <ul class="ftco-social d-flex justify-content-start mt-0">
                                        <li class="ftco-animate" {{ $team->linkedin ? '' : 'hidden' }}>
                                            <a href="{{ $team->linkedin }}" target="_blank"><span
                                                    class="icon-linkedin"></span></a>
                                        </li>
                                        <li class="ftco-animate" {{ $team->twitter ? '' : 'hidden' }}>
                                            <a href="{{ $team->twitter }}" target="_blank"><span
                                                    class="icon-twitter"></span></a>
                                        </li>
                                        <li class="ftco-animate" {{ $team->facebook ? '' : 'hidden' }}>
                                            <a href="{{ $team->facebook }}" target="_blank"><span
                                                    class="icon-facebook"></span></a>
                                        </li>
                                        <li class="ftco-animate {{ $team->email ? '' : 'hidden' }}">
                                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $team->email }}"
                                                target="_blank"><span class="icon-envelope-o"></span></a>
                                        </li>
                                        <li class="ftco-animate" {{ $team->instagram ? '' : 'hidden' }}>
                                            <a href="{{ $team->instagram }}" target="_blank"><span
                                                    class="icon-instagram"></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
