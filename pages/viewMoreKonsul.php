<?php

$konsul = new Konsultasi;
$pesan = new Pesan;


$id = $_SESSION['id'];

$tampilKonsul = $konsul->tampilKonsulUserByIdSemua($id);
$hitungKonsul = $konsul->hitungKonsultasi($id);
$kurangKonsul = $konsul->hitungKonsultasiFinish($id);

$jumlahkonsul = $hitungKonsul - $kurangKonsul;



?>


<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Notification<strong>
              </strong></h4>

            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                <li class="breadcrumb-item active">Notification</li>
              </ol>
            </div>

          </div>
        </div>
      </div>
      <!-- end page title -->

      <!-- Akhir working space -->
      <!-- Working space -->
      
        <?php foreach ($tampilKonsul as $row): ?>

          <?php if ($row['status_konsul'] == 'finish'): ?>

          <?php else:
            $konsultasiDate = new DateTime($row['konsultasi_date']); ?>
            <div class="card">
              <div class="text-reset notification-item">
                <div class="d-flex">
                  <img src=" <?= $row['foto_user'] ?>" class="me-3 rounded-circle avatar-lg" alt="user-pic">
                  <div class="flex-grow-1">
                    <h4 class="mb-1"> <strong class="text-success">Dr.
                        <?= $row['nama_user'] ?>
                      </strong>&nbsp;
                      <?php if ($row['status_konsul'] == 'process'): ?>
                        <span class="badge badge-success">Process</span>
                      <?php elseif ($row['status_konsul'] == 'pending'): ?>
                        <span class="badge badge-warning">Pending</span>
                      <?php endif; ?>
                    </h4>
                    <div class="font-size-17 text-muted">
                      <p class="mb-1">
                        <?= $row['topik_konsul'] ?>
                      </p>
                      <p class="mb-0"><i class="mdi mdi-clock-outline text-success"></i> <span><small class="text-success">
                            <?= $konsultasiDate->format('d F Y, H:i A'); ?>
                          </small></span></p>
                          <br>
                      <?php if ($row['status_konsul'] == 'process'): ?>
                        <a href="index.php?p=select_chat_blank&&id_konsul=<?= $row['id_konsultasi'] ?>"><button type="button"
                            class="btn tombol btn-success putih btn-lg float-right">Lihat
                            Konsul</button></a>
                      <?php elseif ($row['status_konsul'] == 'pending'): ?>
                        <a href="process/konsul/hapusKonsul_proses.php?id=<?= $row['id_konsultasi'] ?>"><button type="button"
                            class="btn tombol btn-danger putih btn-lg float-right">Batalkan</button> </a>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
          <?php endif; ?>
        <?php endforeach; ?>


      
      <!-- Akhir working space -->
    </div>
  </div>
</div>
<!-- Akhir Dokter -->