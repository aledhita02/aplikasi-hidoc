<?php if (!isset($_SESSION['role'])): ?>
  <script>
    window.location = 'index.php';

  </script>
<?php endif; ?>
<?php
include 'database/Artikel.php';

$id = $_GET['id'];
$user = new Artikel;
$data_edit = $user->tampilArtikelById($id);
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
      <button type="button" class="btn btn-outline-primary mb-2 mt-2" data-toggle="modal" data-target="#tambah_artikel"
        data-whatever="@getbootstrap">Tambah Artikel</button>
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
            <!-- <a href="index.php?p=edit_artikel&id=<? //= $row['id']; ?>"><button
                class="btn btn-outline-primary">Ubah</button></a> -->
            <button type="button" class="btn btn-outline-success" data-toggle="modal"
              data-target="#edit_artikel_<?= $row['id'] ?>" data-whatever="@getbootstrap">
              Edit Artikel
            </button>
            <a href="index.php?p=../process/artikel/deleteArtikel_proses&id=<?= $row['id'] ?>"><button
                class="btn btn-outline-danger">Hapus</button></a>
          </div>

          <!-- Modals Edit Artikel -->
          <div class="modal fade" id="edit_artikel_<?= $row['id'] ?>" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Artikel</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="process/artikel/editArtikel_proses.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="judulartikel">Judul Artikel :</label>
                      <input type="text" name="judul" value="<?= $row['judul'] ?>" placeholder="Judul Artikel"
                        class="form-control" id="judulartikel">
                    </div>
                    <div class="form-group">
                      <label for="isiartikel">Isi Artikel :</label>
                      <input type="text" class="form-control" name="artikel" value="<?= $row['artikel'] ?>"
                        id="isiartikel" rows="3">
                    </div>
                    <img src="<?= $row['foto']; ?>"><br /><br />
                    <div class="form-group">
                      <label for="pict">Ubah Gambar :</label>
                      <input type="file" name="foto" class="form-control h-100" id="pict">
                    </div>
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="hidden" name="fotolama" value="<?= $row['foto'] ?>">
                    <button class="btn btn-outline-primary mb-2 mt-3" data-toggle="modal" data-target="#edit_artikel"
                      data-whatever="@getbootstrap">Edit Artikel</button>
                  </form>
                  <!-- akhir Modals Edit Artikel -->


                  <!-- Berita -->

                  <!-- Akhir berita -->

                  <!-- awal pagination -->
                  <div class="row justify-content-md-center mt-5">
                    <div class="col-md-auto">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
          $i++;
        endforeach;
        ?>
      </div>

      <!-- akhir pagination -->
      <!-- Modals Tambah Artikel -->
      <div class="modal fade" id="tambah_artikel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Artikel</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
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
                <button class="btn btn-outline-primary mb-2 mt-3" data-toggle="modal" data-target="#tambah_dokter"
                  data-whatever="@getbootstrap">Tambah Artikel</button>
              </form>
              <!-- akhir Tambah Artikel -->

              <!-- Berita -->

              <!-- Akhir berita

            <!-- awal pagination -->
              <div class="row justify-content-md-center mt-5">
                <div class="col-md-auto">

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- akhir pagination -->
      <script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script>
      <script>
        autosize(document.getElementById("isiartikel"));
      </script> -->
    </div>


  </div>
</div>