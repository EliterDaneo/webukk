<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
     <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="user.php" class="brand-link">
      <li class="fas fa-book-medical" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"></li>
      <span class="brand-text font-weight-light">Peduli DIRI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <br>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="tulis_catatan.php" class="nav-link">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Catatan Perjalanan
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="rekab_catatan.php" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Rekab Catatan
              </p>
            </a>
          </li>
          <li class="nav-header">Logout Menu</li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#logOutModal">
                <i class="nav-icon fa-fw fas fa-sign-out-alt"></i>
                  <p>
                    Keluar
                  </p>
              </a>
            </li>
        </li>
        </ul>
      </nav>
    <!-- /.sidebar -->
  </aside>