<div class="main-content">
  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="w-100">
      <div class="row">
        <div class="col-sm-8 col-md-12 col-lg-9 panel">
          <h1 class="col-12" style=" font-size: 3rem; color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
            <b>Solusi Kesehatan Terpercaya <br>Untuk Anda</b>
          </h1>
          <p class="col-sm-12 col-md-12 col-lg-12 mt-5 text-light" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
            Chat Dokter, Artikel
            Kesehatan semuanya ada di HiDoc</p>
        </div>
        <div class="col-sm-4 col-lg-3 doctor ">
          <img src="img/doctor.png">
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir jumbotron -->
  <div class="page-content">
    <div class="container-fluid">
      <!-- Info panel -->
      <div class="row panel" style="margin-top:-550px;">
        <!-- Panel Chat Dokter -->
        <div class="col-lg-3 col-md-4 col-sm-12 mb-3 panel-jarak">
          <?php if (isset($_SESSION['role'])): ?>
            <?php if ($_SESSION['role'] == 'user'): ?>
              <a href="index.php?p=select_chat" class="page-scroll">
                <div class="info-panel">
                  <img src="img/icon22.png" alt="ChatDokter">
                  <h4 class="text-success">CHAT DOKTER</h4>
                  <p class="text-dark lead font-weight-normal">Tanyakan semua gejala penyakit anda kepada dokter ahli kami.
                  </p>
                </div>
              </a>
            <?php endif; ?>
          <?php else: ?>
            <a href="#" data-signin="login" class="page-scroll">
              <div class="info-panel">
                <img src="img/icon22.png" alt="ChatDokter">
                <h4 class="text-success">CHAT DOKTER</h4>
                <p class="text-dark lead font-weight-normal">Tanyakan semua gejala penyakit anda kepada dokter ahli kami.
                </p>
              </div>
            </a>
          <?php endif; ?>
        </div>

        <!-- Panel Artikel -->
        <div class="col-lg-3 col-md-4 col-sm-12 mb-3 panel-jarak">
          <a href="#berita">
            <div class="info-panel">
              <img src="img/ic4.png" alt="Security">
              <h4 class="text-success">Artikel Terbaru</h4>
              <p class="text-dark lead font-weight-normal">Dapatkan informasi seputar kesehatan terkini dari para
                kurator kami.</p>
            </div>
          </a>
        </div>

        <!-- Panel Dokter Kami -->
        <div class="col-lg-3 col-md-4 col-sm-12 mb-3 panel-jarak">
          <a href="#ourdoctor">
            <div class="info-panel">
              <img src="img/ic_doc.png" alt="Security">
              <h4 class="text-success">DOKTER KAMI</h4>
              <p class="text-dark lead font-weight-normal">Kumpulan Dokter ahli yang berpengalaman menangani berbagai
                jenis penyakit.</p>
            </div>
          </a>
        </div>
      </div>
      <!-- Akhir info panel -->

      <!-- Working space -->
      <div class="container-fluid" id="about">
        <div class="row titleberita ml-3 mb-4">
          <div class="col-12 ml-3">
            <h1 class="text-success">About</h1>
          </div>
        </div>
        <div class="col-lg-12 mb-5">
          <div class="card">
            <div class="row g-0 align-items-center text-justify">
              <div class="col-12">
                <div class="card-body">
                  <h5 class="card-text fw-light">
                    Hidoc adalah web sebagai solusi kesehatan digital yang lengkap dan terjangkau, yang memungkinkan
                    Anda untuk mengakses layanan kesehatan berkualitas tanpa perlu meninggalkan rumah.
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end col -->
      </div>
      <!-- Akhir working space -->
      <!-- Working space -->
      <div class="container-fluid" id="berita">
        <div class="row titleberita ml-3 ">
          <div class="col-12 ml-3">
            <h1 class="text-success">Artikel Kesehatan Terkini</h1>
          </div>
        </div>

        <?php
        include 'database/Artikel.php';

        ?>
        <?php
        $artikel = new Artikel;

        $data = $artikel->tampilArtikel2();
        $i = 1;
        foreach ($data as $row):
          ?>
          <div class="col-lg-12">
            <div class="card">
              <div class="row g-0 align-items-center workingspace">
                <div class="col-md-4">
                  <img class="card-img img-fluid" src="<?= $row['foto'] ?>" alt="Card image">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">
                      <?= $row['judul'] ?>
                    </h5>
                    <p class="card-text">
                      <?= $row['artikel'] ?>
                    </p>
                    <p class="card-text"><small class="text-muted"><a
                          href="index.php?p=detail_berita&id=<?= $row['id'] ?>" class="btn btn-success tombol">Baca
                          Artikel
                          Lebih
                          Lanjut</a></small></p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- end col -->



          <?php
          $i++;
        endforeach;

        ?>

      </div>
      <!-- Akhir working space -->


      <!-- Berita -->
      <div class="container-fluid">
        <div class="row titleberita ml-3 mb-5 mt-5">
          <div class="col-12 ml-3">
            <h1 class="text-success">Artikel Kesehatan Lainnya</h1>
          </div>
        </div>

        <div class="container d-flex">
          <div class="row berita mx-auto">
            <?php
            $artikel = new Artikel;

            $data = $artikel->tampilArtikel();
            $i = 1;
            foreach ($data as $row):
              ?>
              <div class="col-lg-4 col-md-6 col-sm-12 mb-5 mr-5 mx-auto">
                <div class="card my-2 shadow w-1000" style="width: 20em; border-radius:5%; height:23rem">
                  <img src="<?= $row['foto'] ?>" alt="workingspace" class="card-img-top my-3 mx-auto ">
                  <div class="card-body">
                    <h4 class="card-title">
                      <?= $row['judul'] ?>
                    </h4>
                    <p class="card-text font-size">
                      <?= $row['artikel'] ?>
                    </p>
                  </div>
                  <div class="card-footer">
                    <small class="text-success">
                      <?php
                      $harijam = $row['date'];
                      $date = strtotime($harijam);
                      echo date('M - H:I', $date);
                      ?>
                    </small>
                    <a href="index.php?p=detail_berita&id=<?= $row['id'] ?>"><img src="img/next.png" alt="workingspace"
                        class="float-right" style="width:30px; height: 30px;"></a>
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

      <!-- Informasi Dokter -->
      <div class="container-fluid" id="ourdoctor">
        <div class="row titleberita ml-3 mb-5 mt-5">
          <div class="col-12 ml-3">
            <h1 class="text-success">Dokter Kami</h1>
          </div>
        </div>

        <div class="container d-flex">
          <div class="row berita mx-auto">
            <?php
            $dtr = new Dokter;

            $data = $dtr->tampilDokterLimit();
            $i = 1;
            foreach ($data as $row):
              ?>
              <div class="col-lg-4 col-md-6 col-sm-12 mb-5 mr-5 mx-auto">
                <div class="card my-2 shadow w-1000" style="width: 20em; border-radius:5%; height:18rem">
                  <img src="<?= $row['foto_user'] ?>" alt="workingspace" class="rounded-circle mt-5 mx-auto ">
                  <div class="card-body">
                    <h4 class="card-title text-center">
                      <?= $row['nama_user'] ?>
                    </h4>
                    <p class="card-text text-center text-success">
                      <?= $row['nama_spesialisasi'] ?>
                    </p>
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
      <!-- Akhir Dokter -->