<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">Order Tickets</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('room') ? 'active' : '' }}" href="/room">Room</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('facility') ? 'active' : '' }}" href="/facility">Facility</a>
          </li>
        </ul>
        <form class="d-flex col-8" role="search">
          <input class="form-control mx-3" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
        </form>
        <a href="/login" class="nav-link text-white" style="margin-left: 50px"><i class="bi bi-box-arrow-in-right"></i> Login</a>
      </div>
    </div>
  </nav>