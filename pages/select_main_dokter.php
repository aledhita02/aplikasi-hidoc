<?php
$konsul = new Konsultasi;
$pesan = new Pesan;
$id = $_SESSION['id'];

$hitungKonsulPending = $konsul->hitungKonsultasiDokterPending($id);
$hitungKonsulProcess = $konsul->hitungKonsultasiDokterProcess($id);
$hitungKonsulFinish = $konsul->hitungKonsultasiDokterFinish($id);


?>
<div class="alert alert-primary">
  Hi! </a>

</div>

<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Welcome, Dr.<strong>
                <?= $_SESSION['nama'] ?>
              </strong> !</h4>

            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                <li class="breadcrumb-item active">Welcome!</li>
              </ol>
            </div>

          </div>
        </div>
      </div>
      <!-- end page title -->

      <div class="row">
        <div class="col-xl-3 col-md-6">
          <!-- card -->
          <a href="index.php?p=pesan_pending">
            <div class="card card-h-100">
              <!-- card body -->
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="flex-grow-1">
                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Antrian Pasien</span>
                    <h4 class="mb-3">
                      <span>
                        <?= $hitungKonsulPending ?>
                      </span>
                    </h4>
                    <div class="text-nowrap">
                      <span class="ms-1 text-muted font-size-13">Selengkapnya</span>
                    </div>
                  </div>

                  <div class="flex-shrink-0 text-end dash-widget">
                    <i class="fas fa-hospital-user fa-5x me-3 text-success"></i>
                  </div>
                </div>
              </div><!-- end card body -->
            </div><!-- end card -->
          </a>
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
          <!-- card -->
          <a href="index.php?p=pesan_proses">
            <div class="card card-h-100">
              <!-- card body -->
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="flex-grow-1">
                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Proses Konsultasi</span>
                    <h4 class="mb-3">
                      <span>
                        <?= $hitungKonsulProcess ?>
                      </span>
                    </h4>
                    <div class="text-nowrap">
                      <span class="ms-1 text-muted font-size-13">Selengkapnya</span>
                    </div>
                  </div>
                  <div class="flex-shrink-0 text-end dash-widget">
                    <i class="fas fa-hourglass-half fa-5x me-3 text-success"></i>
                  </div>
                </div>
              </div><!-- end card body -->
            </div><!-- end card -->
          </a>
        </div><!-- end col-->

        <div class="col-xl-3 col-md-6">
          <!-- card -->
          <a href="index.php?p=pesan_history">
            <div class="card card-h-100">
              <!-- card body -->
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="flex-grow-1">
                    <span class="text-muted mb-3 lh-1 d-block text-truncate">History Konsultasi</span>
                    <h4 class="mb-3">
                      <span>
                        <?= $hitungKonsulFinish ?>
                      </span>
                    </h4>
                    <div class="text-nowrap">
                      <span class="ms-1 text-muted font-size-13">Selengkapnya</span>
                    </div>
                  </div>
                  <div class="flex-shrink-0 text-end dash-widget">
                    <i class="fas fa-history fa-5x me-3 text-success"></i>
                  </div>
                </div>
              </div><!-- end card body -->
            </div><!-- end card -->
          </a>
        </div><!-- end col -->

      </div><!-- end row-->




    </div>
    <!-- container-fluid -->
  </div>
  <!-- End Page-content -->


</div>

<!-- end main content-->