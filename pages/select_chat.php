<?php


$spesial = new Spesialisasi;
$tampilSpesial = $spesial->tampilSpesialisasi();
// $jumlahSpesial = $spesial->tampilJumlahSpesial();

$dokter = new Dokter;
$tampilDokter = $dokter->tampilDokter();
$jumlahSemuaDokter = $dokter->tampilJumlahDokter();
// var_dump($jumlahDokter);

if (isset($_GET['kode'])) {
  $kode = $_GET['kode'];
  $tampilSpesialByKode = $spesial->tampilSpesialisasiByKode($kode);
  $tampilDokter = $dokter->tampilDokterBySpesialisasi($kode);
}


?>


<?php if ($_SESSION['role'] == 'user'): ?>
  <!-- Category -->
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
          <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0 font-size-18">Rekomendasi Dokter</h4>

              <div class="page-title-right">
                <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                  <li class="breadcrumb-item active">Chat Dokter</li>
                </ol>
              </div>

            </div>
          </div>
        </div>
        <!-- end page title -->

        <div class="row">
          <div class="col-lg-3">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title mb-4">Kategori Spesialisasi</h4>

                <div>
                  <ul class="list-unstyled product-list">

                    <li> <a href="index.php?p=select_chat">
                        <button type="button" class="btn btn-sm">
                          All <span class="badge badge-secondary bg-success">
                            <?= $jumlahSemuaDokter ?>
                          </span>
                        </button>
                      </a>
                    </li>

                    <?php
                    foreach ($tampilSpesial as $row):
                      ?>
                      <li>
                        <a href="index.php?p=select_chat&&kode=<?= $row['kode_spesialisasi'] ?>">
                          <button type="button" class="btn btn-sm">
                            <?= $row['nama_spesialisasi'] ?> <span class="badge badge-secondary bg-success">
                              <?php
                              $jumlahDokter = $dokter->tampilJumlahDokterByKode($row['kode_spesialisasi']);
                              echo $jumlahDokter;
                              ?>
                            </span>
                          </button>
                        </a>
                        <?php
                    endforeach;
                    ?>
                    </li>

                  </ul>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-9">

            <div class="row mb-3">
              <div class="col-xl-4 col-sm-6">
                <div class="mt-2">
                  <h5>Dokter</h5>
                </div>
              </div>
              <div class="col-lg-8 col-sm-6">
                <form class="mt-4 mt-sm-0 float-sm-end d-sm-flex align-items-center form-inline">
                  <div class="search-box me-2">
                    <div class="position-relative">
                      <input type="search" class="form-control border-0" placeholder="Cari Nama Dokter..." autofocus
                        aria-label="Search" id="keyword">
                      <button class="btn btn-success my-2 my-sm-0 ml-2" type="submit" id="tombolCari">Search</button>
                      <!-- <i class="bx bx-search-alt search-icon"></i> -->
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <!-- dokter -->
            <div class="row" id="konten">
              <?php
              foreach ($tampilDokter as $row):
                ?>
                <div class="col-xl-4 col-sm-6">
                  <div class="card">
                    <div class="card-body">
                      <!-- <div class="pricing-badge">
                        <span class="badge text-white bg-primary">- 25 %</span>
                      </div> -->
                      <div class="product-img position-relative">
                        <img src="<?= $row['foto_user'] ?>" alt="" class="img-fluid mx-auto d-block">
                      </div>
                      <div class="d-flex justify-content-between align-items-end mt-4">
                        <div>
                          <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">
                              Dr.
                              <?= $row['nama_user'] ?>
                            </a></h5>
                          <p>
                            <?= $row['nama_spesialisasi'] ?>
                          </p>
                          <!-- <h5 class="my-0">
                            <span class="text-muted me-2"><del>$500</del></span>
                            <b>$450</b>
                          </h5> -->
                        </div>
                      </div>
                    </div>
                    <div class="card-footer border-0">
                      <button class="btn btn-success float-right" data-toggle="modal"
                        data-target="#form_konsul_<?= $row['id_user'] ?>" data-whatever="@getbootstrap">Konsul</button>
                    </div>
                  </div>
                </div>

                <!-- Modal konsul -->
                <div class="modal fade" id="form_konsul_<?= $row['id_user'] ?>" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Konsul</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="post" action="process/konsul/tambahKonsul_proses.php">
                          <div class="form-group text-center">
                            <img src="<?= $row['foto_user'] ?>" alt="Security" class="gambar-bulat">
                            <h2>Dr.
                              <?= $row['nama_user'] ?>
                            </h2>
                            <p class="text-hijau">
                              <?= $row['nama_spesialisasi'] ?>
                            </p>
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlTextarea1">Form Pertanyaan :</label>
                            <textarea class="form-control" rows="3" name="topik" maxlength="120" minlength="3"
                              id="text"></textarea>
                            <span class="badge badge-secondary" id="count_message"></span>

                          </div>

                          <input type="hidden" name="id_pasien" value="<?= $_SESSION['id'] ?>">
                          <input type="hidden" name="id_dokter" value="<?= $row['id_user'] ?>">

                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>


                        </form>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- Akhir Modal konsul -->


                <?php
              endforeach;
              ?>
            </div>
            <!-- end row -->

            <!-- <div class="row">
              <div class="col-lg-12">
                <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
                  <li class="page-item disabled">
                    <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                  </li>
                  <li class="page-item">
                    <a href="javascript: void(0);" class="page-link">1</a>
                  </li>
                  <li class="page-item active">
                    <a href="javascript: void(0);" class="page-link">2</a>
                  </li>
                  <li class="page-item">
                    <a href="javascript: void(0);" class="page-link">3</a>
                  </li>
                  <li class="page-item">
                    <a href="javascript: void(0);" class="page-link">4</a>
                  </li>
                  <li class="page-item">
                    <a href="javascript: void(0);" class="page-link">5</a>
                  </li>
                  <li class="page-item">
                    <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                  </li>
                </ul>
              </div>
            </div> -->
          </div>
        </div>

        <?php

        $konsul = new Konsultasi;
        $pesan = new Pesan;

        if (isset($_GET['id_konsul'])):
          $id_konsul = $_GET['id_konsul'];
          $lihatkonsul = $konsul->tampilKonsulById($id_konsul);


          $lihatpesan = $pesan->tampilPesanByIdKonsul($id_konsul);
          ?>
        <?php endif; ?>

        <script src="js/cariDokter.js"></script>

      <?php else: ?>
        <script type="text/javascript">
          alert('Anda Harus Login sebagai user');
          window.location = 'process/logout.php';
        </script>



      <?php endif; ?>


      <script src="http://code.jquery.com/jquery-1.5.js"></script>
      <script>
        var text_max = 120;
        $('#count_message').html('0 / ' + text_max);

        $('#text').keyup(function () {
          var text_length = $('#text').val().length;
          var text_remaining = text_max - text_length;

          $('#count_message').html(text_length + ' / ' + text_max);
        });
      </script>