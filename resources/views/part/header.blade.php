<header class="app-header">
  <nav class="navbar navbar-expand-lg navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item d-block d-xl-none">
        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
          <i class="ti ti-menu-2"></i>
        </a>
      </li>
    </ul>

    

    <div class="navbar-collapse justify-content-end px-0">
      <ul class="navbar-nav flex-row ms-auto align-items-center">

        <!-- PROFILE DROPDOWN -->
        <li class="nav-item dropdown">
          <a class="nav-link nav-icon-hover" href="#" id="drop2"
             data-bs-toggle="dropdown" aria-expanded="false">
            <img
              src="{{ asset('assets/images/profile/user-2.jpg') }}"
              alt="user"
              width="40"
              height="40"
              class="rounded-circle"
            >
          </a>

          <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up shadow"
               aria-labelledby="drop2"
               style="min-width: 220px;">

            <div class="px-3 py-2">
              <a href="#"
                 class="d-flex align-items-center gap-2 py-2 text-dark">
                <i class="ti ti-user fs-6"></i>
                <span>My Profile</span>
              </a>

              <hr class="my-2">

              <button
                class="btn btn-outline-primary w-100"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
              </button>
            </div>

          </div>
        </li>

      </ul>
    </div>
  </nav>
</header>