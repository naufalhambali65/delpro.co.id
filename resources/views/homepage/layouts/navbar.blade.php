<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand logo-wrapper p-0" href="{{ route('home') }}"><img
                src="/homepage_assets/images/logo/delpro.png" alt="Delpro Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> {{ __('layout.nav.menu') }}
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if (Request::is('/')) active @endif"><a href="{{ route('home') }}"
                        class="nav-link">{{ __('layout.nav.home') }}</a></li>
                <li class="nav-item @if (Request::is('about')) active @endif"><a href="{{ route('about') }}"
                        class="nav-link">{{ __('layout.nav.about') }}</a></li>
                <li class="nav-item @if (Request::is('project*')) active @endif"><a href="{{ route('project') }}"
                        class="nav-link">{{ __('layout.nav.project') }}</a></li>
                <li class="nav-item @if (Request::is('people')) active @endif"><a href="{{ route('team') }}"
                        class="nav-link">{{ __('layout.nav.people') }}</a></li>
                <li class="nav-item @if (Request::is('client')) active @endif"><a href="{{ route('client') }}"
                        class="nav-link">{{ __('layout.nav.client') }}</a></li>
                <li class="nav-item @if (Request::is('contact')) active @endif"><a href="{{ route('contact') }}"
                        class="nav-link">{{ __('layout.nav.contact') }}</a></li>
                @if (auth()->user())
                    <li class="nav-item"><a href="{{ route('admin') }}"
                            class="nav-link">{{ __('layout.nav.admin') }}</a></li>
                @endif
                <li class="nav-item">
                    <a href="{{ route('lang.switch', app()->getLocale() === 'id' ? 'en' : 'id') }}"
                        class="nav-link d-flex align-items-center gap-1">
                        <span class="material-symbols-outlined" style="font-size: 20px;">
                            translate
                        </span>
                        <span class="text-uppercase">
                            {{ app()->getLocale() === 'id' ? 'EN' : 'ID' }}
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
