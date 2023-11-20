
<?php if (!isset($_SESSION['role'])): ?>
  <script>
  window.location = 'index.php';

  </script>
<?php endif; ?>
<br />
<!-- tempat ketik berita -->
<form action="process/artikel/tambahArtikel_proses.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="judulartikel">Judul Artikel :</label>
    <input type="text" name="judul" placeholder="Judul Artikel" class="form-control" id="judulartikel">
  </div>
  <div class="form-group">
    <label for="isiartikel">Isi Artikel :</label>
    <textarea class="form-control" name="artikel" id="isiartikel" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="pict">Masukan Gambar :</label>
    <input type="file" name="foto" class="form-control h-100" id="pict">
  </div>
  <button class="btn btn-outline-primary mb-2 mt-3" data-toggle="modal" data-target="#tambah_dokter" data-whatever="@getbootstrap">Tambah Artikel</button>
</form>
<!-- akhir tempat berita -->

<?php
  include 'database/Artikel.php';

 ?>

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
