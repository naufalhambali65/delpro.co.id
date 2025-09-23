@extends('homepage.layouts.main')
@section('container')
    <section class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image: url(/homepage_assets/images/bg_1.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">{{ $project->title }}</h1>
                        <p class="breadcrumbs">
                            <span class="mr-2"><a href="{{ route('home') }}">Home</a></span>
                            <span>Detail Project</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ftco-animate">
                    <h2 class="mb-3">{{ $project->title }}</h2>
                    <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ $project->title }}"
                        class="img-fluid">
                    <p>
                    </p>
                    <div style="text-align: justify">
                        {!! $project->description !!}
                    </div>

                </div> <!-- .col-md-8 -->

            </div>
            <div class="row">
                <div class="col-lg-12 ftco-animate">

                </div>
            </div>
        </div>
    </section>
    <! <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-7 heading-section ftco-animate">
                    <h2 class="mb-4">All Images</h2>
                </div>
            </div>
        </div>
        <div class="container-wrap">
            <div class="row no-gutters">
                @if (count($images) > 0)
                    @foreach ($images as $image)
                        <div class="col-md-6 col-lg-3 ftco-animate">
                            <div class="project">
                                <img src="{{ asset('storage/' . $image) }}" class="img-fluid" alt="{{ $project->title }}">
                                <div class="text">
                                    <h3>{{ $project->title }}</h3>
                                </div>
                                <a href="{{ asset('storage/' . $image) }}"
                                    class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-expand"></span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        </section>
    @endsection
