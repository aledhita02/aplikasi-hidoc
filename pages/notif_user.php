<?php
    $konsul = new Konsultasi;
    $id = $_SESSION['id'];

    $tampilKonsul = $konsul->tampilKonsulUserByIdSemua($id);
    $hitungKonsul = $konsul->hitungKonsultasi($id);
    $kurangKonsul = $konsul->hitungKonsultasiFinish($id);

    $jumlahkonsul = $hitungKonsul-$kurangKonsul;



 ?>

 <!-- notification -->
          <ul class="nav nav-pills mr-auto justify-content-end">
                <li class="nav-item dropdown">
                  <div class="text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="bell" src="img/turn-notifications-on-button.svg" style="width: 30px; margin-top:5px; margin-left:15px; cursor: pointer;">
                    <span class="badge badge-light text-hijau"><?= $jumlahkonsul ?></span>

                  </div>

                    <ul class="dropdown-menu">
                      <li class="head text-light hijau">
                        <div class="row">
                          <div class="col-lg-12 col-sm-12 col-12">
                            <span>Notifications <?= $jumlahkonsul ?></span>
                            <a href="" class="float-right text-light">Mark all as read</a>
                          </div>
                      </li>
                      <div class="bungkus-notif">
                      <?php foreach ($tampilKonsul as $row): ?>

                      <?php if ($row['status_konsul']=='finish'): ?>

                      <?php else: ?>
                        <li class="notification-box">
                          <div class="row">
                            <div class="col-lg-3 col-sm-3 col-3 text-center">
                              <img src="img/doctor1.jpg" class="img_notif">
                            </div>
                            <div class="col-lg-8 col-sm-8 col-8">
                              <strong class="text-hijau">Dr. <?= $row['nama_user'] ?></strong>&nbsp;
                              <?php if ($row['status_konsul']=='process'): ?>
                                  <span class="badge badge-primary">Process</span>
                              <?php elseif($row['status_konsul']=='pending'): ?>
                                  <span class="badge badge-warning">Pending</span>
                              <?php endif;  ?>



                              <div class="spoiler_chat">
                                <?= $row['topik_konsul'] ?>
                              </div>
                              <small class="text-warning"><?= $row['konsultasi_date'] ?></small>

                              <?php if ($row['status_konsul']=='process'): ?>
                                  <a href="pages/select_chat_blank.php?id_konsul=<?= $row['id_konsultasi']  ?>" target="_blank" ><button type="button" class="btn tombol hijau putih btn-sm float-right">Lihat Konsul</button></a>
                              <?php elseif($row['status_konsul']=='pending'): ?>
                                  <a href="process/konsul/hapusKonsul_proses.php?id=<?= $row['id_konsultasi']  ?>" ><button type="button" class="btn tombol btn-danger putih btn-sm float-right">Batalkan</button> </a>
                              <?php endif;  ?>




                            </div>
                          </div>
                        </li>
                      <?php endif; ?>


                        <?php endforeach; ?>

                    </div>

                      <!-- <li class="notification-box bg-gray">
                        <div class="row">
                          <div class="col-lg-3 col-sm-3 col-3 text-center">
                            <img src="img/doctor2.jpg" class="img_notif">
                          </div>
                          <div class="col-lg-8 col-sm-8 col-8">
                            <strong class="text-hijau">Dr. Sonia</strong>&nbsp;<span class="badge badge-warning">Pending</span>
                            <div class="spoiler_chat">
                              Lorem ipsum dolor sit amet, consectetur
                            </div>
                            <small class="text-warning">27.11.2015, 15:00</small><button type="button" class="btn tombol btn-danger putih btn-sm float-right">Batalkan</button>
                          </div>
                        </div>
                      </li>
                       <li class="notification-box">
                        <div class="row">
                          <div class="col-lg-3 col-sm-3 col-3 text-center">
                            <img src="img/doctor3.jpg" class="img_notif">
                          </div>
                          <div class="col-lg-8 col-sm-8 col-8">
                            <strong class="text-hijau">Dr. Goldy</strong>&nbsp;<span class="badge badge-primary">Process</span>
                            <div class="spoiler_chat">
                              Lorem ipsum dolor sit amet, consectetur
                            </div>
                            <small class="text-warning">27.11.2015, 15:00</small><button type="button" class="btn tombol hijau putih btn-sm float-right">Lihat Konsul</button>
                          </div>
                        </div>
                      </li> -->


                      <li class="footer-notif hijau text-center">
                        <a href="" class="text-light">View All</a>
                      </li>
                    </ul>

                </li>
              </ul>

          <!-- Akhir notification -->
