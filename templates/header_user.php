<?php
$konsul = new Konsultasi;
$pesan = new Pesan;
// Check if $_SESSION['id'] is set and not empty
if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
  $id = $_SESSION['id'];

  $hitungKonsulDokter = $konsul->hitungKonsultasiProcess($id);
  $hitungKonsulFinish = $konsul->hitungKonsultasiFinish($id);
}

// Mendefinisikan nilai $title
$title = 'Homepage';

function titleWeb($page, $title)
{
  if ($page == 'select_main') {
    $title = 'Homepage';
  } else if ($page == 'select_main_user') {
    $title = 'Homepage';
  } else if ($page == 'detail_berita') {
    $title = 'Artikel';
  } else if ($page == 'select_chat_blank') {
    $title = 'Konsultasi Dokter';
  } else if ($page == 'select_chat_blank_history') {
    $title = 'History Konsultasi Dokter';
  } else if ($page == 'select_chat') {
    $title = 'Rekomendasi Dokter';
  } else if ($page == 'edit_profil') {
    $title = 'Profile User';
  } else if ($page == 'tambahKonsul_proses') {
    $title = 'Loading...';
  } else if ($page == 'viewMoreKonsul') {
    $title = 'Notification';
  } else {
    $title = 'Error';
  }

  return $title;
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" href="img/HIDOC-logo.ico" type="image/x-icon">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Myfonts -->
  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

  <!-- Mycss -->

  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="pesan.css" rel="stylesheet">
  <title>
    <?= titleWeb($page, $title) ?>
  </title>

  <link rel="stylesheet" href="csslogin/styles.css"> <!-- Resource style -->
  <link rel="stylesheet" href="csslogin/demo.css"> <!-- Demo style -->

  <link href="open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

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

<?php
if (isset($_GET['p']) && ($_GET['p'] == 'select_chat_blank' || $_GET['p'] == 'select_chat_blank_history')):
  ?>

  <body>
    <header id="page-topbar" class="bg-success border-success">
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

        </div>
        <?php
        if (isset($_SESSION['login'])):
          ?>
          <?php
          if (($_SESSION['login']) && ($_SESSION['role'] == 'user')):
            ?>
            <?php include 'pages/navbar_user.php'; ?>
          <?php endif; ?>

        <?php endif; ?>
      </div>
    </header>
    <div class="vertical-menu">
      <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
          <!-- Left Menu Start -->
          <ul class="metismenu list-unstyled" id="side-menu">

            <li class="menu-title" data-key="t-apps">Menu</li>
            <li>
              <a href="index.php">
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
                <li><a href="index.php?p=select_chat_blank&&id_konsul=<?= $row['id_konsultasi'] ?>"
                    data-key="t-read-email">Proses Konsultasi
                    <span class="badge badge-success ms-2">
                      <?= $hitungKonsulDokter ?>
                    </span></a>
                  </a></li>
                <li><a href="index.php?p=select_chat_blank_history&&id_konsul=<?= $row['id_konsultasi'] ?>"
                    data-key="t-read-email">History Konsultasi
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
  <?php else: ?>

    <body data-layout="horizontal" data-topbar="dark">

      <!-- Begin page -->
      <div id="layout-wrapper">

        <header id="page-topbar" class="bg-success border-success">
          <div class="navbar-header js-signin-modal-trigger">
            <div class="d-flex">
              <!-- LOGO -->
              <div class="navbar-brand-box">

                <a href="index.php" class="logo logo-light">
                  <span class="logo-lg">
                    <img src="img/HIDOC.svg" alt="" height="100">
                  </span>
                </a>
              </div>

              <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
              </button>
            </div>

            <?php
            if (isset($_SESSION['login'])):
              ?>
              <?php
              if (($_SESSION['login']) && ($_SESSION['role'] == 'user')):
                ?>
                <?php include 'pages/navbar_user.php'; ?>
              <?php endif; ?>
              <?php if (($_SESSION['login']) && ($_SESSION['role'] == 'dokter')): ?>
                <a class="nav-item nav-link" href="index.php?p=edit_profil">Account</a>
                <a class="nav-item btn btn-secondary tombol" href="process/logout.php">Logout</a>

              <?php endif; ?>
              <?php if (($_SESSION['login']) && ($_SESSION['role'] == 'admin')): ?>
                <a class="nav-item nav-link" href="index.php?p=panel_admin">Panel Admin</a>
                <a class="nav-item nav-link" href="index.php?p=edit_profil">Account</a>
                <a class="nav-item btn btn-secondary tombol" href="process/logout.php">Logout</a>
              <?php endif; ?>

            <?php else: ?>
              <a class="nav-item btn btn-primary bg-secondary tombol" href="#" data-signin="login">Login</a>
            <?php endif; ?>


          </div>
        </header>

        <div class="topnav bg-success">
          <div class="container-fluid text-center">
            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

              <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav mx-auto ">

                  <li class="nav-item dropdown">
                    <a class="nav-link text-light" href="index.php?p=select_main" id="topnav-home" role="button">
                      <span data-key="t-dashboard">Home</span>
                    </a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link text-light" href="index.php?p=select_main#about" id="topnav-about" role="button">
                      <span data-key="t-dashboard">About</span>
                    </a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link text-light" href="index.php?p=select_main#berita" id="topnav-artikel"
                      role="button">
                      <span data-key="t-dashboard">Artikel</span>
                    </a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link text-light" href="index.php?p=select_main#ourdoctor" id="topnav-dokter"
                      role="button">
                      <span data-key="t-dashboard">Dokter</span>
                    </a>
                  </li>


                </ul>
              </div>
            </nav>
          </div>
        </div>
        <!-- Navbar -->

        <!-- Akhir navbar -->
      <?php endif; ?>