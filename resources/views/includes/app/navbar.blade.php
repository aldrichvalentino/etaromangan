<div class="container">
  <a class="navbar-brand" href="{{ url('/') }}">
    {{ config('app.name') }}
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false"
    aria-label="Toggle navigation">
      <span class="fa fa-bars"></span> Menu
    </button>
  <div class="collapse navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active"><a href="{{ url('home') }}" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="{{ url('menu') }}" class="nav-link">Menu</a></li>
      <li class="nav-item"><a href="{{ url('orders') }}" class="nav-link">Order</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Akun</a></li>
      <li class="nav-item"><a href="{{ url('login') }}" class="nav-link">Login</a></li>
    </ul>
  </div>
</div>