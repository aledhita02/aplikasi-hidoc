<?php
$id = $_SESSION['id'];
$tampilKonsul = $konsul->tampilKonsulDokterByIdProcess($id);

function waktuRelatif($waktuKonsul)
{
  // Waktu saat ini
  $waktuSekarang = new DateTime();
  // Waktu konsultasi
  $waktuKonsul = new DateTime($waktuKonsul);
  // Selisih waktu
  $selisih = $waktuKonsul->diff($waktuSekarang);

  $menit = $selisih->days * 24 * 60;
  $menit += $selisih->h * 60;
  $menit += $selisih->i;

  if ($menit < 1) {
    return "Baru saja";
  } else if ($menit < 60) {
    return "$menit menit yang lalu";
  } else if ($menit < 24 * 60) {
    $jam = floor($menit / 60);
    return "$jam jam yang lalu";
  } else {
    $hari = floor($menit / (24 * 60));
    return "$hari hari yang lalu";
  }
}

function formatTanggalDanWaktu($tanggalWaktu)
{
  // Mendapatkan waktu saat ini dari server
  $waktuServer = new DateTime('now');

  // Setel zona waktu ke Jakarta
  $zonaWaktuJakarta = new DateTimeZone('Asia/Jakarta');
  $waktuServer->setTimezone($zonaWaktuJakarta);

  // Mengatur format yang diinginkan: e.g., "Senin, pukul 03:00 PM"
  // Format 'l' untuk nama hari lengkap, 'h:i A' untuk waktu 12-jam dengan AM/PM
  return $waktuServer->format('l, h:i A');
}


?>
<div class="main-content">
  <div class="page-content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center float-right">
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Konsultasi</a></li>
                <li class="breadcrumb-item active">Proses Konsultasi</li>
              </ol>
            </div>

          </div>
        </div>
      </div>
      <input type="hidden" id="session_id_user" value="<?= $_SESSION['id'] ?>">

      <?php if (isset($_GET['id_konsul'])): ?>
        <input type="hidden" id="get_id_konsul" value="<?= $_GET['id_konsul'] ?>">
      <?php endif; ?>

      <div class="row bar-pesan">
        <div class="col-4 cari-chat text-center">

          <!-- <form action="cari_pasien.php" method="get"> -->
          <input class="form-control mr-sm-2 kotak-chat" name="search" type="search" placeholder="Cari Pasien..."
            autofocus aria-label="Search" id="keyword">
          <!-- <button type="submit">Cari</button> -->
          <!-- </form> -->

        </div>

        <div class="col-8 text-center mt-2">
          <h2 class="text-success">Chat</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-4 kotak-list-chat">
          <!-- LIST ORANG -->

          <?php foreach ($tampilKonsul as $row): ?>

            <a href="index.php?p=pesan_proses&&id_konsul=<?= $row['id_konsultasi'] ?>">
              <div class="list-user" id="tomboluser">
                <img src="<?= $row['foto_user'] ?>" class="">
                <h1 class="text-dark">
                  <?= $row['nama_user'] ?>
                </h1>
                <p>
                  <?= $row['topik_konsul'] ?>
                </p>

                <span class="badge badge-success time">
                  <?= waktuRelatif($row['konsultasi_date']); ?>
                </span>


              </div>
            </a>

          <?php endforeach; ?>


          <!-- AKHIR LIST ORANG -->

        </div>

        <div class="col-8 kotak-isi-chat" id="isichat">
          <!-- chat -->
          <div class="chatlog" id="chatlog">

            <?php
            if (isset($_GET['id_konsul'])):
              $id_konsul = $_GET['id_konsul'];
              $lihatkonsul = $konsul->tampilKonsulById($id_konsul);
              $lihatpesan = $pesan->tampilPesanByIdKonsul($id_konsul);

              ?>


              <div class="kotak-chat-kiri">
                <img src="<?= $lihatkonsul['foto_user'] ?>" class="ava float-left">
                <p class="bubble-chat-kiri float-left bg-secondary">
                  <?= $lihatkonsul['topik_konsul'] ?>
                </p>
                <p class="time-chat">
                  <?= formatTanggalDanWaktu($row['konsultasi_date']); ?>
                </p>
              </div>

              <?php
              $extboleh = array("jpg", "png", "gif", "jpeg");
              $extboleh2 = array("mp3", "mp4", "vlv", "avi", "mpg", "3gp", "webm", "mkv", "gifv", "wmv", "3gpp");
              foreach ($lihatpesan as $row):
                $namafile = $row['pesan_attachment'];
                $pecahfile = explode(".", $namafile);
                $ext = end($pecahfile);
                $ext = strtolower($ext);
                ?>


                <?php if ($row['id_user'] == $_SESSION['id']): ?>

                  <?php if ($row['pesan_teks'] == "") { ?>

                  <?php } else { ?>
                    <!-- FORMAT TEKS -->
                    <div class="kotak-chat-kanan">
                      <img src="<?= $row['foto_user'] ?>" class="ava float-right">
                      <p class="bubble-chat-kanan float-right bg-success">
                        <?= $row['pesan_teks'] ?>
                      </p>
                      <p class="time-chat">
                        <?= formatTanggalDanWaktu($row['pesan_date']); ?>
                      </p>
                    </div>
                    <!-- AKHIR FORMAT TEKS -->
                  <?php } ?>


                  <?php if ($row['pesan_attachment'] == "") { ?>

                  <?php } else if (in_array($ext, $extboleh)) { ?>

                      <!-- FORMAT FILE FOTO -->
                      <div class="kotak-chat-kanan">
                        <img src="<?= $row['foto_user'] ?>" class="ava float-right">
                        <img src="<?= $row['pesan_attachment'] ?>" class="file-photo float-right">
                        <p class="time-chat">
                        <?= formatTanggalDanWaktu($row['pesan_date']); ?>
                        </p>
                      </div>
                      <!-- AKHIR FORMAT FILE FOTO -->
                  <?php } else if (in_array($ext, $extboleh2)) { ?>

                        <!-- FORMAT FILE VIDEO -->
                        <div class="kotak-chat-kanan">
                          <img src="<?= $row['foto_user'] ?>" class="ava float-right">
                          <video width="400" height="auto" class="float-right" controls>
                            <source src="../<?= $row['pesan_attachment'] ?>" type="video/mp4">
                            Your browser does not support the video tag.
                          </video>
                          <p class="time-chat">
                        <?= formatTanggalDanWaktu($row['pesan_date']); ?>
                          </p>
                        </div>
                        <!-- AKHIR FORMAT FILE VIDEO -->
                  <?php }
                  ; ?>

                  <!-- FORMAT FILE FOTO -->
                  <!-- <div class="kotak-chat-kanan">
                    <img src="" class="ava float-right">
                    <img src="img/doctor1.jpg" class="file-photo float-right">
                    <p class="time-chat"></p>
                  </div> -->
                  <!-- AKHIR FORMAT FILE FOTO -->

                  <!-- FORMAT FILE VIDEO -->
                  <!-- <div class="kotak-chat-kanan">
                    <img src="" class="ava float-right">
                      <video width="400" height="auto" class="float-right" controls>
                        <source src="videos/Pasar Seni ITB 2014.mp4" type="video/mp4">
                      Your browser does not support the video tag.
                      </video>
                    <p class="time-chat"></p>
                  </div> -->
                  <!-- AKHIR FORMAT FILE VIDEO -->
                <?php elseif ($row['id_user'] != $_SESSION['id']): ?>


                  <?php if ($row['pesan_teks'] == "") { ?>

                  <?php } else { ?>
                    <!-- FORMAT TEKS -->
                    <div class="kotak-chat-kiri">
                      <img src="<?= $row['foto_user'] ?>" class="ava float-left">
                      <p class="bubble-chat-kiri float-left bg-secondary">
                        <?= $row['pesan_teks'] ?>
                      </p>
                      <p class="time-chat">
                        <?= formatTanggalDanWaktu($row['pesan_date']); ?>
                      </p>
                    </div>
                    <!-- AKHIR FORMAT TEKS -->
                  <?php } ?>

                  <?php if ($row['pesan_attachment'] == "") { ?>

                  <?php } else if (in_array($ext, $extboleh)) { ?>

                      <!-- FORMAT FILE FOTO -->
                      <div class="kotak-chat-kiri">
                        <img src="<?= $row['foto_user'] ?>" class="ava float-left">
                        <img src="<?= $row['pesan_attachment'] ?>" class="file-photo float-left">
                        <p class="time-chat">
                        <?= formatTanggalDanWaktu($row['pesan_date']); ?>
                        </p>
                      </div>
                      <!-- AKHIR FORMAT FILE FOTO -->
                  <?php } else if (in_array($ext, $extboleh2)) { ?>


                        <!-- FORMAT FILE VIDEO -->
                        <div class="kotak-chat-kiri">
                          <img src="<?= $row['foto_user'] ?>" class="ava float-left">
                          <video width="400" height="auto" class="float-left" controls>
                            <source src="<?= $row['pesan_attachment'] ?>" type="video/mp4">
                            Your browser does not support the video tag.
                          </video>
                          <p class="time-chat">
                        <?= formatTanggalDanWaktu($row['pesan_date']); ?>
                          </p>
                        </div>
                        <!-- AKHIR FORMAT FILE VIDEO -->

                  <?php }
                  ; ?>


                  <!-- FORMAT FILE FOTO -->
                  <!-- <div class="kotak-chat-kiri">
                        <img src="" class="ava float-left">
                        <img src="img/doctor1.jpg" class="file-photo float-left">
                        <p class="time-chat"></p>
                      </div> -->
                  <!-- AKHIR FORMAT FILE FOTO -->

                  <!-- FORMAT FILE VIDEO -->
                  <!-- <div class="kotak-chat-kiri">
                        <img src="" class="ava float-left">
                          <video width="400" height="auto" class="float-left" controls>
                            <source src="videos/Pasar Seni ITB 2014.mp4" type="video/mp4">
                          Your browser does not support the video tag.
                          </video>
                        <p class="time-chat"></p>
                      </div> -->
                  <!-- AKHIR FORMAT FILE VIDEO -->

                <?php endif; ?>

              <?php endforeach; ?>




            </div>

            <form action="process/pesan/tambahPesanDokter_proses.php" method="post" enctype="multipart/form-data">

              <div class="chat-form">
                <div class="upload-btn-wrapper">
                  <button class="tombolupload"><span class="oi oi-document"></button>
                  <input type="file" name="attach" />
                </div>
                <textarea name="pesan" id="pesan"></textarea>
                <input type="hidden" name="id_konsul" id="id_konsul" value="<?= $id_konsul ?>">
                <input type="hidden" name="id_user" id="id_user" value="<?= $_SESSION['id'] ?>">
                <button type="submit" class="bg-success" id="sendchat">Send</button>
                <!-- <input type="button" id="sendchat" value="Save"> -->
              </div>
            </form>


          <?php endif; ?>

          <!--akhir chat -->
        </div>
      </div>
    </div>
  </div>
</div>


<!-- <script src="js/chatDokter2.js"></script> -->
<!-- <script src="jquery/jquery-1.11.3.min.js"></script> -->
<!-- <script src="jquery/jquery-3.3.1.min.new.js"></script> -->


<script type="text/javascript">

  // function updateChat(){
  //  $.ajax({url:"../js/chatDokterUpdate.php",
  //      success: function(result){
  //        $("#isichat").html(result);
  //  }});
  // }

  $(document).ready(function () {

    $(".kotak-chat-kanan:last").attr("id", "last-chat");
    document.getElementById('last-chat').scrollIntoView();

    // updateChat();
    //
    // setInterval(function(){ updateChat(); }, 1000);


  });

    // function send_chat(){
    //   var id_konsul = $("#id_konsul").val();
    //   var id_user =  $("#id_user").val();
    //   var pesan =  $("#pesan").val();
    //   console.log(id_konsul);
    //   console.log("hehe");
    //
    //  // $.post('process/pesan/tambahPesanDokter_proses.php', {pesan:pesan, id_konsul:id_konsul, id_user:id_user},
    //   // function(result){
    //   //   $("input#pesan").val("");
    //  //  alert(result);
    //  // });
    //
    //   $.ajax({
    //         url:"process/pesan/tambahPesanDokter_proses.php",
    //         type:"POST",
    //         success:function(d){
    //           alert(d);
    //         }
    //       });
    // }

    // $.ajax({
    //   url: "process/pesan/test.php",
    //   type: "POST",
    //   success: function(d){
    //     alert(d);
    //     console.log("debug3");
    //   }
    // });

// $(function(){

  // $("#sendchat").click(function(){
  //   console.log("debug1");
  //   $.ajax({
  //     url: "process/pesan/test.php",
  //     type: "POST",
  //     success: function(d){
  //       alert(d);
  //       console.log("debug3");
  //     }
  //   });
  //   console.log("debug2");
  //   // send_chat();
  //   // alert("cek");
  // });

// });





    // $(document).ready(function(){
    //   $('form').on('submit',function(e){
    //
    //
    //     e.preventDefault();
    //     // alert("Success");
    //     $.ajax({
    //       type:$(this).attr('method'),
    //       url:$(this).attr('action'),
    //       data:$(this).serialize(),
    //       success:function(){
    //         alert("Pesan Terkirim");
    //       }
    //     });
    //   });
    // });

    //coba 1
      // $(document).ready(function(){
      //   $("#sendchat").click(function(){
      //     $.ajax({
      //       url:"process/pesan/tambahPesanDokter_proses.php",
      //       type:"POST",
      //       data:$("#frm").serialize(),
      //       success:function(d){
      //         alert(d);
      //       }
      //     });
      //   });
      // });

      //coba 2
    // $( "#tomboluser" ).click(function() {
    //   id_konsul = $("#id_konsul").val() ;
    //   alert( id_konsul );
    // });


    // coba 3
    // $(document).ready(function(){
    //   $( "#sendchat" ).click(function() {
    //       var id_konsul = $("#id_konsul").val();
    //       var id_user =  $("#id_user").val();
    //       var pesan =  $("#pesan").val();
    //       $.ajax({
    //         url:"process/pesan/tambahPesanDokter_proses.php",
    //         data: {isi:pesan,konsul:id_konsul,user:id_user},
    //         method: "POST",
    //         success: function(){
    //           alert("Pesan Terkirim");
    //         }
    //       });

        // $.ajax({
        //   type:"POST";
        //   url:"process/pesan/tambahPesanDokter_proses.php",
        //   data: "isi="+pesan+"&konsul="+id_konsul+"&user="+id_user,
        //   success: function(msg){
        //     alert("Pesan Terkirim");
        //   }
        // });



    //
    //     $.post( "process/pesan/tambahPesanDokter_proses.php", {isi:pesan,konsul:id_konsul,user:id_user} );
    //     // $.post('process/pesan/tambahPesanDokter_proses.php',{isi:pesan, konsul:id_konsul, user:id_user}, function(){
    //     //   $("#id_konsul").val("");
    //     //   $("#id_user").val("");
    //     //    $("#pesan").val("");
    //     //    alert("Pesan Terkirim");
    //     // });
    //
    //   });
    // });




</script>