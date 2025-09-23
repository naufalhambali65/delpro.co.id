  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="{{ route('home') }}" class="nav-link">Homepage</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block @if (Request::is('admin')) active @endif">
              <a href="{{ route('admin') }}" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block @if (Request::is('admin/projects*')) active @endif">
              <a href="{{ route('projects.index') }}" class="nav-link">Projects</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block @if (Request::is('admin/clients*')) active @endif">
              <a href="{{ route('clients.index') }}" class="nav-link">Clients</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block @if (Request::is('admin/teams*')) active @endif">
              <a href="{{ route('teams.index') }}" class="nav-link">Teams</a>
          </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item">
              <form action="{{ route('logout') }}" method="post">
                  @csrf
                  <button type="input" class="nav-link border-0 bg-transparent btn-logout">Logout</button>
              </form>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt"></i>
              </a>
          </li>
      </ul>
  </nav>
  <!-- /.navbar -->
