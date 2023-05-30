<body class="hold-transition sidebar-mini">
  <div class="wrapper">


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="<?= base_url('asset/template/') ?>dist/img/pku.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <div class="brand-text font-weight-light">RS PKU Gamping</div>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <!-- <img src="<?= base_url('asset/img/profile/') . $user['image']; ?>" class="img-circle elevation-2" alt="User Image"> -->
          </div>
          <div class="info">
            <!-- <a href="#" class="d-block"><?= $user['name']; ?></a> -->
          </div>
        </div>
       

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

      <!-- Main Content -->
      <div id="content">


        <!-- Sidebar Menu -->

        
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
              <a href="<?= base_url('index.php/dashboard') ?>" class="nav-link active">
                <i class="fas fa-fw nav-icon fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Rekam Medis
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('index.php/pasien') ?>" class="nav-link" >
                <i class="fas fa-fw nav-icon fa-users"></i>
                <p>Master Data Pasien</p>
              </a>
            </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Pendaftaran
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('index.php/pasien') ?>" class="nav-link" >
                <i class="fas fa-fw nav-icon fa-users"></i>
                <p>Master Data Pasien</p>

        <!-- Topbar -->
        <nav class="main-header navbar navbar-expand navbar-light bg-white topbar mb-0 static-top shadow">

          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="index3.html" class="nav-link">Home</a>
            </li>

            <!-- <li class="nav-item">
              <a href="<?= base_url('index.php/kunjungan') ?>" class="nav-link">
                <i class="fas fa-fw nav-icon fa-user-md"></i>
                <p>Kunjungan</p>

              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('index.php/pendaftaran') ?>" class="nav-link" >
                <i class="fas fa-fw nav-icon fa-users"></i>
                <p>Entri Kunjungan</p>
              </a>
            </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Perawat
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('') ?>" class="nav-link" >
                <i class="fas fa-fw nav-icon fa-users"></i>
                <p>Transfusi Darah</p>
              </a>
            </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Bidan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('') ?>" class="nav-link" >
                <i class="fas fa-fw nav-icon fa-users"></i>
                <p>Assesmen Kebidanan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('index.php/catatanpersalinan') ?>" class="nav-link">
                <i class="fas nav-icon fa-fw fa-crutch"></i>
                <p>Catatan Persalinan</p>

            <li class="nav-item d-none d-sm-inline-block">
              <a href="#" class="nav-link">Contact</a>
            </li>
          </ul>

          <!-- Topbar Search -->
          <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100">
            <div class="input-group" data-widget="sidebar-search">
              <input class="form-control bg-light border-1 small" type="search" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-sidebar bg-primary">
                  <i class="fas fa-search fa-fw"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <div class="form-inline mr-auto w-100">
                  <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control bg-light border-0 small" type="search" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-sidebar bg-primary">
                        <i class="fas fa-search fa-fw"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>

              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Notification
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">April 30, 2023</div>
                    <span class="font-weight-bold">"Laut yang tenang tak pernah membuat pelaut yang handal."</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">April 30, 2023</div>
                    "Jadilah orang baik, tapi jangan buang waktu untuk membuktikannya!"
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">April 30, 2023</div>
                    "Jadilah pelangi di awan orang lain!"
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Notification</a>
              </div>
            </li>

            </ul>
          </li>
            <!-- <li class="nav-item">
              <a href="<?= base_url('index.php/kunjungan') ?>" class="nav-link">
                <i class="fas fa-fw nav-icon fa-user-md"></i>
                <p>Kunjungan</p>
              </a>
            </li> -->
 <!-- #region -->
            <!-- Divider -->
            <hr class="sidebar-divider mt-3">


            <div class="topbar-divider d-none d-sm-block"></div>



            
            <!-- Nav Item - Logout -->
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-fw nav-icon fa-sign-out-alt"></i>
                <span>Logout</span></a>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                <img class="img-profile img-responsive rounded-circle" width="32px" src="<?= base_url('asset/img/profile/') . $user['image']; ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="<?= base_url('auth/registration'); ?>">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Add User
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>

            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="index3.html" class="brand-link">
            <img src="<?= base_url('asset/template/') ?>dist/img/pku.png" alt="Logo RS PKU Gamping" class="brand-image img-circle elevation-3" style="opacity: .8">
            <div class="brand-text font-weight-light">RS PKU Gamping</div>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                  <a href="<?= base_url('index.php/dashboard') ?>" class="nav-link active">
                    <i class="fas fa-fw nav-icon fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('index.php/pasien') ?>" class="nav-link">
                    <i class="fas fa-fw nav-icon fa-users"></i>
                    <p>Pasien</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?= base_url('index.php/perawat') ?>" class="nav-link">
                    <i class="fas fa-fw nav-icon fa-user-md"></i>
                    <p>Perawat</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas nav-icon fa-fw fa-crutch"></i>
                    <p>Transfusi Darah</p>
                  </a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider mt-3">

                <!-- Nav Item - Logout -->
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw nav-icon fa-sign-out-alt"></i>
                    <p>Logout</p>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0"><?= $title ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"><?= $title ?></li>
                  </ol>

                </div><!-- /.container-fluid -->
              </div>
              <!-- /.content-header -->