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
      <li class="nav-item nav-dropdown"> {{-- todo: bikin makanan ada dropdown -> daftar, tambah, hapus --}}
        <a class="nav-link nav-dropdown-toggle" 
          href="{{ url('dashboard') }}/{{ Auth::id() }}/foods"><i class="fa fa-cutlery"></i>Makanan</a>
        <ul class="nav-dropdown-items">
          <li class="nav-item">
            <a class="nav-link" 
              href="{{ url('dashboard') }}/{{ Auth::id() }}/foods/create"><i class="fa fa-plus"></i>Tambah</a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('dashboard') }}/{{ Auth::id() }}/edit"><i class="fa fa-cog"></i>Pengaturan</a>
      </li>
      
    @endguest
  </ul>
</nav>
<button class="sidebar-minimizer brand-minimizer" type="button"></button>