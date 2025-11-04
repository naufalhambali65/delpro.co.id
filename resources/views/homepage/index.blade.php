@extends('homepage.layouts.main')
@section('css')
    <style>
        /* Ubah layout services jadi horizontal saat di mobile */
        @media (max-width: 768px) {
            .ftco-services .services {
                display: flex !important;
                align-items: center;
                margin-top: 50px;
            }

            .ftco-services .services .icon {
                margin-right: 15px;
                margin-bottom: 0 !important;
                flex-shrink: 0;
                /* biar ukuran icon tidak mengecil */
            }

            .ftco-services .services .media-body {
                text-align: left;
            }
        }
    </style>
@endsection
@section('container')
    <section class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image:url(/homepage_assets/images/bg_6.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end"
                    data-scrollax-parent="true">
                    <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            <strong>{{ __('home.hero_title_1') }}</strong>
                        </h1>
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            {{ __('home.hero_desc_1') }}
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
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            <strong>{{ __('home.hero_title_2') }}</strong>
                        </h1>
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            {{ __('home.hero_desc_2') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item js-fullheight" style="background-image:url(/homepage_assets/images/bg_9.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end"
                    data-scrollax-parent="true">
                    <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            <strong>{{ __('home.hero_title_3') }}</strong>
                        </h1>
                        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            {{ __('home.hero_desc_3') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-services bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <img src="/homepage_assets/images/icon/icon_1.png" alt="My Icon"
                                style="width: 100px; height: 100px; border-radius: 50%;">
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading"><strong>{{ __('home.service_1_title') }}</strong></h3>
                            <p style="text-align: justify">{{ __('home.service_1_desc') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <img src="/homepage_assets/images/icon/icon_2.png" alt="My Icon"
                                style="width: 100px; height: 100px; border-radius: 50%;">
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading"><strong>{{ __('home.service_3_title') }}</strong></h3>
                            <p style="text-align: justify">{{ __('home.service_3_desc') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <img src="/homepage_assets/images/icon/icon_3.png" alt="My Icon"
                                style="width: 100px; height: 100px; border-radius: 50%;">
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading"><strong>{{ __('home.service_2_title') }}</strong></h3>
                            <p style="text-align: justify">{{ __('home.service_2_desc') }}</p>
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
                            <span class="subheading"><strong>{{ __('home.about_us') }}</strong></span>
                            <h2 class="mb-4"><strong>{{ __('home.about_title') }}</strong></h2>
                        </div>
                    </div>
                    <div class="pl-md-5 ml-md-5 mb-5" style="text-align: justify">
                        <p>{!! __('home.about_paragraph_1') !!}</p>
                        <p>{!! __('home.about_paragraph_2') !!}</p>
                        <p>{!! __('home.about_paragraph_3') !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter"
        style="background-image: url(/homepage_assets/images/bg_9.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row d-md-flex align-items-center justify-content-center mb-0 mt-0">
                <div class="col-lg-4">
                    <div class="heading-section pl-md-5 heading-section-white mt-0">
                        <div class="pl-md-5 ml-md-5 ftco-animate">
                            {{-- <span class="subheading"><strong>{{ __('home.facts_subheading') }}</strong></span> --}}
                            <h2 class="mb-4"><strong>{{ __('home.facts_title') }}</strong></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row d-md-flex align-items-center">
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="5">0</strong>
                                    <span>{{ __('home.experience') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="250">0</strong>
                                    <span>{{ __('home.clients') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="400">0</strong>
                                    <span>{{ __('home.projects') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="50">0</strong>
                                    <span>{{ __('home.team') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row d-flex justify-content-center mb-5 pb-3">
                <div class="col-md-8 heading-section ftco-animate text-center">
                    <h2 class="mb-4"><strong>{{ __('home.clients_title') }}</strong></h2>
                    <p class="text-muted">{{ __('home.clients_desc') }}</p>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        @foreach ($clients as $client)
                            <div class="item">
                                <div class="testimony-wrap p-4 pb-5">
                                    <div class="user-img "
                                        style="width: 100%; min-height: 50px; background-image: url('{{ asset('storage/public/' . $client->logo) }}'); background-size: contain; background-position: center; background-repeat: no-repeat;">
                                        <span class=" d-flex align-items-center justify-content-center"> </span>
                                    </div>
                                    <div class="text" style="text-align: center">
                                        <p class="name">{{ $client->name }}</p> <span
                                            class="position">{{ $client->category->name }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-8 heading-section ftco-animate text-center">
                    <h2 class="mb-4"><strong>{{ __('home.people_title') }}</strong></h2>
                    <p class="text-muted">{{ __('home.people_desc') }}</p>
                </div>
            </div>
            <div class="row">
                @if ($teams->count() > 0)
                    @foreach ($teams as $team)
                        <div class="col-md-6 col-lg-3 ftco-animate d-flex justify-content-center">
                            <div class="staff">
                                <div class="img"
                                    style="background-image: url({{ asset('storage/public/' . $team->photo) }});"> </div>
                                <div class="text pt-4">
                                    <h3>{{ $team->name }}</h3> <span
                                        class="position"><strong>{{ $team->role }}</strong></span>
                                    <ul class="ftco-social d-flex justify-content-start mt-0">
                                        <li class="ftco-animate" {{ $team->linkedin ? '' : 'hidden' }}> <a
                                                href="{{ $team->linkedin }}" target="_blank"><span
                                                    class="icon-linkedin"></span></a> </li>
                                        <li class="ftco-animate" {{ $team->twitter ? '' : 'hidden' }}> <a
                                                href="{{ $team->twitter }}" target="_blank"><span
                                                    class="icon-twitter"></span></a> </li>
                                        <li class="ftco-animate" {{ $team->facebook ? '' : 'hidden' }}> <a
                                                href="{{ $team->facebook }}" target="_blank"><span
                                                    class="icon-facebook"></span></a> </li>
                                        <li class="ftco-animate {{ $team->email ? '' : 'hidden' }}"> <a
                                                href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $team->email }}"
                                                target="_blank"><span class="icon-envelope-o"></span></a> </li>
                                        <li class="ftco-animate" {{ $team->instagram ? '' : 'hidden' }}> <a
                                                href="{{ $team->instagram }}" target="_blank"><span
                                                    class="icon-instagram"></span></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section> --}}
@endsection
