<?php
include 'database/Artikel.php';

?>
<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">
      <!-- tabel  Dokter-->
      <div class="row titlepanel">
        <div class="col-12">
          <h1>Artikel</h1>
        </div>
      </div>
      <a class="btn btn-outline-primary mb-2 mt-2" href="index.php?p=tambah_artikel">Tambah Artikel</a>
      <!-- <button type="button" class="btn btn-outline-primary mb-2 mt-2" data-toggle="modal" data-target="#tambah_artikel"
        data-whatever="@getbootstrap">Tambah Artikel</button> -->
      <div class="row berita">
        <?php
        $artikel = new Artikel;

        $data = $artikel->tampilArtikel3();
        $i = 1;
        foreach ($data as $row):
          ?>



          <div class="card col-lg-6 maelee mt-4">
            <img src="<?= $row['foto'] ?>" alt="workingspace" class="float-left">
            <h3>
              <?= $row['judul'] ?>
            </h3>
            <p>
              <?= $row['artikel'] ?></small>
            </p>
            <a href="index.php?p=edit_artikel&id=<?= $row['id']; ?>"><button
                class="btn btn-outline-primary">Ubah</button></a>
            <a href="index.php?p=../process/artikel/deleteArtikel_proses&id=<?= $row['id'] ?>"><button
                class="btn btn-outline-danger">Hapus</button></a>

          </div>
          <?php
          $i++;
        endforeach;
        ?>
      </div>
    </div>
  </div>
</div>
