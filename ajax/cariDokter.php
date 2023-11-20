<?php
  include '../database/Dokter.php';

  $keyword = $_GET['keyword'];

  $dokter = new Dokter;
  $tampilDokter = $dokter->cariDokter($keyword);

 ?>


 <?php

    foreach ($tampilDokter as $row) :
  ?>
 <a href="#konten">
   <div class="col-lg ourdoctor2 maelee mb-3 text-center">
     <div class="ourdoctortempat">
       <div class="kotaku">
         <img src="<?= $row['foto_user']  ?>" alt="Security" class="">
           <div class="overlay">
             <div class="text"><img class="" src="img/doctor.svg" style="font-size: 10px;"></img></div>
           </div>
       </div>
     </div>

     <h4>Dr. <?= $row['nama_user']  ?></h4>
     <p><?= $row['nama_spesialisasi']  ?></p>
     <button class="btn btn-secondary hijau tombol" data-toggle="modal" data-target="#form_konsul_<?= $row['id_user'] ?>" data-whatever="@getbootstrap">Konsul</button>
   </div>
 </a>

 <!-- Modal konsul -->
     <div class="modal fade" id="form_konsul_<?= $row['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" >Konsul</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="process/konsul/tambahKonsul_proses.php">
              <div class="form-group text-center">
                <img src="img/doctor1.jpg" alt="Security" class="gambar-bulat">
                <h2>Dr. <?= $row['nama_user']  ?></h2>
                <p class="text-hijau"><?= $row['nama_spesialisasi']  ?></p>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Form Pertanyaan :</label>
                <textarea class="form-control"  rows="3" name="topik"></textarea>
              </div>

              <input type="hidden" name="id_pasien" value="<?= $_SESSION['id']  ?>">
              <input type="hidden" name="id_dokter" value="<?= $row['id_user'] ?>">

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>


            </form>
          </div>

        </div>
      </div>
     </div>
   <!-- Akhir Modal konsul -->


 <?php
    endforeach;

  ?>
