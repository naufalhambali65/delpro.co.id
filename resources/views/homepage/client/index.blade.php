@extends('homepage.layouts.main')
@section('container')
    <section class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image: url(/homepage_assets/images/bg_2.jpg)">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">
                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Client</h1>
                        <p class="breadcrumbs">
                            <span class="mr-2"><a href="{{ route('home') }}">Home</a></span>
                            <span>Client</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <h2 class="mb-4">Our Client</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live
                        the blind texts. Separated they live in</p>
                </div>
            </div>
            @foreach ($datas as $categoryName => $clients)
                <div class="row ftco-animate">
                    <div class="row">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-4">{{ $categoryName }}</h2>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel">
                            @foreach ($clients as $client)
                                <div class="item">
                                    <div class="testimony-wrap p-4 pb-5">
                                        <div class="user-img "
                                            style="width: 100%;
                                        min-height: 50px;
                                        background-image: url('{{ asset('storage/' . $client['logo']) }}');
                                        background-size: contain;
                                        background-position: center;
                                        background-repeat: no-repeat;">
                                            <span class=" d-flex align-items-center justify-content-center">
                                            </span>
                                        </div>
                                        <div class="text" style="text-align: center">
                                            <p class="name">{{ $client['name'] }}</p>
                                            <span class="position">{{ $client['category'] }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
