<aside class="left-sidebar">
  <div>
   <!-- LOGO -->
      <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
        <img
          src="{{ asset('assets/images/logos/seodashlogo.png') }}"
          alt="SEODash"
          width="42
          class="me-2"
        >
        <span class="fw-bold">SEODash</span>
      </a>
    <!-- Sidebar navigation -->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar>
      <ul id="sidebarnav">

        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Home</span>
        </li>

        <li class="sidebar-item {{ request()->routeIs('home') ? 'selected' : '' }}">
          <a class="sidebar-link" href="{{ route('home') }}">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>

        <li class="sidebar-item {{ request()->routeIs('register.form') ? 'selected' : '' }}">
          <a class="sidebar-link" href="{{ route('register.form') }}">
            <span>
              <i class="ti ti-forms"></i>
            </span>
            <span class="hide-menu">Form Input</span>
          </a>
        </li>

      </ul>
    </nav>
  </div>
</aside>
