<?php
$konsul = new Konsultasi;
$id = $_SESSION['id'];

$tampilKonsul = $konsul->tampilKonsulUserByIdSemua($id);
$hitungKonsul = $konsul->hitungKonsultasi($id);
$kurangKonsul = $konsul->hitungKonsultasiFinish($id);

$jumlahkonsul = $hitungKonsul - $kurangKonsul;



?>
<div class="d-flex">

          <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item noti-icon position-relative"
              id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <i data-feather="bell" class="icon-lg"></i>
              <span class="badge bg-danger rounded-pill">
                <?= $jumlahkonsul ?>
              </span>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
              aria-labelledby="page-header-notifications-dropdown">
              <div class="p-3">
                <div class="row align-items-center">
                  <div class="col">
                    <h6 class="m-0"> Notifications </h6>
                  </div>

                  <div class="col-auto">
                    <a href="#!" class="small text-reset text-decoration-none text-success"> Unread (
                      <?= $jumlahkonsul ?>)
                    </a>
                  </div>

                </div>
              </div>
              <div data-simplebar style="max-height: 230px;">
                <?php foreach ($tampilKonsul as $row): ?>

                  <?php if ($row['status_konsul'] == 'finish'): ?>

                  <?php else: ?>
                    <div class="text-reset notification-item">
                      <div class="d-flex">
                        <img src="img/doctor1.jpg" class="me-3 rounded-circle avatar-sm" alt="user-pic">
                        <div class="flex-grow-1">
                          <h6 class="mb-1"> <strong class="text-success">Dr.
                              <?= $row['nama_user'] ?>
                            </strong>&nbsp;
                            <?php if ($row['status_konsul'] == 'process'): ?>
                              <span class="badge badge-primary">Process</span>
                            <?php elseif ($row['status_konsul'] == 'pending'): ?>
                              <span class="badge badge-warning">Pending</span>
                            <?php endif; ?>
                          </h6>
                          <div class="font-size-13 text-muted">
                            <p class="mb-1">
                              <?= $row['topik_konsul'] ?>
                            </p>
                            <p class="mb-0"><i class="mdi mdi-clock-outline text-success"></i> <span><small
                                  class="text-success">
                                  <?= $row['konsultasi_date'] ?>
                                </small></span></p>
                            <?php if ($row['status_konsul'] == 'process'): ?>
                              <a href="pages/select_chat_blank.php?id_konsul=<?= $row['id_konsultasi'] ?>"
                                target="_blank"><button type="button" class="btn tombol hijau putih btn-sm float-right">Lihat
                                  Konsul</button></a>
                            <?php elseif ($row['status_konsul'] == 'pending'): ?>
                              <a href="process/konsul/hapusKonsul_proses.php?id=<?= $row['id_konsultasi'] ?>"><button
                                  type="button" class="btn tombol btn-danger putih btn-sm float-right">Batalkan</button> </a>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endif; ?>
                <?php endforeach; ?>


              </div>
              <div class="p-2 border-top d-grid">
                <a class="btn btn-sm btn-link font-size-14 text-center text-success" href="javascript:void(0)">
                  <i class="mdi mdi-arrow-right-circle me-1"></i> <span>View More..</span>
                </a>
              </div>
            </div>

          </div>

          <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item bg-light-subtle border-start border-end"
              id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="rounded-circle header-profile-user" src="<?= $_SESSION['foto'] ?>"
                alt="Header Avatar">
              <span class="d-none d-xl-inline-block ms-1 fw-medium"><?= $_SESSION['nama'] ?></span>
              <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
            </button>
            <div class="dropdown-menu col-4 dropdown-menu-end">
              <!-- item-->
              <a class="dropdown-item" href="index.php?p=edit_profil"><i
                  class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="process/logout.php"><i
                  class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
            </div>
          </div>

        </div>