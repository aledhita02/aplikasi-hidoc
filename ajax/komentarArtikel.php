<?php
session_start();
include '../database/Komentar.php';
$post = $_GET['id'];
$komentar = new Komentar;

$data2 = $komentar->tampilKomentarByPost($post);
foreach ($data2 as $row2):
  ?>

  <div class="komen-lawan2 mt-4 border p-4">
    <div class="row">
      <div class="col-xl-12 col-md-5">
        <div>
          <div class="d-flex">
            <img src="<?= $row2['foto_user'] ?>" class="avatar-sm rounded-circle" alt="img" />
            <div class="flex-1 ms-4">
              <h5 class="mb-2 font-size-20 text-success">
                <?= $row2['nama'] ?>
              </h5>
              <h5 class="text-muted font-weight-normal font-size-10">
                <?php $tgl_formatted = date("d F Y, h:i A", strtotime($row2['date'])); ?>
                <?= $tgl_formatted ?>
              </h5>
              <h5 class="text-muted font-weight-normal font-size-15">
                <?= $row2['komentar'] ?>
              </h5>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <?php
endforeach;
?>