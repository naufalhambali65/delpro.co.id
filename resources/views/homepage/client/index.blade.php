@extends('homepage.layouts.main')

@section('css')
    <style>
        .client-logo {
            background: #fff;
            transition: all 0.3s ease-in-out;
        }

        .client-logo:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }
    </style>
@endsection

@section('container')
    <section class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image: url(/homepage_assets/images/bg_13.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text slider-menu justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread"><strong>{{ __('client.title_single') }}</strong></h1>
                        <p class="breadcrumbs">
                            <span class="mr-2"><a href="{{ route('home') }}">{{ __('client.home') }}</a></span>
                            <span>{{ __('client.title_single') }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h1 class="mb-4"><strong>{{ __('client.title_plural') }}</strong></h1>
                    <p class="text-muted">{{ __('client.description') }}</p>
                </div>
            </div>

            @foreach ($datas as $categoryName => $clients)
                <div class="row mb-4 ftco-animate">
                    <div class="col-md-12">
                        <h4 class="mb-4 text-uppercase">
                            <strong>
                                {{ $loop->iteration == 1 ? __('client.local_brand') : __('client.international_brand') }}
                            </strong>
                        </h4>
                    </div>

                    @foreach ($clients as $client)
                        <div class="col-6 col-md-3 col-lg-2 mb-5 text-center">
                            <div class="client-logo p-3 h-100 d-flex align-items-center justify-content-center">
                                <img src="{{ asset('storage/' . $client['logo']) }}" alt="{{ $client['name'] }}"
                                    class="img-fluid" style="max-height: 80px; object-fit: contain;">
                            </div>
                            <p class="mb-4 small text-muted text-uppercase">{{ $client['name'] }}</p>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </section>
@endsection
