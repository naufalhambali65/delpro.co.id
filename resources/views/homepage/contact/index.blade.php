@extends('homepage.layouts.main')

@section('css')
    <style>
        .map-responsive {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 4px;
        }

        .map-responsive iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
@endsection

@section('container')
    <section class="home-slider js-fullheight owl-carousel">
        <div class="slider-item js-fullheight" style="background-image:url(/homepage_assets/images/bg_14.png);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text slider-menu justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread"><strong>{{ __('contact.title') }}</strong></h1>
                        <p class="breadcrumbs">
                            <span class="mr-2"><a href="{{ route('home') }}">{{ __('contact.home') }}</a></span>
                            <span>{{ __('contact.title') }}</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section pt-5">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4"><strong>{{ __('contact.info_title') }}</strong></h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-3">
                    <p><span class="icon icon-map-marker"></span> Jabodetabek: Jl Griya Abdi Cilendek No. 6-7 Kota Bogor,
                        Jawa Barat</p>
                    <p><span class="icon icon-phone"></span><a
                            href="https://wa.me/62812894567?text=Halo Admin Delpro aku mau tanya nih"> +62 812 894 567</a>
                    </p>

                </div>
                <div class="col-md-3">
                    <p><span class="icon icon-map-marker"></span> Palu : Jl. Guru Tua, Kalukubula, Kec. Sigi
                        Biromaru, Kabupaten Sigi, Sulawesi Tengah 94111</p>
                    <p><span class="icon icon-phone"></span>
                        <a href="https://wa.me/628112283338?text=Halo Admin Delpro aku mau tanya nih"> +62 811 228 3338</a>
                    </p>
                </div>
                <div class="col-md-3">
                    <p><span class="icon icon-envelope"></span>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=halo@delpro.co.id">halo@delpro.co.id</a>
                    </p>
                </div>
                <div class="col-md-3">
                    <p><span class="icon icon-globe"></span> <a href="https://delpro.co.id/">delpro.co.id</a></p>
                </div>
            </div>
            <div class="row block-9">
                <div class="col-md-6 mb-5">
                    <div class="map-responsive">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2262.549796070695!2d119.88412125905519!3d-0.9341467680630283!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8bf1037628fbaf%3A0x8822baab270f360e!2sDelpro%20Interior!5e0!3m2!1sid!2sid!4v1758645491635!5m2!1sid!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-6 order-md-last pr-md-5">
                    <form action="{{ route('sendEmail') }}" method="POST" id="contactForm">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                placeholder="{{ __('contact.form.name') }}" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                                placeholder="{{ __('contact.form.email') }}" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject"
                                placeholder="{{ __('contact.form.subject') }}" value="{{ old('subject') }}" required>
                            @error('subject')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea cols="30" rows="7" name="message" class="form-control @error('message') is-invalid @enderror"
                                placeholder="{{ __('contact.form.message') }}" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" value="{{ __('contact.form.submit') }}"
                                class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
