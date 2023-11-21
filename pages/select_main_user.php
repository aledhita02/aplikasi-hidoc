<!-- Info panel -->
  <div class="row">
    <div class="col-12">
      <div class="row d-flex justify-content-center ashiapp">
        <?php if(isset($_SESSION['role'])): ?>
        <?php if ($_SESSION['role']=='user'): ?>
        <a href="index.php?p=select_chat" class="page-scroll">
          <div class="col-lg info-panel mr-3 mb-3">
            <img src="img/icon22.png" alt="ChatDokter">
            <h4>CHAT DOKTER</h4>
            <p>Tanyakan kepada dokter ahli.</p>
          </div>
        </a>
        <?php endif ; ?>
        <?php else: ?>
        <a href="#" data-signin="login" class="page-scroll">
          <div class="col-lg info-panel mr-3 mb-3">
            <img src="img/icon22.png" alt="ChatDokter">
            <h4>CHAT DOKTER</h4>
            <p>Tanyakan kepada dokter ahli.</p>
          </div>
        </a>
      <?php endif ;?>

      <?php if(isset($_SESSION['role'])): ?>
      <?php if ($_SESSION['role']=='user'): ?>
        <a href="pages/select_chat_blank.php" target="_blank">
          <div class="col-lg info-panel mr-3 mb-3">
            <img src="img/icon11.png" alt="High Res">
            <h4>Pesan</h4>
            <p>Lihat semua pesan anda disini.</p>
          </div>
        </a>
      <?php endif ;?>
      <?php else: ?>
        <a href="#">
          <div class="col-lg info-panel mr-3 mb-3">
            <img src="img/icon11.png" alt="High Res">
            <h4>Pesan</h4>
            <p>Lihat semua pesan anda disini.</p>
          </div>
        </a>

      <?php endif; ?>


        <a href="#berita">
          <div class="col-lg info-panel mr-3 mb-3">
            <img src="img/ic4.png" alt="Security">
            <h4>Artikel Kesehatan</h4>
            <p>Dapatkan informasi seputar kesehatan terkini</p>
          </div>
        </a>

        <a href="#ourdoctor"  >
          <div class="col-lg info-panel mr-3 mb-3">
            <img src="img/ic_doc.png" alt="Security">
            <h4>Dokter Kami</h4>
            <p>Cari nama dokter atau spesialisasi disini</p>
          </div>
        </a>

      </div>
    </div>
  </div>
  <!-- Akhir info panel -->
<!-- Working space -->


<?php
  include 'database/Artikel.php';

 ?>
   <?php
          $artikel = new Artikel;

          $data = $artikel->tampilArtikel2();
          $i = 1;
          foreach ($data as $row) :
        ?>

  <div class="row workingspace" id="berita">
    <div class="col-lg-6">
      <img src="<?= $row['foto'] ?>" alt="workingspace" class="img-fluid">
    </div>
    <div class="col-lg-6">
      <h3><?= $row['judul'] ?></h3>
      <p><?= $row['artikel'] ?></p>
      <a href="index.php?p=detail_berita&id=<?=$row['id']?>" class="btn btn-secondary tombol">Read More</a>
    </div>

  </div>
          <?php
              $i++;
        endforeach;

        ?>
  <!-- Akhir working space -->

  <!-- Berita -->
  <div class="row titleberita">
    <div class="col-12">
      <h1>berita terbaru</h1>
    </div>
  </div>

  <div class="row berita">
     <?php
          $artikel = new Artikel;

          $data = $artikel->tampilArtikel();
          $i = 1;
          foreach ($data as $row) :
        ?>
    <div class="col-lg-6 maelee">
      <img src="<?= $row['foto'] ?>" alt="workingspace" class="float-left">
      <h3><?= $row['judul'] ?></h3>
      <p><?= $row['artikel'] ?></p>
       <small class="text-warning">
         <?php
            $harijam = $row['date'] ;
            $date = strtotime($harijam);
            echo date('M - H:I', $date);
          ?>
        </small>
      <a href="index.php?p=detail_berita&id=<?=$row['id']?>"><img src="img/next.png" alt="workingspace" class="float-right" style="width:30px; height: 30px;"></a>

    </div>
     <?php
              $i++;
        endforeach;

        ?>
  </div>

  <!-- Akhir berita -->

<!--   Informasi Dokter -->
  <div class="row titleberita" id="ourdoctor">
    <div class="col-10">
      <h1>our doctor</h1>
    </div>
    <!-- <div class="col-2">
      <a href="#"><img class="float-right nextdoc" src="img/next2.png"></a>
      <a href="#"><img class="float-right nextdoc" src="img/prev2.png"></a>
    </div> -->
  </div>


    <div class="row justify-content-center ashiapp">

      <?php
           $dtr = new Dokter;

           $data = $dtr->tampilDokterLimit();
           $i = 1;
           foreach ($data as $row) :
         ?>


        <!-- <a href="index.php"> -->
          <div class="col-lg ourdoctor maelee mb-3">
            <div class="ourdoctortempat">
              <img src="<?= $row['foto_user'] ?>" alt="Security">
            </div>
            <h4>Dr. <?= $row['nama_user'] ?></h4>
            <p>Spesialis <?= $row['nama_spesialisasi'] ?></p>
          </div>
        <!-- </a> -->


        <?php
                 $i++;
           endforeach;

           ?>

        <!-- <a href="index.php?id=2">
          <div class="col-lg ourdoctor maelee mb-3">
            <div class="ourdoctortempat">
              <img src="img/doctor2.jpg" alt="Security">
            </div>
            <h4>Location</h4>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
        </a>

        <a href="index.php?id=3">
          <div class="col-lg ourdoctor maelee mb-3">
            <div class="ourdoctortempat">
              <img src="img/doctor3.jpg" alt="Security">
            </div>
            <h4>Location</h4>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
        </a>

        <a href="#">
          <div class="col-lg ourdoctor maelee mb-3">
            <div class="ourdoctortempat">
              <img src="img/doctor4.jpg" alt="Security">
            </div>
            <h4>Location</h4>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
        </a> -->
    </div>

  <!-- Akhir Informasi Dokter -->
