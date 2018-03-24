<ol class="breadcrumb">
  @yield('breadcrumbs')
  <!-- Breadcrumb Menu-->
  @auth
  <li class="breadcrumb-menu d-md-down-none">
    <div class="btn-group" role="group" aria-label="Button group">
      <a class="btn" href="#"><i class="icon-speech"></i></a>
      <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
      <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
    </div>
  </li>
  @endauth
</ol>