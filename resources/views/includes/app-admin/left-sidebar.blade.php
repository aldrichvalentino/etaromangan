<nav class="sidebar-nav">
  <ul class="nav">
    @guest
      <li class="nav-title">
        Users
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}"><i class="icon-login"></i> Login</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}"><i class="icon-user"></i> Register <span class="badge badge-primary">NEW</span></a>
      </li>
    @else
      <li class="nav-item">
        <a class="nav-link" href="{{ url('dashboard') }}/{{ Auth::id() }}"><i class="icon-speedometer"></i> Dashboard <span class="badge badge-primary">NEW</span></a>
      </li>
      <li class="nav-title">
        Beranda
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('dashboard') }}/{{ Auth::id() }}/orders"><i class="fa fa-list-ul"></i>Pesanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('dashboard') }}/{{ Auth::id() }}/foods"><i class="fa fa-star-o"></i>Makanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('dashboard') }}/{{ Auth::id() }}/edit"><i class="fa fa-cog"></i>Pengaturan</a>
      </li>
      <li class="nav-item nav-dropdown">
          <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Base</a>
          <ul class="nav-dropdown-items">
            <li class="nav-item">
              <a class="nav-link" href="base-breadcrumb.html"><i class="icon-puzzle"></i> Breadcrumb</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="base-cards.html"><i class="icon-puzzle"></i> Cards</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="base-carousel.html"><i class="icon-puzzle"></i> Carousel</a>
            </li>
          </ul>
        </li>
    @endguest
  </ul>
</nav>
<button class="sidebar-minimizer brand-minimizer" type="button"></button>