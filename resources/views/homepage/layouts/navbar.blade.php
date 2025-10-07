<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand logo-wrapper p-0" href="{{ route('home') }}"><img
                src="/homepage_assets/images/logo/delpro.png" alt="Delpro Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if (Request::is('/')) active @endif"><a href="{{ route('home') }}"
                        class="nav-link">Home</a></li>
                <li class="nav-item @if (Request::is('about')) active @endif"><a href="{{ route('about') }}"
                        class="nav-link">About</a></li>
                <li class="nav-item @if (Request::is('project*')) active @endif"><a href="{{ route('project') }}"
                        class="nav-link">Project</a></li>
                <li class="nav-item @if (Request::is('people')) active @endif"><a href="{{ route('team') }}"
                        class="nav-link">People</a></li>
                <li class="nav-item @if (Request::is('client')) active @endif"><a href="{{ route('client') }}"
                        class="nav-link">Client</a></li>
                <li class="nav-item @if (Request::is('contact')) active @endif"><a href="{{ route('contact') }}"
                        class="nav-link">Contact</a></li>
                @if (auth()->user())
                    <li class="nav-item"><a href="{{ route('admin') }}" class="nav-link">Admin</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
