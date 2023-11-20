<?php


  $id = $_SESSION['id'];
  $tampilKonsul = $konsul->tampilKonsulDokterByIdPending($id);
  //var_dump($tampilKonsul);

 ?>

<!-- tabel  Dokter-->
 <div class="row titlepanel2">
    <div class="col-12">
      <h1>Antrian Pasien</h1>
    </div>
  </div>



      <table class="table table_spesialis text-center table-striped">
        <thead class="thead hijau putih ">
          <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $i= 1;
            foreach ($tampilKonsul as $row):
          ?>


          <tr>
            <td class="align-middle"><?= $i; ?></td>
            <td class="align-middle"><img class="avatar" src="<?= $row['foto_user'] ?>"></td>
            <td class="align-middle"><?= $row['nama_user'] ?></td>
            <td class="align-middle"><?= $row['topik_konsul'] ?></td>
            <td class="align-middle">
                <a href="process/konsul/gantiStatus_proses.php?id=<?= $row['id_konsultasi'] ?>"><button type="button" class="btn btn-outline-primary">Terima</button></a>
                 |
                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#tolak_user" data-whatever="@getbootstrap">Tolak</button>
            </td>

            <?php endforeach; ?>

          </tr>



          <!-- Modal Delete Dokter -->
          <div class="modal fade" id="tolak_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tolak Pasien</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 <p>Apakah Anda Yakin Menolak Pesan Dari <?= $row['nama_user'] ?></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a href="process/konsul/hapusKonsul_proses.php?id=<?= $row['id_konsultasi'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Akhir Modal Delete Dokter -->

        </tbody>
      </table>
<!-- akhirtable Dokter-->
