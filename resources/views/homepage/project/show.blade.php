@extends('homepage.layouts.main')
@section('css')
    <style>
        .project-cover {
            display: block;
            width: 100%;
            max-width: 800px;
            height: auto;
            object-fit: contain;
            margin: 0 auto;
            /* biar center kalau lebih kecil dari 800px */
        }

        @media (max-width: 576px) {
            .project-cover {
                max-width: 100%;
            }
        }
    </style>
@endsection
@section('container')
    <section class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image: url(/homepage_assets/images/bg_11.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread"><strong>{{ $project->title }}</strong></h1>
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
                <div class="col-lg-12 ftco-animate text-center">
                    <h1 class="mb-3"><strong>{{ $project->title }}</strong></h1>
                    <img src="{{ asset('storage/public/' . $project->cover_image) }}" alt="{{ $project->title }}"
                        class="img-fluid project-cover">
                    {{-- Project Info --}}
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-8">
                            <div class="row d-flex justify-content-between">
                                <div class="mb-3">
                                    <p class="mb-0"><i class="icon-layers"></i> Type: {{ $project->type->name ?? '-' }}
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <p class="mb-0"><i class="icon-home"></i> Style: {{ $project->style->name ?? '-' }}
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <p class="mb-0"><i class="icon-map-marker"></i> City:
                                        {{ $project->city->name ?? '-' }}
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <p class="mb-0"><i class="icon-cube"></i> Unit Size: {{ $project->unit_size ?? '-' }}
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <p class="mb-0"><i class="icon-calendar"></i>
                                        Posted: {{ $project->created_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="text-align: justify">
                        {!! $project->description !!}
                    </div>

                </div>

            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-12 ftco-animate text-center">
                    <h2 class="mb-4"><strong>Project Galleries</strong></h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @if (count($images) > 0)
                    @foreach ($images as $image)
                        <div class="col-md-6 col-lg-3 ftco-animate">
                            <div class="project">
                                <img src="{{ asset('storage/public/' . $image) }}" class="img-fluid"
                                    alt="{{ $project->title }}">
                                <a href="{{ asset('storage/public/' . $image) }}"
                                    class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="icon-photo"></span>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection
