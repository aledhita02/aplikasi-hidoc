<?php
$konsul = new Konsultasi;
$pesan = new Pesan;
$id = $_SESSION['id'];

$hitungKonsulPending = $konsul->hitungKonsultasiDokterPending($id);
$hitungKonsulProcess = $konsul->hitungKonsultasiDokterProcess($id);
$hitungKonsulFinish = $konsul->hitungKonsultasiDokterFinish($id);

// Mendefinisikan nilai $page dan $title

$title = 'Homepage';

function titleWeb($page, $title) {
  if ($page == 'select_main_dokter') {
      $title = 'Homepage';
  } else if ($page == 'edit_profil') {
      $title = 'Profile Dokter';
  } else if ($page == 'pesan_pending') {
      $title = 'Antrian Pasien';
  } else if ($page == 'pesan_proses') {
      $title = 'Konsultasi Pasien';
  } else if ($page == 'pesan_history') {
      $title = 'History Konsultasi';
  } else {
      $title = 'Error';
  }
  
  return $title;
}
?>

<!doctype html>
<html lang="en">

<head>



  <title><?=titleWeb($page, $title)?></title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="icon" href="img/HIDOC-logo.ico" type="image/x-icon">

  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet">
  <link href="pesan.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
  <link href="open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">

  <!-- plugin css -->
  <link href="plugin/dist/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
    type="text/css" />

  <!-- preloader css -->
  <link rel="stylesheet" href="plugin/dist/assets/css/preloader.min.css" type="text/css" />

  <!-- Bootstrap Css -->
  <link href="plugin/dist/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

  <!-- Icons Css -->
  <link href="plugin/dist/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

  <!-- App Css-->
  <link href="plugin/dist/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

  <!-- DataTables -->
  <link href="plugin/dist/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"
    type="text/css" />
  <link href="plugin/dist/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
    type="text/css" />

  <!-- Responsive datatable examples -->
  <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
    type="text/css" />

</head>

<body>
  <header id="page-topbar">
    <div class="navbar-header bg-success">
      <div class="d-flex">
        <!-- LOGO -->
        <div class="navbar-brand-box bg-success">
          <a href="index.php" class="logo logo-dark">
            <span class="logo-sm">
              <img src="img/HIDOC-logo.svg" alt="" height="30">
            </span>
            <span class="logo-lg">
              <img src="img/HIDOC.svg" alt="" height="70"> <span class="logo-txt text-light"></span>
            </span>
          </a>

          <!-- <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.svg" alt="" height="30">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Dason</span>
                        </span>
                    </a> -->
        </div>

        <button type="button" class="text-light btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
          <i class="fa fa-fw fa-bars"></i>
        </button>

      </div>

      <div class="d-flex">
        <!-- <div class="dropdown d-none d-sm-inline-block">
                    <button type="button" class="btn header-item" id="mode-setting-btn">
                        <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                        <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                    </button>
                </div> -->

        <div class="dropdown d-inline-block">
          <button type="button" class="btn header-item bg-success " id="page-header-user-dropdown"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="bg-success rounded-circle header-profile-user" src="<?= $_SESSION['foto'] ?>"
              alt="Header Avatar">
            <span class="d-none d-xl-inline-block ms-1 fw-medium text-light">
              Dr.
              <?= $_SESSION['nama'] ?>
            </span>
            <i class="mdi mdi-chevron-down d-none d-xl-inline-block text-light"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <a class="dropdown-item" href="index.php?p=edit_profil"><i
                class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="process/logout.php"><i
                class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
          </div>
        </div>

      </div>
    </div>
  </header>
  <div class="vertical-menu">
    <div data-simplebar class="h-100">
      <!--- Sidemenu -->
      <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
          <li class="menu-title" data-key="t-menu">Menu</li>

          <li>
            <a href="index.php?p=select_main_dokter">
              <i class="fas fa-tachometer-alt"></i>
              <!-- <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span> -->
              <span data-key="t-dashboard">Dashboard</span>
            </a>
          </li>

          <li class="menu-title" data-key="t-apps">Apps</li>
          <li>
            <a href="javascript: void(0);" class="has-arrow">
            <i class="fas fa-comment-medical"></i>
              <span data-key="t-email">Konsultasi</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
              <li>
                <a href="index.php?p=pesan_pending" data-key="t-inbox"> Antrian Pasien
                  <span class="badge badge-success ms-2">
                    <?= $hitungKonsulPending ?>
                  </span></a>
              </li>
              <li><a href="index.php?p=pesan_proses" data-key="t-read-email">Proses Konsultasi
                  <span class="badge badge-success ms-2">
                    <?= $hitungKonsulProcess ?>
                  </span></a>
                </a></li>
              <li><a href="index.php?p=pesan_history" data-key="t-read-email">History Konsultasi
                  <span class="badge badge-success ms-2">
                    <?= $hitungKonsulFinish ?>
                  </span></a>
                </a></li>
            </ul>
          </li>

          <!-- belum selesai -->
          <!-- <li>
            <a href="index.php?p=lihat_artikel">
              <i data-feather="calendar"></i>
              <span data-key="t-calendar">Bukti Pembayaran User</span>
            </a>
          </li> -->


      </div>
      <!-- Sidebar -->
    </div>
  </div>