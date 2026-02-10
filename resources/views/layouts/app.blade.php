<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'SEODash')</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/seodashlogo.png') }}" />
  <link rel="stylesheet" href="{{ asset('assets/libs/simplebar/dist/simplebar.min.css') }}{{ file_exists(public_path('assets/libs/simplebar/dist/simplebar.min.css')) ? '?v=' . filemtime(public_path('assets/libs/simplebar/dist/simplebar.min.css')) : '' }}">
  <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}{{ file_exists(public_path('assets/css/styles.min.css')) ? '?v=' . filemtime(public_path('assets/css/styles.min.css')) : '' }}">
    @stack('styles')
</head>

<body data-bs-theme="light">
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    @include('part.sidebar')
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      @include('part.header')
      <!--  Header End -->
      <div class="container-fluid">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">@yield('title')</h5>
            @yield('content')
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}{{ file_exists(public_path('assets/libs/jquery/dist/jquery.min.js')) ? '?v=' . filemtime(public_path('assets/libs/jquery/dist/jquery.min.js')) : '' }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}{{ file_exists(public_path('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')) ? '?v=' . filemtime(public_path('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')) : '' }}"></script>
  <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}{{ file_exists(public_path('assets/libs/simplebar/dist/simplebar.js')) ? '?v=' . filemtime(public_path('assets/libs/simplebar/dist/simplebar.js')) : '' }}"></script>
  <script src="{{ asset('assets/js/sidebarmenu.js') }}{{ file_exists(public_path('assets/js/sidebarmenu.js')) ? '?v=' . filemtime(public_path('assets/js/sidebarmenu.js')) : '' }}"></script>
  <script src="{{ asset('assets/js/app.min.js') }}{{ file_exists(public_path('assets/js/app.min.js')) ? '?v=' . filemtime(public_path('assets/js/app.min.js')) : '' }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

  @stack('scripts')

  <!-- Hidden logout form (use in header link: event.preventDefault(); document.getElementById('logout-form').submit();) -->
  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
  </form>
</body>

</html>