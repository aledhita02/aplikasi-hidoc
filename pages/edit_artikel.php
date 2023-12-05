<?php
  include 'database/Artikel.php';

  $id = $_GET['id'];
  $user = new Artikel;
  $data = $user->tampilArtikelById($id);

 ?>

<br />
<!-- tempat ketik berita -->
<form action="process/artikel/editArtikel_proses.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="judulartikel">Judul Artikel :</label>
    <input type="text" name="judul" value="<?= $data['judul']  ?>" placeholder="Judul Artikel" class="form-control" id="judulartikel">
  </div>
  <div class="form-group">
    <label for="isiartikel">Isi Artikel :</label>
    <input type="text" class="form-control" name="artikel" value="<?= $data['artikel']  ?>" id="isiartikel" rows="3">
  </div>
  <img src="<?= $data['foto']; ?>"><br /><br />
  <div class="form-group">
    <label for="pict">Ubah Gambar :</label>
    <input type="file" name="foto" class="form-control h-100" id="pict">
  </div>
        <input type="hidden" name="id" value="<?= $id  ?>">
      <input type="hidden" name="fotolama" value="<?= $data['foto']  ?>">
  <button class="btn btn-outline-primary mb-2 mt-3" data-toggle="modal" data-target="#tambah_dokter" data-whatever="@getbootstrap">Ubah Artikel</button>
</form>
<!-- akhir tempat berita -->


  <!-- Berita -->

  <!-- Akhir berita -->

  <!-- awal pagination -->
  <div class="row justify-content-md-center mt-5">
    <div class="col-md-auto">
      
    </div>
  </div>
  <!-- akhir pagination -->
  <script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
  <script>
    autosize(document.getElementById("isiartikel"));
  </script>