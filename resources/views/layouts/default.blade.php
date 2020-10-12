<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('fonts/feather.svg')}} ">
    <title>Pialang System</title>
    <!-- Simple bar CSS -->
    @include('includes.style')
  </head>

  <body class="vertical  light  ">
    <div id="app">
      <div class="main-wrapper">
        {{-- <div class="navbar-bg"></div> --}}

        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg main-navbar">
          @include('includes.navbar')
        </nav>

        {{-- Sidebar --}}
        <div class="main-sidebar">
          <aside id="sidebar-wrapper">
            @include('includes.sidebar')
          </aside>
        </div>
  
        <!-- Main Content -->
        <div class="main-content">
          @yield('content')
        </div>

        {{-- Footer --}}
        <footer class="main-footer">
          @include('includes.footer')
        </footer>
      </div>
    </div>

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')

  </body>
</html>