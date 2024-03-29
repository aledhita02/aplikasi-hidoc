<?php

$usr = new User;
$user = $usr->hitungUser();
$datauser = $usr->tampilUser();

$dktr = new Dokter;
$dokter = $dktr->hitungDokter();
$lihatDokter = $dktr->tampilDokterBySpesial();

$spesial = new Spesialisasi;
$spesialis = $spesial->tampilSpesialisasi();


?>
<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center float-right">

            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Kelola Data</a></li>
                <li class="breadcrumb-item active">Data User</li>
              </ol>
            </div>

          </div>
        </div>
      </div>
      <!-- end page title -->

      <!-- tabel  Pasien-->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h1>Data User</h1>
            </div>

            <div class="card-body">
              <table id="datatable" class="table table-bordered table-hover dt-responsive nowrap w-100">
                <thead class="thead hijau putih">
                  <tr>
                    <th>No</th>
                    <th>Nama User</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                  </tr>
                </thead>


                <tbody>
                  <?php
                  $i = 1;
                  foreach ($datauser as $row):

                    ?>
                    <tr>
                      <td>
                        <?= $i ?>
                      </td>
                      <td>
                        <?= $row['nama_user'] ?>
                      </td>
                      <td>
                        <?php

                        // Mendapatkan tanggal lahir dari variabel $row['tgl_lahir']
                        $tanggal_lahir = $row['tgl_lahir'];

                        // Mendapatkan tahun lahir dari tanggal lahir
                        $tahun_lahir = date('Y', strtotime($tanggal_lahir));

                        // Mendapatkan tahun saat ini
                        $tahun_sekarang = date('Y');

                        // Menghitung umur
                        $umur = $tahun_sekarang - $tahun_lahir;
                        ?>
                        <?= $umur ?>
                      </td>
                      <td>
                        <?php
                        if ($row['jk'] == "") {
                          echo "Belum Diisi";
                        } else {
                          echo $row['jk'];
                        }
                        ?>
                      </td>
                      <td><button type="button" class="btn btn-outline-danger" data-toggle="modal"
                          data-target="#delete_user_<?= $row['id_user'] ?>" data-whatever="@getbootstrap">Delete</button>
                        |
                        <button type="button" class="btn btn-outline-dark" data-toggle="modal"
                          data-target="#detail_user_<?= $row['id_user'] ?>" data-whatever="@getbootstrap">Detail</button>
                      </td>
                    </tr>

                    <!-- Modal Delete Pasien -->
                    <div class="modal fade" id="delete_user_<?= $row['id_user'] ?>" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>anda yakin ingin menghapus
                              <?= $row['nama_user'] ?>?
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a
                              href="process/user/deleteUser_proses.php?id=<?= $row['id_user'] ?>&&foto=<?= $row['foto_user'] ?>">
                              <button type="button" class="btn btn-danger">Delete</button> </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Akhir Modal Delete Pasien
           -->
                    <!-- Modal Detail User -->
                    <div class="modal fade" id="detail_user_<?= $row['id_user'] ?>" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body detail-dokter">
                            <img src="<?= $row['foto_user'] ?>" class="gambar-bulat float-left">
                            <h3>
                              <?= $row['nama_user'] ?>
                            </h3>
                            <span class="badge badge-success mt-1 mb-3">
                              <?= $row['role'] ?>
                            </span>
                            <br>
                            <img class="icon_kue float-left" src="img/male-and-female-symbols.svg">
                            <p>

                              <?php
                              if ($row['jk'] == "") {
                                echo "Belum Diisi";
                              } else {
                                echo $row['jk'];
                              }
                              ?>
                            </p>
                            <img class="icon_kue float-left" src="img/birthday-cake.svg">
                            <p>
                              <?php
                              if ($row['tgl_lahir'] == "") {
                                echo "Belum Diisi";
                              } else {
                              
                              $tgl_formatted = date("d F Y", strtotime($row['tgl_lahir']));
                              echo $tgl_formatted;
                               
                              }
                              ?>

                            </p>
                            <img class="icon_kue float-left" src="img/cd-icon-phone.svg">
                            <p>
                              <?= $row['telp_user'] ?>
                            </p>
                            <img class="icon_kue float-left" src="img/cd-icon-email.svg">
                            <p>
                              <?= $row['email_user'] ?>
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Akhir Modal Detail user -->
                    <?php
                    $i++;
                  endforeach;
                  ?>


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- akhirtable Pasien-->