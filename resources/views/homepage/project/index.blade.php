@extends('homepage.layouts.main')
@section('css')
    <style>
        .project-card {
            position: relative;
            overflow: hidden;
            border-radius: 4px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .project-card:hover .block-20 {
            transform: scale(1.1);
            /* Gede saat hover */
        }

        .block-20 {
            height: 400px;
            background-size: cover;
            background-position: center;
            display: block;
            border-radius: 4px;

            transition: transform 0.5s ease;
        }

        .overlay-info {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(118, 116, 116, 0.55);
            color: #fff;
            padding: 8px 12px;
            font-size: 13px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }

        .title-card {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(118, 116, 116, 0.55);
            padding: 12px 15px;
            text-align: center;
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        .title-card a {
            color: #fff;
            font-weight: 200;
            text-decoration: none;
        }
    </style>
@endsection
@section('container')
    <section class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image: url(/homepage_assets/images/bg_1.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Project</h1>
                        <p class="breadcrumbs">
                            <span class="mr-2"><a href="{{ route('home') }}">Home</a></span>
                            <span>Project</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h1 class="mb-4">Our Projects</h1>
                    <p class="text-muted">Each project tells a story of collaboration, creativity, and meaningful impact.
                        Take a look at what
                        we’ve built together with our partners.</p>
                </div>
            </div>
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-md-4 ftco-animate">
                        <div class="blog-entry position-relative project-card">
                            <a href="{{ route('project.detail', $project->slug) }}" class="block-20 mb-0"
                                style="background-image: url('{{ asset('storage/' . $project->cover_image) }}');">
                            </a>
                            <div class="overlay-info d-flex justify-content-between">
                                <span><i class="icon-layers"></i> {{ $project->type->name }}</span>
                                <span><i class="icon-home"></i> {{ $project->style->name }}</span>
                                <span><i class="icon-map-marker"></i> {{ $project->city->name }}</span>
                                <span><i class="icon-calendar"></i> {{ $project->created_at->diffForHumans() }}</span>
                            </div>

                            <div class="title-card">
                                <h3 class="heading mb-0">
                                    <a href="{{ route('project.detail', $project->slug) }}">{{ $project->title }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
