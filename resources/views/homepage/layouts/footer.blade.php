    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <a class="navbar-brand logo-wrapper p-0 mb-3" href="{{ route('home') }}"><img
                                src="/homepage_assets/images/logo/delpro_white.png" alt="Delpro Logo" style="z-index: 1">
                        </a>
                        <p style="text-align: justify">Delpro is a professional interior and architectural consulting
                            brand under PT. Delapan Jaya Propertindo. We specialize in modern design, high-quality
                            details, and functional spaces—providing solutions for residential, office, and commercial
                            projects.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2 mb-0">Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('project') }}">Project</a></li>
                            <li><a href="{{ route('team') }}">Team</a></li>
                            <li><a href="{{ route('client') }}">Client</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            @if (auth()->user())
                                <li><a href="{{ route('admin') }}">Admin</a></li>
                            @else
                                <li><a href="{{ route('login.index') }}">Login</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 mb-0">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('contact') }}">Architecture & Planning</a></li>
                            <li><a href="{{ route('contact') }}">Construction & Renovation</a></li>
                            <li><a href="{{ route('contact') }}">Interior Design & Build</a></li>
                            <li><a href="{{ route('contact') }}">Furniture</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 mb-0">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Jl. Guru Tua,
                                        Kalukubula, Kec. Sigi
                                        Biromaru, Kabupaten Sigi, Sulawesi Tengah
                                        94111</span></li>
                                <li><a href="https://wa.me/628112283338?text=Halo Admin Delpro aku mau tanya nih"><span class="icon icon-phone"></span><span
                                            class="text">+62 811
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

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> <strong><span>DELPRO</span></strong>. All Rights Reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
