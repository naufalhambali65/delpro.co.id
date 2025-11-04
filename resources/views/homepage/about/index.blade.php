@extends('homepage.layouts.main')
@section('container')
    <section class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image:url(/homepage_assets/images/bg_23.png);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text slider-menu justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread"><strong>{{ __('about.title') }}</strong></h1>
                        <p class="breadcrumbs">
                            <span class="mr-2"><a href="{{ route('home') }}">{{ __('about.home') }}</a></span>
                            <span>{{ __('about.title') }}</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftc-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-5 p-md-5 img img-2" style="background-image: url(/homepage_assets/images/bg_24.png);">
                </div>
                <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section mb-5 pl-md-5 heading-section-with-line">
                        <div class="pl-md-5 ml-md-5">
                            <span class="subheading"><strong>{{ __('about.subheading') }}</strong></span>
                            <h2 class="mb-4"><strong>{{ __('about.heading') }}</strong></h2>
                        </div>
                    </div>
                    <div class="pl-md-5 ml-md-5 mb-5" style="text-align: justify">
                        <p>{{ __('about.paragraph1') }}</p>

                        <p>{!! __('about.paragraph2') !!}</p>

                        <p>{{ __('about.paragraph3') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
