<?php
  include 'database/Artikel.php';

 ?>
  <!-- Berita -->
  <div class="row titleberita">
    <div class="col-12">
      <h1>berita terbaru</h1>
    </div>
  </div>

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
       <a href="index.php?p=detail_berita&id=<?=$row['id']?>"><img src="img/next.png" alt="workingspace" class="float-right" style="width:30px; height: 30px;"></a>
    
    </div>
    <?php
                    $i++;
        endforeach;
        ?>
  </div>


  <!-- Akhir berita -->

  <!-- awal pagination -->
  <div class="row justify-content-md-center mt-5">
  	<div class="col-md-auto">
  		
  	</div>
  </div>
  <!-- akhir pagination -->