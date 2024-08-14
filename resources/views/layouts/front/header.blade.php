<header class="header-area header-sticky">
    <div class="container">
      <nav class="navbar navbar-light navbar-expand-lg fixed-top main-nav">
        <div class="container-fluid">
          <a class="navbar-brand logo_white" href="#">
            <img src="{{asset('front')}}/assets/images/logo_white.png" class="img-fluid" alt="logo">
          </a>
          <a class="navbar-brand logo_color" href="#">
            <img src="{{asset('front')}}/assets/images/logo_white.png" class="img-fluid" alt="logo">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <i class="fa fa-bars"> </i>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link @if(Route::currentRouteName() == 'home') clsActive @endif" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link @if(Route::currentRouteName() == 'about') clsActive @endif" href="{{route('about')}}">About Us </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  @if(Route::currentRouteName() == 'property') clsActive @endif " href="{{route('property')}}">Properties</a>
                </li>
                <li class="d-none nav-item">
                  {{-- <a class="nav-link  @if(Route::currentRouteName() == 'career') clsActive @endif" href="{{route('career')}}">Career</a> --}}
                </li>
                <li class="nav-item">
                  <a class="nav-link @if(Route::currentRouteName() == 'contact') clsActive @endif " href="{{route('contact')}}">Contact Us </a>
                </li>
              </ul>
              <!-- <a href="" class="btn btn-warning"><i class="fa fa-calendar"></i> Schedule a visit</a> -->
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>