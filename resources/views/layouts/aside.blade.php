<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/administrator" class="brand-link">
      <img src="/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Sarana Prasarana</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/" class="d-block">Dwi Nuryanto</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/kamar" class="nav-link active {{ Request::is('kamar' ? 'active' : '') }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Kamar<i class="right fas fa-angle-left"></i></p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/fasilitas-kamar" class="nav-link active {{ Request::is('fasilitas-kamar' ? 'active' : '') }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Fasilitas Kamar</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/fasilitas-umum" class="nav-link active {{ Request::is('fasilitas-umum' ? 'active' : '') }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Fasilitas Umum</p>
                </a>
            </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>