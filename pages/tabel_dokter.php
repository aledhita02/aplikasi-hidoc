<?php

  $usr = new User;
  $user = $usr->hitungUser();
  $datauser = $usr->tampilUser();

  $dktr = new Dokter;
  $dokter = $dktr->hitungDokter();
  $lihatDokter = $dktr->tampilDokterBySpesial();

  $spesial = new Spesialisasi;
  $spesialis = $spesial->tampilSpesialisasi();

  $konsul = new Konsultasi;
  // $buttonDoker = $konsul->hitungKonsultasiButtonDokter($_SESSION['id']);
  // var_dump($buttonDoker);


 ?>
<!-- tabel  Dokter-->
 <div class="row titlepanel">
    <div class="col-12">
      <h1>Tabel Dokter</h1>
    </div>
  </div>
<button type="button" class="btn btn-outline-primary mb-2 mt-2" data-toggle="modal" data-target="#tambah_dokter" data-whatever="@getbootstrap">Tambah Dokter</button>


      <table class="table table_spesialis">
        <thead class="thead hijau putih">
          <tr>
            <th>No</th>
            <th>Nama Dokter</th>
            <th>Spesialis</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;
            foreach ($lihatDokter as $row):

              $buttonDoker = $konsul->hitungKonsultasiButtonDokter($row['id_user']);
              // var_dump($buttonDoker);

           ?>
          <tr>
            <td><?= $i ?></td>
            <td><?= $row['nama_user'] ?></td>
            <td><?= $row['nama_spesialisasi'] ?></td>
            <td>
               <button
              <?php if ($buttonDoker>0): ?>
                disabled
              <?php endif; ?>

               type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete_dokter_<?= $row['id_user'] ?>" data-whatever="@getbootstrap">
                 Delete
               </button> |
                <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#detail_dokter_<?= $row['id_user'] ?>" data-whatever="@getbootstrap">Detail</button></td>
          </tr>

          <!-- Modal Delete Dokter -->
          <div class="modal fade" id="delete_dokter_<?= $row['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Delete Dokter</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 <p>anda yakin ingin menghapus <?= $row['nama_user'] ?>?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a href="process/dokter/deleteDokter_proses.php?id=<?= $row['id_user'] ?>&&foto=<?= $row['foto_user'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                </div>
              </div>
            </div>
          </div>
          <!-- Akhir Modal Delete Dokter -->

          <!-- Modal Detail Dokter -->
          <div class="modal fade" id="detail_dokter_<?= $row['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Detail Dokter</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body detail-dokter">
                    <img src="<?= $row['foto_user'] ?>" class="gambar-bulat float-left"><h3><?= $row['nama_user'] ?></h3>
                    <span class="badge badge-secondary label_profile"><?= $row['nama_spesialisasi'] ?></span>
                    <br>
                    <img class="icon_kue float-left" src="img/male-and-female-symbols.svg"><p><?= $row['jk'] ?></p>
                    <img class="icon_kue float-left" src="img/birthday-cake.svg"><p><?= $row['tgl_lahir'] ?></p>
                    <img class="icon_kue float-left" src="img/cd-icon-phone.svg"><p><?= $row['telp_user'] ?></p>
                    <img class="icon_kue float-left" src="img/cd-icon-email.svg"><p><?= $row['email_user'] ?></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Akhir Modal Detail Dokter -->

          <?php
            $i++;
            endforeach;
           ?>

        </tbody>
      </table>
<!-- akhirtable Dokter-->
<!-- Modal tambah Dokter -->
<div class="modal fade" id="tambah_dokter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Dokter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process/dokter/tambahDokter_proses.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Dokter:</label>
            <input type="text" class="form-control" id="recipient-name" name="nama">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="email" class="form-control" id="recipient-name" name="email">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Telepon:</label>
            <input type="text" class="form-control" id="recipient-name" name="telepon">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="password" class="form-control" id="recipient-name" name="password">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tanggal Lahir:</label>
            <input type="date" class="form-control" id="recipient-name" name="date">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Jenis Kelamin:</label><br />
             <div class="form-check-inline">
            <input class="form-check-input" type="radio"  id="exampleRadios1" value="Laki-Laki" name="jk" checked>
            <label class="form-check-label" for="exampleRadios1">
                Laki - Laki
            </label>

          </div>
              <div class="form-check-inline">
              <input class="form-check-input" type="radio" id="exampleRadios2" value="Perempuan" name="jk">
              <label class="form-check-label" for="exampleRadios2">
                Perempuan
              </label>
            </div>
          </div>

           <div class="form-group">
            <label for="exampleFormControlSelect1">Spesialis:</label>
         <select class="form-control" id="exampleFormControlSelect1" name="spesialis" required>
           <option value="">Pilih Spesialis</option>
           <?php
             $data = $spesial->tampilSpesialisasi();
             foreach ($data as $row) :

            ?>
            <option value="<?= $row['kode_spesialisasi'] ?>"><?= $row['nama_spesialisasi'] ?></option>
            <?php
              endforeach;
             ?>
         </select>
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Foto:</label>
            <input type="file" class="form-control h-100" id="recipient-name" name="foto">
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
<!-- Akhir Modal tambah Dokter -->
