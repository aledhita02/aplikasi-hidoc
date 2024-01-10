<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Myfonts -->
  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

  <!-- Mycss -->

  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="pesan.css" rel="stylesheet">
  <title>Konsul Doc</title>

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
            <?php include 'pages/notif_dokter.php'; ?>
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
                <a class="nav-link text-light" href="index.php?p=select_main/#about" id="topnav-about" role="button">
                  <span data-key="t-dashboard">About</span>
                </a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link text-light" href="index.php?p=select_main/#berita" id="topnav-artikel" role="button">
                  <span data-key="t-dashboard">Artikel</span>
                </a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link text-light" href="index.php?p=select_main/#ourdoctor" id="topnav-dokter" role="button">
                  <span data-key="t-dashboard">Dokter</span>
                </a>
              </li>


            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!-- Navbar -->
    -->
    <!-- Akhir navbar -->