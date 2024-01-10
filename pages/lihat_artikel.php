<?php if (!isset($_SESSION['role'])): ?>
  <script>
    window.location = 'index.php';

  </script>
<?php endif; ?>
<?php
include 'database/Artikel.php';

// $id = $_GET['id'];
// $user = new Artikel;
// $data_edit = $user->tampilArtikelById($id);
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
                <li class="breadcrumb-item"><a href="javascript: void(0);">Artikel</a></li>
                <li class="breadcrumb-item active">Tabel Artikel</li>
              </ol>
            </div>

          </div>
        </div>
      </div>
      <!-- end page title -->

      <!-- tabel Dokter-->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h1>Artikel</h1>

              <button type="button" class="btn btn-outline-success mb-2 mt-2" data-toggle="modal"
                data-target="#tambah_artikel" data-whatever="@getbootstrap">Tambah Artikel</button>
            </div>

            <div class="card-body">
              <div class="row berita">
                <?php
                $artikel = new Artikel;

                $data = $artikel->tampilArtikel3();

                $i = 1;
                foreach ($data as $row):
                  ?>
                  <div class="col-sm-6 col-xl-4">

                    <!-- Simple card -->
                    <div class="card">
                      <img class="card-img-top img-fluid" style=" width: 100%; height: 250px; object-fit: contain"
                        src="<?= $row['foto'] ?>" alt="workingspace">
                      <div class="card-body">
                        <h4 class="card-title">
                          <?= $row['judul'] ?>
                        </h4>
                        <p class="card-text">
                          <?= $row['artikel'] ?></small>
                        </p>
                        <button type="button" class="btn btn-outline-success" data-toggle="modal"
                          data-target="#edit_artikel_<?= $row['id'] ?>" data-whatever="@getbootstrap">
                          Edit Artikel
                        </button>
                        <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                          data-target="#delete_artikel_<?= $row['id'] ?>" data-whatever="@getbootstrap">
                          Delete Artikel
                        </button>



                        <!-- Modal Delete artikel -->
                        <div class="modal fade" id="delete_artikel_<?= $row['id'] ?>" tabindex="-1" role="dialog"
                          aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete Artikel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <p>anda yakin ingin menghapus</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="process/artikel/deleteArtikel_proses.php?id=<?= $row['id'] ?>"><button
                                    type="button" class="btn btn-danger">Delete</button></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Akhir Modal Delete artikel -->

                        <!-- Modals Edit Artikel -->
                        <div class="modal fade" id="edit_artikel_<?= $row['id'] ?>" tabindex="-1" role="dialog"
                          aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Artikel</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="process/artikel/editArtikel_proses.php" method="post"
                                  enctype="multipart/form-data">
                                  <div class="form-group">
                                    <label for="judulartikel">Judul Artikel :</label>
                                    <input type="text" name="judul" value="<?= $row['judul'] ?>"
                                      placeholder="Judul Artikel" class="form-control" id="judulartikel">
                                  </div>

                                  <div class="form-group">
                                    <label for="isiartikel">Isi Artikel :</label>
                                    <textarea class="form-control" name="artikel" id="isiartikel"
                                      rows="5"><?= $row['artikel'] ?></textarea>
                                  </div>
                                  <img src="<?= $row['foto']; ?>"><br /><br />
                                  <div class="form-group">
                                    <label for="pict">Ubah Gambar :</label>
                                    <input type="file" name="foto" class="form-control h-100" id="pict">
                                  </div>
                                  <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                  <input type="hidden" name="fotolama" value="<?= $row['foto'] ?>">
                                  <button class="btn btn-outline-primary mb-2 mt-3" data-toggle="modal"
                                    data-target="#edit_artikel" data-whatever="@getbootstrap">Edit Artikel</button>
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
                      </div>
                    </div>

                  </div><!-- end col -->

                  <?php
                  $i++;
                endforeach;
                ?>
              </div>
            </div>
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
                      <input type="text" name="judul" placeholder="Judul Artikel" class="form-control"
                        id="judulartikel">
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
          </script>
        </div>


      </div>
    </div>