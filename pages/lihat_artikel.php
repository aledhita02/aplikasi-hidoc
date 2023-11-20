<?php
  include 'database/Artikel.php';

 ?>


  <div class="row berita">
<?php
          $artikel = new Artikel;

          $data = $artikel->tampilArtikel3();
          $i = 1;
          foreach ($data as $row) :
        ?>



    <div class="col-lg-6 maelee">
      <img src="<?= $row['foto'] ?>" alt="workingspace" class="float-left">
      <h3><?= $row['judul'] ?></h3>
      <p><?= $row['artikel'] ?></small></p>
       <a href="index.php?p=edit_artikel&id=<?= $row['id'];?>"><button class="btn btn-outline-primary">Ubah</button></a>
       <a href="index.php?p=../process/artikel/deleteArtikel_proses&id=<?=$row['id']?>"><button class="btn btn-outline-danger">Hapus</button></a>

    </div>
     <?php
                    $i++;
        endforeach;
        ?>
  </div>
