<?php


?>
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

  </head>
  <body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container">
    <a class="navbar-brand" href="index.php?p=select_main">HiDoc</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto js-signin-modal-trigger">
        <a class="nav-item nav-link active" href="index.php?p=select_main">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#">About</a>
        <?php
          if(isset($_SESSION['login'])):
        ?>
              <?php
              if(($_SESSION['login']) && ($_SESSION['role'] == 'user')):
              ?>
                <a class="nav-item nav-link" href="index.php?p=edit_profil">Account</a>
                <a class="nav-item btn btn-secondary tombol" href="process/logout.php">Logout</a>
                <?php include 'pages/notif_user.php'; ?>
              <?php endif ;?>
              <?php if(($_SESSION['login']) && ($_SESSION['role'] == 'dokter')): ?>
                <a class="nav-item nav-link" href="index.php?p=edit_profil">Account</a>
                <a class="nav-item btn btn-secondary tombol" href="process/logout.php">Logout</a>
                <?php include 'pages/notif_dokter.php'; ?>
              <?php endif ;?>
              <?php if(($_SESSION['login']) && ($_SESSION['role'] == 'admin')): ?>
                      <a class="nav-item nav-link" href="index.php?p=panel_admin">Panel Admin</a>
                      <a class="nav-item nav-link" href="index.php?p=edit_profil">Account</a>
                      <a class="nav-item btn btn-secondary tombol" href="process/logout.php">Logout</a>
              <?php endif ;?>

            <?php else: ?>
                <a class="nav-item btn btn-secondary tombol" href="#" data-signin="login">Login</a>
          <?php endif; ?>
      </div>
    </div>
  </div>
</nav>
<!-- Akhir navbar -->


<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 ">
        <h1 class= "display-3 text-start" style=" margin-top : 200px; "><b>Solusi Kesehatan Terpercaya Untuk Anda</b></h1>
        <p class = "mt-2"> Chat Dokter, Artikel Kesehatan semuanya ada di HiDoc</p>
      </div>
      <div class="col-sm-4 doctor">
        <img src="img/doctor.png">
      </div>
  </div>
  </div>
</div>
<!-- Akhir jumbotron -->

<!-- Container -->
<div class="container">
