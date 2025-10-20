@extends('homepage.layouts.main')

@section('css')
    <style>
        .team-photo {
            width: 250px;
            height: 300px;
            object-fit: cover;
            border-radius: 4px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }

        .side-image {
            position: fixed;
            top: 0;
            right: 0;
            height: 100vh;
            width: 300px;
            object-fit: cover;
            z-index: -1;
            object-position: right;
        }

        @media (max-width: 991.98px) {
            .side-image {
                display: none;
            }
        }
    </style>
@endsection

@section('container')
    <img src="/homepage_assets/images/bg_11.jpg" alt="Side Decoration" class="side-image">
    {{-- <section class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image: url(/homepage_assets/images/bg_12.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread"><strong>People</strong></h1>
                        <p class="breadcrumbs"> <span class="mr-2"><a href="{{ route('home') }}">Home</a></span>
                            <span>People</span> </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="ftco-section py-5">
        <div class="container">
            <br>
            <div class="row justify-content-center my-5 pb-3">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h1 class="mb-4"><strong>{{ __('team.title') }}</strong></h1>
                    <p class="text-muted">
                        {{ __('team.description') }}
                    </p>
                </div>
            </div>

            @foreach ($teams as $team)
                <div class="row align-items-center ftco-animate my-3">
                    <div class="col-md-3">
                        <img src="{{ asset('storage/' . $team->photo) }}" alt="{{ $team->name }}"
                            class="img-fluid team-photo">
                    </div>
                    <div class="col-md-9">
                        <h4 class="fw-bold mb-1">
                            <strong>{{ $team->name }}</strong> | {{ $team->role }}
                        </h4>
                        <div class="fst-italic text-muted" style="text-align: justify">
                            {!! $team->description !!}
                        </div>
                        <ul class="ftco-social d-flex justify-content-start mt-0">
                            <li class="ftco-animate" {{ $team->linkedin ? '' : 'hidden' }}>
                                <a href="{{ $team->linkedin }}" target="_blank"><span class="icon-linkedin"></span></a>
                            </li>
                            <li class="ftco-animate" {{ $team->twitter ? '' : 'hidden' }}>
                                <a href="{{ $team->twitter }}" target="_blank"><span class="icon-twitter"></span></a>
                            </li>
                            <li class="ftco-animate" {{ $team->facebook ? '' : 'hidden' }}>
                                <a href="{{ $team->facebook }}" target="_blank"><span class="icon-facebook"></span></a>
                            </li>
                            <li class="ftco-animate {{ $team->email ? '' : 'hidden' }}">
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $team->email }}"
                                    target="_blank"><span class="icon-envelope-o"></span></a>
                            </li>
                            <li class="ftco-animate" {{ $team->instagram ? '' : 'hidden' }}>
                                <a href="{{ $team->instagram }}" target="_blank"><span class="icon-instagram"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>

                @if ($loop->iteration != $team->count())
                    <hr>
                @endif
            @endforeach
        </div>
    </section>
@endsection
