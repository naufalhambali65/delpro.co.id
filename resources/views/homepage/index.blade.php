@extends('homepage.layouts.main')
@section('container')
<section class="home-slider js-fullheight owl-carousel">
  <div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
        <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Kami Hadir untuk Menciptakan Interior yang Elegan & Fungsional</h1>
          <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Delpro adalah brand interior dari PT. Delapan Jaya Propertindo yang berfokus pada desain modern, detail berkualitas, dan kenyamanan ruang untuk rumah, kantor, maupun properti komersial Anda.</p>
          <p><a href="#" class="btn btn-white btn-outline-white px-4 py-3 mt-3">Lihat Portofolio Kami</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
        <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Mewujudkan Hunian Impian Anda</h1>
          <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Kami merancang dan mengeksekusi setiap detail interior dengan penuh perencanaan, kreativitas, dan ketelitian untuk menghadirkan kenyamanan dan keindahan pada setiap ruangan.</p>
          <p><a href="#" class="btn btn-white btn-outline-white px-4 py-3 mt-3">Lihat Portofolio Kami</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

    <section class="ftco-services bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-idea"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Desain Kreatif</h3>
            <p>Delpro menghadirkan ide-ide desain interior yang segar, elegan, dan sesuai dengan karakter ruang Anda.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-compass-symbol"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Perencanaan Detail</h3>
            <p>Setiap proyek dikerjakan dengan perencanaan yang matang agar hasil sesuai dengan harapan klien.</p>
          </div>
        </div>    
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon d-flex justify-content-center align-items-center">
            <span class="flaticon-layers"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Eksekusi Profesional</h3>
            <p>Tim Delpro memastikan setiap pengerjaan dieksekusi dengan standar tinggi, tepat waktu, dan berkualitas.</p>
          </div>
        </div>      
      </div>
    </div>
  </div>
</section>

   <section class="ftco-section ftc-no-pb">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-5 p-md-5 img img-2" style="background-image: url(images/about.jpg);">
      </div>
      <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section mb-5 pl-md-5 heading-section-with-line">
          <div class="pl-md-5 ml-md-5">
            <span class="subheading">Tentang Kami</span>
            <h2 class="mb-4">Delpro – Interior & Konsultan Arsitektur Profesional</h2>
          </div>
        </div>
        <div class="pl-md-5 ml-md-5 mb-5">
          <p><strong>Delpro</strong> adalah usaha interior yang dimiliki oleh <strong>PT. Delapan Jaya Propertindo</strong>. 
          Kami berkomitmen menghadirkan solusi interior dan arsitektur terbaik yang mengedepankan kualitas, keindahan, dan kenyamanan.</p>

          <p>Dengan pengalaman dan tim profesional, Delpro membantu mewujudkan setiap detail desain sesuai kebutuhan Anda, mulai dari perencanaan hingga pelaksanaan, agar tercipta ruang yang fungsional sekaligus estetik.</p>

          <p><a href="#" class="btn-custom">Pelajari Lebih Lanjut <span class="ion-ios-arrow-forward"></span></a></p>
        </div>
      </div>
    </div>
  </div>
</section>


  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row d-md-flex align-items-center justify-content-center">
      <div class="col-lg-4">
        <div class="heading-section pl-md-5 heading-section-white">
          <div class="pl-md-5 ml-md-5 ftco-animate">
            <span class="subheading">Delpro</span>
            <h2 class="mb-4">Fakta Menarik Tentang Kami</h2>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="row d-md-flex align-items-center">
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="10">0</strong>
                <span>Tahun Pengalaman</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="250">0</strong>
                <span>Klien Puas</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="400">0</strong>
                <span>Proyek Selesai</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="50">0</strong>
                <span>Tim Profesional</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="video-section py-5">
  <div class="container">
    <div class="video-wrapper">
      <iframe 
        width="1400" 
        height="551" 
        src="https://www.youtube.com/embed/Dl4rG7Uawno?si=QsyqLq2zefm4JZ7V" 
        title="Delpro With Client" 
       frameborder="0" 
       allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
       referrerpolicy="strict-origin-when-cross-origin" 
       allowfullscreen>
      </iframe>
    </div>
  </div>
</section>

   <section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Klien Kami</h2>
                <p>Delpro bangga dipercaya oleh berbagai klien dari beragam sektor. Setiap kerjasama menjadi bukti komitmen kami menghadirkan desain interior yang fungsional, estetik, dan bernilai tinggi.</p>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    @foreach ($clients as $client)
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img "
                                    style="width: 100%;
                                    min-height: 50px;
                                    background-image: url('{{ asset('storage/' . $client->logo) }}');
                                    background-size: contain;
                                    background-position: center;
                                    background-repeat: no-repeat;">
                                    <span class=" d-flex align-items-center justify-content-center">
                                    </span>
                                </div>
                                <div class="text" style="text-align: center">
                                    <p class="name">{{ $client->name }}</p>
                                    <span class="position">{{ $client->category->name }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Tim Kami</h2>
                <p>Di balik setiap karya Delpro, terdapat tim profesional yang berdedikasi tinggi. Kami terdiri dari desainer interior, arsitek, dan tenaga ahli yang siap mewujudkan ruang impian Anda.</p>
            </div>
        </div>
        <div class="row">
            @if ($teams->count() > 0)
                @foreach ($teams as $team)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img"
                                style="background-image: url({{ asset('storage/' . $team->photo) }});">
                            </div>
                            <div class="text pt-4">
                                <h3>{{ $team->name }}</h3>
                                <span class="position mb-2">{{ $team->role }}</span>
                                {!! $team->description !!}
                                <ul class="ftco-social d-flex justify-content-center">
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
                                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $team->email }}" target="_blank"><span class="icon-envelope-o"></span></a>
                                    </li>
                                    <li class="ftco-animate" {{ $team->instagram ? '' : 'hidden' }}>
                                        <a href="{{ $team->instagram }}" target="_blank"><span class="icon-instagram"></span></a>
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