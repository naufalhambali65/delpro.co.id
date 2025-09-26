@extends('homepage.layouts.main')
@section('container')
    <section class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image: url(/homepage_assets/images/bg_2.jpg)">
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
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <h2 class="mb-4">Our Team</h2>
                    <p>Meet the people behind our success. Our dedicated team combines passion, expertise, and creativity to
                        deliver the best for our clients.</p>
                </div>
            </div>
            <div class="row">
                @if ($teams->count() > 0)
                    @foreach ($teams as $team)
                        <div class="col-md-6 col-lg-3 ftco-animate">
                            <div class="staff">
                                <div class="img" style="background-image: url({{ asset('storage/' . $team->photo) }});">
                                </div>
                                <div class="text pt-4">
                                    <h3>{{ $team->name }}</h3>
                                    <span class="position mb-2">{{ $team->role }}</span>
                                    {!! $team->description !!}
                                    <ul class="ftco-social d-flex">
                                        <li class="ftco-animate" {{ $team->linkedin ? '' : 'hidden' }}><a
                                                href="{{ $team->linkedin }}" target="_blank"><span
                                                    class="icon-linkedin"></span></a></li>
                                        <li class="ftco-animate" {{ $team->twitter ? '' : 'hidden' }}><a
                                                href="{{ $team->twitter }}" target="_blank"><span
                                                    class="icon-twitter"></span></a>
                                        </li>
                                        <li class="ftco-animate" {{ $team->facebook ? '' : 'hidden' }}><a
                                                href="{{ $team->facebook }}" target="_blank"><span
                                                    class="icon-facebook"></span></a></li>
                                        <li class="ftco-animate {{ $team->email ? '' : 'hidden' }}"><a
                                                href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $team->email }}"
                                                target="_blank"><span class="icon-envelope-o"></span></a>
                                        </li>
                                        <li class="ftco-animate" {{ $team->instagram ? '' : 'hidden' }}><a
                                                href="{{ $team->instagram }}" target="_blank"><span
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
