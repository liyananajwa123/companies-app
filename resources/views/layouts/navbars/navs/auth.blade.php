<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-toggle">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
    <a class="navbar-brand" href="">{{ $namePage }}</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" >
    <!-- Navbar -->

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
    <button class="btn btn-warning position-absolute top-0 right-0" style="margin: 15px;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
      Logout
    </button>
  
    </div>
  </div>
</nav>
  <!-- End Navbar -->