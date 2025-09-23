  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <div class="text-center logo-container mt-1 brand-link">
          <h3>
              <span class="brand-text font-weight-light">
                  <strong>DELPRO</strong>
              </span>
          </h3>
      </div>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="{{ route('admin') }}" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-bars"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('projects.index') }}"
                          class="nav-link {{ Request::is('admin/projects*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-pencil-ruler"></i>
                          <p>
                              Projects
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('clients.index') }}"
                          class="nav-link {{ Request::is('admin/clients*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-briefcase"></i>
                          <p>
                              Clients
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('teams.index') }}"
                          class="nav-link {{ Request::is('admin/teams*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-users"></i>
                          <p>
                              Teams
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
