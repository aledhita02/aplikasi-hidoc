<?php
  $konsul = new Konsultasi;
  $pesan = new Pesan;
  $id = $_SESSION['id'];

  $hitungKonsulPending = $konsul->hitungKonsultasiDokterPending($id);
  $hitungKonsulProcess = $konsul->hitungKonsultasiDokterProcess($id);
  $hitungKonsulFinish = $konsul->hitungKonsultasiDokterFinish($id);
 ?>

<!doctype html>
<html lang="en">
  <head>



    <title>Dokter</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <link href="pesan.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <link href="open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">

  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top hijau flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php?p=select_main">Hallo Dr. <?= $_SESSION['nama'] ?>!</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="btn btn-light" href="process/logout.php">Logout</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <li class="nav-item">
                  <a class="nav-link" href="index.php?p=edit_profil">
                  <p><img class="" src="img/cd-icon-username.svg"> Account</p>
                </a>
              </li>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?p=pesan_pending">
                  <p><img class="" src="img/cd-icon-email.svg"> Pesan Pending <span class="badge badge-secondary hijau"><?= $hitungKonsulPending ?></span></p>
                </a>
              </li>

               <li class="nav-item">
                <a class="nav-link" href="index.php?p=pesan_proses">
                  <p><img class="" src="img/cd-icon-email.svg"> Pesan Proses <span class="badge badge-secondary hijau"><?= $hitungKonsulProcess ?></span></p>
                </a>
              </li>

               <li class="nav-item">
                <a class="nav-link" href="index.php?p=pesan_history">
                  <p><img class="" src="img/cd-icon-email.svg"> Pesan History <span class="badge badge-secondary hijau"><?= $hitungKonsulFinish ?></span></p>
                </a>
              </li>




            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
