<?php
  session_start();
  include '../database/Konsultasi.php';
    include '../database/Pesan.php';
    $konsul = new Konsultasi;
    $pesan = new Pesan;

    if (isset($_GET['id_konsul'])) {
      $id_konsul = $_GET['id_konsul'];
    }
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Konsul Doc</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Myfonts -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
    <link href="../open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">

    <!-- Mycss -->

    <link href="../dashboard.css" rel="stylesheet">
    <link href="../pesan.css" rel="stylesheet">
</head>
<body style="background: #f3f3f3;">

    <nav class="navbar navbar-dark fixed-top hijau flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Hallo <?= $_SESSION['nama'] ?>!</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <!-- <li class="nav-item text-nowrap">
          <a class="btn btn-light" href="process/logout.php">Logout</a>
        </li> -->
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <li class="nav-item">
                  <a class="nav-link" href="select_chat_blank.php">
                  <p><img class="" src="../img/cd-icon-username.svg"> Pesan Proses</p>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="select_chat_blank_history.php">
                  <p><img class="" src="../img/cd-icon-username.svg"> Pesan History</p>
                </a>
              </li>






            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="container">

    <div class="row bar-pesan">
      <div class="col-4 cari-chat text-center">
         <input class="form-control mr-sm-2 kotak-chat" type="search"  placeholder="Cari Dokter..." autofocus aria-label="Search" id="keyword">

      </div>

      <div class="col-8 text-center mt-2">
        <h2 class="text-hijau">Chat</h2>
      </div>
    </div>

   <!-- chat -->
  <div class="row">
      <div class="col-4 kotak-list-chat">
        <!-- LIST ORANG -->


        <?php
          $konsultasi = $konsul->tampilKonsulUserByIdFinish($_SESSION['id']);


         ?>

         <?php foreach ($konsultasi as $row): ?>
           <a href="select_chat_blank_history.php?id_konsul=<?= $row['id_konsultasi'] ?>"  >
             <div class="list-user" id="tomboluser" >
               <img src="../<?= $row['foto_user'] ?>" class="">
               <h1><?= $row['nama_user']  ?></h1>
               <p><?= $row['topik_konsul'] ?></p>
               <span class="badge badge-secondary time">3 minutes ago</span>

             </div>
           </a>
           <!-- <a href="ototg"><span class="oi oi-delete float-right "></span></a>
           <button class="selesai-konsul">Selesai Konsul</button> -->


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


              <div class="kotak-chat-kanan">
                <img src="../<?= $lihatkonsul['foto_user'] ?>" class="ava float-right">
                <p class="bubble-chat-kanan float-right"><?= $lihatkonsul['topik_konsul'] ?></p>
                <p class="time-chat"><?= $lihatkonsul['konsultasi_date'] ?></p>
              </div>

              <?php
                $extboleh = array("jpg","png","gif","jpeg");
                $extboleh2 = array("mp3","mp4","vlv","avi","mpg","3gp","webm","mkv","gifv","wmv","3gpp");
                foreach ($lihatpesan as $row):
                  $namafile = $row['pesan_attachment'];
                  $pecahfile = explode(".",$namafile);
                  $ext = end($pecahfile);
                  $ext = strtolower($ext);
                ?>


                <?php if ($row['id_user']==$_SESSION['id']): ?>

                      <?php if ($row['pesan_teks']==""){ ?>

                      <?php }else{ ?>
                        <!-- FORMAT TEKS -->
                        <div class="kotak-chat-kanan chatbawah">
                          <img src="../<?= $row['foto_user'] ?>" class="ava float-right">
                          <p class="bubble-chat-kanan float-right"><?= $row['pesan_teks'] ?></p>
                          <p class="time-chat"><?= $row['pesan_date'] ?></p>
                        </div>
                        <!-- AKHIR FORMAT TEKS -->
                      <?php } ?>


                      <?php if ($row['pesan_attachment']==""){ ?>

                      <?php }else if (in_array($ext, $extboleh)){ ?>

                        <!-- FORMAT FILE FOTO -->
                        <div class="kotak-chat-kanan chatbawah">
                          <img src="../<?= $row['foto_user'] ?>" class="ava float-right">
                          <img src="../<?= $row['pesan_attachment'] ?>" class="file-photo float-right">
                          <p class="time-chat"><?= $row['pesan_date'] ?></p>
                        </div>
                        <!-- AKHIR FORMAT FILE FOTO -->
                      <?php }else if(in_array($ext, $extboleh2)){ ?>

                        <!-- FORMAT FILE VIDEO -->
                        <div class="kotak-chat-kanan chatbawah">
                          <img src="../<?= $row['foto_user'] ?>" class="ava float-right">
                            <video width="400" height="auto" class="float-right" controls>
                              <source src="../<?= $row['pesan_attachment'] ?>" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>
                          <p class="time-chat"><?= $row['pesan_date'] ?></p>
                        </div>
                        <!-- AKHIR FORMAT FILE VIDEO -->
                      <?php }; ?>

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
                <?php elseif ($row['id_user'] != $_SESSION['id']) : ?>


                          <?php if ($row['pesan_teks']==""){ ?>

                          <?php }else{ ?>
                            <!-- FORMAT TEKS -->
                           <div class="kotak-chat-kiri chatbawah">
                             <img src="../<?= $row['foto_user'] ?>" class="ava float-left">
                             <p class="bubble-chat-kiri float-left"><?= $row['pesan_teks'] ?></p>
                             <p class="time-chat"><?= $row['pesan_date'] ?></p>
                           </div>
                           <!-- AKHIR FORMAT TEKS -->
                          <?php } ?>

                          <?php if ($row['pesan_attachment']==""){ ?>

                          <?php }else if (in_array($ext, $extboleh)){ ?>

                            <!-- FORMAT FILE FOTO -->
                             <div class="kotak-chat-kiri chatbawah">
                              <img src="../<?= $row['foto_user'] ?>" class="ava float-left">
                              <img src="../<?= $row['pesan_attachment'] ?>" class="file-photo float-left">
                              <p class="time-chat"><?= $row['pesan_date'] ?></p>
                            </div>
                            <!-- AKHIR FORMAT FILE FOTO -->
                          <?php }else if(in_array($ext, $extboleh2)){ ?>


                            <!-- FORMAT FILE VIDEO -->
                           <div class="kotak-chat-kiri chatbawah">
                             <img src="../<?= $row['foto_user'] ?>" class="ava float-left">
                               <video width="400" height="auto" class="float-left" controls>
                                 <source src="../<?= $row['pesan_attachment'] ?>" type="video/mp4">
                               Your browser does not support the video tag.
                               </video>
                             <p class="time-chat"><?= $row['pesan_date'] ?></p>
                           </div>
                           <!-- AKHIR FORMAT FILE VIDEO -->

                          <?php }; ?>


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





            <?php endif; ?>

        <!--akhir chat -->
      </div>
    </div>
   <!--akhir chat -->
   </div>

</main>

<script src="jslogin/placeholders.min.js"></script> <!-- polyfill for the HTML5 placeholder attribute -->
<script src="jslogin/main.js"></script> <!-- Resource JavaScript -->

<script src="myjs.js"></script>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


        <script type="text/javascript">
            $(document).ready(function(){

              $(".chatbawah:last").attr("id", "last-chat");
              document.getElementById('last-chat').scrollIntoView();

              // setInterval(function(){ updateChat(); }, 1000);


            });

        </script>
</body>
</html>
