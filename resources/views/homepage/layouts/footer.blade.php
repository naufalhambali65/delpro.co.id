<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <a class="navbar-brand logo-wrapper p-0 mb-3" href="{{ route('home') }}"><img
                            src="/homepage_assets/images/logo/delpro_white.png" alt="Delpro Logo" style="z-index: 1">
                    </a>
                    <p style="text-align: justify">{{ __('layout.footer.description') }}</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            {{-- <div class="col-md"></div> --}}
            <div class="col-md"></div>
            {{-- <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2 mb-0">{{ __('layout.footer.links') }}</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}">{{ __('layout.nav.home') }}</a></li>
                        <li><a href="{{ route('about') }}">{{ __('layout.nav.about') }}</a></li>
                        <li><a href="{{ route('project') }}">{{ __('layout.nav.project') }}</a></li>
                        <li><a href="{{ route('team') }}">{{ __('layout.nav.people') }}</a></li>
                        <li><a href="{{ route('client') }}">{{ __('layout.nav.client') }}</a></li>
                        <li><a href="{{ route('contact') }}">{{ __('layout.nav.contact') }}</a></li>
                        @if (auth()->user())
                            <li><a href="{{ route('admin') }}">{{ __('layout.nav.admin') }}</a></li>
                        @else
                            <li><a href="{{ route('login.index') }}">{{ __('layout.nav.login') }}</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2 mb-0">{{ __('layout.footer.services') }}</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('contact') }}">{{ __('layout.footer.s1') }}</a></li>
                        <li><a href="{{ route('contact') }}">{{ __('layout.footer.s2') }}</a></li>
                        <li><a href="{{ route('contact') }}">{{ __('layout.footer.s3') }}</a></li>
                        <li><a href="{{ route('contact') }}">{{ __('layout.footer.s4') }}</a></li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2 mb-0">{{ __('layout.footer.question') }}</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span
                                    class="text">{{ __('layout.footer.address') }}</span></li>
                            <li><a href="https://wa.me/628112283338?text=Halo Admin Delpro aku mau tanya nih"><span
                                        class="icon icon-phone"></span><span class="text">+62 811
                                        228 3338</span></a></li>
                            <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=halo@delpro.co.id"><span
                                        class="icon icon-envelope"></span><span
                                        class="text">halo@delpro.co.id</span></a></li>
                            <li><a href="https://delpro.co.id/"><span class="icon icon-globe"></span><span
                                        class="text">delpro.co.id</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> <strong><span>DELPRO</span></strong>. {{ __('layout.footer.rights') }}
                </p>
            </div>
        </div>
    </div>
</footer>
