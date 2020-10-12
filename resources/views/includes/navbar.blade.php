<form class="form-inline mr-auto">
  {{-- <ul class="navbar-nav mr-3">
    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
  </ul> --}}
</form>

<ul class="navbar-nav navbar-right">
  <li class="dropdown">
    <a href="#" 
      data-toggle="dropdown" 
      class="nav-link dropdown-toggle nav-link-lg nav-link-user">

      <img alt="image" 
        src="{{asset('assets/img/avatar/avatar-4.png')}}" 
        class="rounded-circle mr-1">
        
      <div class="d-sm-none d-lg-inline-block"></div>
    </a>

    <div class="dropdown-menu dropdown-menu-right">
      <div class="dropdown-title">Logged in</div>

      <a href="{{ route('logout') }}" 
        class="dropdown-item has-icon"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i> {{ __('Keluar') }}
      </a>
      
    </div>
  </li>
</ul>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
   @csrf
</form>
 