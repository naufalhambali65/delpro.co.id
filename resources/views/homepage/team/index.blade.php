@extends('homepage.layouts.main')
@section('css')
    <style>
        .team-photo {
            width: 250px;
            /* lebar tetap */
            height: 300px;
            /* tinggi tetap */
            object-fit: cover;
            /* biar proporsional, tidak gepeng */
            border-radius: 4px;
            /* sudut membulat elegan */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
        }
    </style>
@endsection
@section('container')
    <section class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image: url(/homepage_assets/images/bg_12.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Team</h1>
                        <p class="breadcrumbs">
                            <span class="mr-2"><a href="{{ route('home') }}">Home</a></span>
                            <span>Team</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section py-5">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h1 class="mb-4">Meet Our Team</h1>
                    <p class="text-muted">
                        We attract, develop, and retain the best talent among the industry in our organization.
                        Meet our team who hold the leadership positions:
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
                        <h4 class="fw-bold mb-1">{{ $team->name }} <span class="text-warning">|
                                <strong>{{ $team->role }}</strong></span>
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
