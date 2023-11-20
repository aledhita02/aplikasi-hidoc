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
<!-- tabel spesialist -->
 <div class="row titlepanel">
    <div class="col-12">
      <h1>Tabel Spesialis</h1>
    </div>
  </div>
<button type="button" class="btn btn-outline-primary mb-2 mt-2" data-toggle="modal" data-target="#tambah_spesialis" data-whatever="@getbootstrap">Tambah Spesialis</button>


      <table class="table table_spesialis">
        <thead class="thead hijau putih">
          <tr>
            <th>No</th>
            <th>Kode Spesialis</th>
            <th>Jenis Spesialis</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
            foreach ($spesialis as $row):

              $buttonSpesial = $spesial->hitungSpesialisasiButtonSpesial($row['kode_spesialisasi']);
              // var_dump($buttonSpesial);

           ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $row['kode_spesialisasi'] ?></td>
            <td><?= $row['nama_spesialisasi'] ?></td>
            <td>
              <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#edit_spesialis_<?= $row['id_spesialisasi']?>" data-whatever="@getbootstrap">Edit</button> |
               <button
                  <?php if ($buttonSpesial>0): ?>
                    disabled
                  <?php endif; ?>
               type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete_spesialis_<?= $row['id_spesialisasi']?>" data-whatever="@getbootstrap">
                 Delete
               </button>
             </td>

          </tr>

          <!-- Modal Delete Spesialist -->
          <div class="modal fade" id="delete_spesialis_<?= $row['id_spesialisasi']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Delete Spesialis</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 <p>anda yakin ingin menghapus</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a href="process/spesialisasi/delete_process.php?id=<?= $row['id_spesialisasi'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Akhir Modal Delete Spesialist -->
          <!-- Modal Edit Spesialist -->
          <div class="modal fade" id="edit_spesialis_<?= $row['id_spesialisasi']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Spesialis</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="process/spesialisasi/edit_process.php" method="post">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Kode Spesialis:</label>
                      <input type="text" class="form-control" id="recipient-name" name="kode_spesialisasi" value="<?= $row['kode_spesialisasi'] ?>">
                    </div>

                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Jenis Spesialis:</label>
                      <input type="text" class="form-control" id="recipient-name" name="nama_spesialisasi" value="<?= $row['nama_spesialisasi'] ?>">
                    </div>

                    <input type="hidden" name="id" value="<?= $row['id_spesialisasi'] ?>">

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>



                  </form>
                </div>

              </div>
            </div>
          </div>
          <!-- Akhir Modal Edit Spesialist -->


          <?php
            $i++;
            endforeach;
           ?>


        </tbody>
      </table>

<!-- akhir table spesilist -->

<!-- Modal tambah Spesialist -->
<div class="modal fade" id="tambah_spesialis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Spesialis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="process/spesialisasi/insert_process.php">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Kode Spesialis:</label>
            <input type="text" class="form-control" id="recipient-name" name="kode_spesialisasi">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Spesialis:</label>
            <input type="text" class="form-control" id="recipient-name" name="nama_spesialisasi">
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>


        </form>
      </div>

    </div>
  </div>
</div>
<!-- Akhir Modal tambah Spesialist -->
