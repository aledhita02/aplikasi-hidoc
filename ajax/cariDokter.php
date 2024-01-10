<?php
include '../database/Dokter.php';

$keyword = $_GET['keyword'];

$dokter = new Dokter;
$tampilDokter = $dokter->cariDokter($keyword);

?>
<div class="container">
  <div class="row">
    <?php foreach ($tampilDokter as $row): ?>
      <div class="col-xl-4 col-sm-6">
        <div class="card">
          <div class="card-body">
            <!-- <div class="pricing-badge">
                        <span class="badge text-white bg-primary">- 25 %</span>
                      </div> -->
            <div class="product-img position-relative">
              <img src="img/doctor1.jpg" alt="" class="img-fluid mx-auto d-block">
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
        <div class="modal-dialog" role="document">
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
                  <textarea class="form-control" rows="3" name="topik" maxlength="120" minlength="3" id="text"></textarea>
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
</div>