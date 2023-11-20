<?php


  $spesial = new Spesialisasi;
  $tampilSpesial = $spesial->tampilSpesialisasi();
  // $jumlahSpesial = $spesial->tampilJumlahSpesial();

  $dokter = new Dokter;
  $tampilDokter = $dokter->tampilDokter();
  $jumlahSemuaDokter = $dokter->tampilJumlahDokter();
  // var_dump($jumlahDokter);

  if (isset($_GET['kode'])) {
    $kode = $_GET['kode'];
    $tampilSpesialByKode = $spesial->tampilSpesialisasiByKode($kode);
    $tampilDokter = $dokter->tampilDokterBySpesialisasi($kode);
  }


 ?>


 <?php if ($_SESSION['role']=='user'): ?>
   <!-- Category -->

     <div class="row">
       <div class="col-12">
       <nav class="navbar navbar-light bg-light justify-content-between">
           <h3>Hallo <?= $_SESSION['nama'] ?>!</h3>
           <form class="form-inline">

             <input class="form-control mr-sm-2" type="search"  placeholder="Cari Nama Dokter..." autofocus aria-label="Search" id="keyword">
             <button class="btn hijau putih my-2 my-sm-0" type="submit" id="tombolCari">Search</button>
           </form>
       </nav>
     </div>
     </div><br />

       <div class="row">
       <div class=" col-12 kategori">
         <a href="index.php?p=select_chat">
           <button type="button" class="btn btn-sm">
             All <span class="badge badge-secondary  hijau"><?= $jumlahSemuaDokter ?></span>
           </button>
         </a>


         <?php
            foreach ($tampilSpesial as $row) :

          ?>
         <a href="index.php?p=select_chat&&kode=<?= $row['kode_spesialisasi']  ?>">
           <button type="button" class="btn btn-sm">
             <?= $row['nama_spesialisasi'] ?> <span class="badge badge-secondary  hijau">
               <?php
                 $jumlahDokter = $dokter->tampilJumlahDokterByKode($row['kode_spesialisasi']);
                 echo $jumlahDokter;
              ?></span>
           </button>
         </a>
         <?php
            endforeach;
          ?>



       </div>
     </div>



   <!-- Akhir Category -->
   <!-- Awal List Dokter -->







       <div class="row justify-content-center ashiapp" id="konten">

           <?php

              foreach ($tampilDokter as $row) :
            ?>
           <div>
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
           </div>

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
                          <img src="<?= $row['foto_user'] ?>" alt="Security" class="gambar-bulat">
                          <h2>Dr. <?= $row['nama_user']  ?></h2>
                          <p class="text-hijau"><?= $row['nama_spesialisasi']  ?></p>
                        </div>

                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Form Pertanyaan :</label>
                          <textarea class="form-control"  rows="3" name="topik" maxlength="120" minlength="3" id="text"></textarea>
                          <span class="badge badge-secondary" id="count_message"></span>

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


          </div>



   <!--     Akhir List Dokter -->




<?php

  $konsul = new Konsultasi;
   $pesan = new Pesan;

  if (isset($_GET['id_konsul'])) :
   $id_konsul = $_GET['id_konsul'];
   $lihatkonsul = $konsul->tampilKonsulById($id_konsul);


   $lihatpesan = $pesan->tampilPesanByIdKonsul($id_konsul);



 ?>






 <?php endif; ?>

   <script src="js/cariDokter.js"></script>
 <?php else: ?>
   <script type="text/javascript">
     alert('Anda Harus Login sebagai user');
     window.location = 'process/logout.php';
   </script>



 <?php endif; ?>


   <script src="http://code.jquery.com/jquery-1.5.js"></script>
    <script>
    var text_max = 120;
      $('#count_message').html('0 / ' + text_max );

      $('#text').keyup(function() {
        var text_length = $('#text').val().length;
        var text_remaining = text_max - text_length;

        $('#count_message').html(text_length + ' / ' + text_max);
      });
    </script>
