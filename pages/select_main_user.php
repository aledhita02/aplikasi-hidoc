<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="w-100">
    <div class="row">
      <div class="col-sm-8 ">
        <h1 class="display-3 text-start font-weight-normal shadow-sm " style=" margin-top : 200px; font-size: 5rem; color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"><b>Solusi Kesehatan Terpercaya <br>Untuk Anda</b></h1>
        <p class="mt-5 text-light" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);"> Chat Dokter, Artikel Kesehatan semuanya ada di HiDoc</p>
      </div>
      <div class="col-sm-4 doctor ">
        <img src="img/doctor.png">
      </div>
    </div>
  </div>
</div>
<!-- Akhir jumbotron -->


<!-- Info panel -->
<div class="row">
  <div class="col-12">
    <div class="row d-flex justify-content-start ashiapp" style="margin-top: -20rem; margin-left: 12rem;">

      <!-- Panel Chat Dokter -->
      <?php if (isset($_SESSION['role'])) : ?>
        <?php if ($_SESSION['role'] == 'user') : ?>
          <a href="index.php?p=select_chat" class="page-scroll">
            <div class="col-lg info-panel mr-3 mb-3">
              <img src="img/icon22.png" alt="ChatDokter">
              <h4>CHAT DOKTER</h4>
              <p class="text-dark lead font-weight-normal">Tanyakan semua gejala penyakit anda kepada dokter ahli kami.</p>
            </div>
          </a>
        <?php endif; ?>
      <?php else : ?>
        <a href="#" data-signin="login" class="page-scroll">
          <div class="col-lg info-panel mr-3 mb-3">
            <img src="img/icon22.png" alt="ChatDokter">
            <h4>CHAT DOKTER</h4>
            <p class="text-dark lead font-weight-normal">Tanyakan semua gejala penyakit anda kepada dokter ahli kami.</p>
          </div>
        </a>
      <?php endif; ?>

      <!-- Panel Artikel -->
      <a href="#berita">
        <div class="col-lg info-panel mr-3 mb-3">
          <img src="img/ic4.png" alt="Security">
          <h4>Artikel Terbaru</h4>
          <p class="text-dark lead font-weight-normal">Dapatkan informasi seputar kesehatan terkini dari para kurator kami.</p>
        </div>
      </a>

      <!-- Panel Dokter Kami -->
      <a href="#ourdoctor">
        <div class="col-lg info-panel mr-3 mb-3">
          <img src="img/ic_doc.png" alt="Security">
          <h4>DOKTER KAMI</h4>
          <p class="text-dark lead font-weight-normal">Kumpulan Dokter ahli yang berpengalaman menangani berbagai jenis penyakit.</p>
        </div>
      </a>

    </div>
  </div>
</div>
<!-- Akhir info panel -->

<!-- Working space -->
<div class="container-fluid" id="berita">
  <div class="row titleberita ml-5">
    <div class="col-12 ml-3">
      <h1>Artikel Kesehatan Terkini</h1>
    </div>
  </div>

  <?php
  include 'database/Artikel.php';

  ?>
  <?php
  $artikel = new Artikel;

  $data = $artikel->tampilArtikel2();
  $i = 1;
  foreach ($data as $row) :
  ?>

    <div class="row workingspace flex justify-content-center ">
      <div class="col-lg-4">
        <img src="<?= $row['foto'] ?>" alt="workingspace" class="img-fluid">
      </div>
      <div class="col-lg-6">
        <h3><?= $row['judul'] ?></h3>
        <p><?= $row['artikel'] ?></p>
        <a href="index.php?p=detail_berita&id=<?= $row['id'] ?>" class="btn btn-secondary tombol">Baca Artikel Lebih Lanjut</a>
      </div>

    </div>
  <?php
    $i++;
  endforeach;

  ?>

</div>
<!-- Akhir working space -->

<!-- Berita -->
<div class="container-fluid">
  <div class="row titleberita ml-5 mb-5">
    <div class="col-12 ml-3">
      <h1>Artikel Kesehatan Lainnya</h1>
    </div>
  </div>

  <div class="container d-flex">
    <div class="row berita justify-content-center">
      <?php
      $artikel = new Artikel;

      $data = $artikel->tampilArtikel();
      $i = 1;
      foreach ($data as $row) :
      ?>
        <div class="col-4 mb-5 mr-5">
          <div class="card my-2 shadow w-1000" style="width: 23em; border-radius:5%; height:23rem">
            <img src="<?= $row['foto'] ?>" alt="workingspace" class="card-img-top my-3 mx-auto ">
            <div class="card-body">
              <h4 class="card-title"><?= $row['judul'] ?></h4>
              <p class="card-text font-size"><?= $row['artikel'] ?></p>
            </div>
            <div class="card-footer">
              <small class="text-warning">
                <?php
                $harijam = $row['date'];
                $date = strtotime($harijam);
                echo date('M - H:I', $date);
                ?>
              </small>
              <a href="index.php?p=detail_berita&id=<?= $row['id'] ?>"><img src="img/next.png" alt="workingspace" class="float-right" style="width:30px; height: 30px;"></a>
            </div>
          </div>
        </div>
      <?php
        $i++;
      endforeach;

      ?>
    </div>
  </div>
</div>
<!-- Akhir berita -->

<!--   Informasi Dokter -->
<div class="container-fluid " id="ourdoctor">
  <div class="row titleberita ml-5 mb-3">
    <div class="col-10">
      <h1>Dokter Kami</h1>
    </div>
  </div>


  <div class="row justify-content-center">

    <?php
    $dtr = new Dokter;

    $data = $dtr->tampilDokterLimit();
    $i = 1;
    foreach ($data as $row) :
    ?>


      <!-- <a href="index.php"> -->
      <div class="col-lg ourdoctor mb-3">
        <div class="ourdoctortempat">
          <img src="<?= $row['foto_user'] ?>" alt="Security">
        </div>
        <h4 class="text-center">Dr. <?= $row['nama_user'] ?></h4>
        <p>Spesialis <?= $row['nama_spesialisasi'] ?></p>
      </div>
      <!-- </a> -->


    <?php
      $i++;
    endforeach;

    ?>
  </div>
</div>
<!-- Akhir Informasi Dokter -->