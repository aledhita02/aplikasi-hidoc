<?php
session_start();

include '../database/Konsultasi.php';

$keyword = $_GET['keyword'];

$dokter = new Konsultasi;
$tampilDokter = $dokter->cariChat($_SESSION['id'], $keyword);

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


if (isset($_GET['id_konsul'])) {
  $id_konsul = $_GET['id_konsul'];
}

?>
<div class="container-fluid">
  <!-- chat -->
  <div class="row" id="konten">
    <div class="col-4 kotak-list-chat">
      <!-- LIST ORANG -->

      <?php foreach ($tampilDokter as $row): ?>
        <a href="index.php?p=select_chat_blank&id_konsul=<?= $row['id_konsultasi'] ?>">
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
        <!-- <a href="#" data-toggle="modal" data-target="#selesai_konsul" data-whatever="@getbootstrap"><span class="oi oi-delete float-right "></span></a> -->
        <!-- <a href="../process/konsul/gantiStatusFinishUser_proses.php?id=<?= $row['id_konsultasi'] ?>"><button type="button" class="selesai-konsul" data-toggle="modal" data-target="#delete_konsul_<?= $row['id_konsultasi'] ?>" data-whatever="@getbootstrap">Selesai Konsul</button></a>  -->
        <button type="button" class="btn btn-danger btn-block" data-toggle="modal"
          data-target="#delete_konsul_<?= $row['id_konsultasi'] ?>" data-whatever="@getbootstrap">Selesai
          Konsul</button>

        <!-- Modal Delete Konsul -->
        <div class="modal fade" id="delete_konsul_<?= $row['id_konsultasi'] ?>" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Selesai Konsul</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Anda yakin ingin selesai konsul dengan Dr.
                  <?= $row['nama_user'] ?>
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="process/konsul/gantiStatusFinishUser_proses.php?id=<?= $row['id_konsultasi'] ?>"><button
                    type="button" class="btn btn-danger">Selesai</button></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Akhir Modal Delete Konsul -->



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
            <img src="<?= $lihatkonsul['foto_user'] ?>" class="ava float-right">
            <p class="bubble-chat-kanan float-right bg-success">
              <?= $lihatkonsul['topik_konsul'] ?>
            </p>
            <p class="time-chat">
              <?= formatTanggalDanWaktu($lihatkonsul['konsultasi_date']); ?>
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
                <div class="kotak-chat-kanan chatbawah">
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
                  <div class="kotak-chat-kanan chatbawah">
                    <img src="<?= $row['foto_user'] ?>" class="ava float-right">
                    <img src="<?= $row['pesan_attachment'] ?>" class="file-photo float-right">
                    <p class="time-chat">
                    <?= formatTanggalDanWaktu($row['pesan_date']); ?>
                    </p>
                  </div>
                  <!-- AKHIR FORMAT FILE FOTO -->
              <?php } else if (in_array($ext, $extboleh2)) { ?>

                    <!-- FORMAT FILE VIDEO -->
                    <div class="kotak-chat-kanan chatbawah">
                      <img src="<?= $row['foto_user'] ?>" class="ava float-right">
                      <video width="400" height="auto" class="float-right" controls>
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
                <div class="kotak-chat-kiri chatbawah">
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
                  <div class="kotak-chat-kiri chatbawah">
                    <img src="<?= $row['foto_user'] ?>" class="ava float-left">
                    <img src="<?= $row['pesan_attachment'] ?>" class="file-photo float-left">
                    <p class="time-chat">
                    <?= formatTanggalDanWaktu($row['pesan_date']); ?>
                    </p>
                  </div>
                  <!-- AKHIR FORMAT FILE FOTO -->
              <?php } else if (in_array($ext, $extboleh2)) { ?>


                    <!-- FORMAT FILE VIDEO -->
                    <div class="kotak-chat-kiri chatbawah">
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


        <form action="process/pesan/tambahPesan_proses.php" method="post" enctype="multipart/form-data">

          <div class="chat-form">
            <div class="upload-btn-wrapper">
              <button class="tombolupload"><span class="oi oi-document"></span></button>
              <input type="file" name="attach" />
            </div>
            <textarea name="pesan" id="pesan"></textarea>
            <input type="hidden" name="id_konsul" id="id_konsul" value="<?= $id_konsul ?>">
            <input type="hidden" name="id_user" id="id_user" value="<?= $_SESSION['id'] ?>">
            <button class="bg-success" type="submit" id="sendchat">Send</button>
          </div>
        </form>


      <?php endif; ?>

      <!--akhir chat -->
    </div>
  </div>
</div>
<!--akhir chat -->


<script src="jslogin/placeholders.min.js"></script> <!-- polyfill for the HTML5 placeholder attribute -->
<script src="jslogin/main.js"></script> <!-- Resource JavaScript -->

<script src="myjs.js"></script>

<script src="js/cariChat.js"></script>








<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
  integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(document).ready(function () {

    $(".chatbawah:last").attr("id", "last-chat");
    document.getElementById('last-chat').scrollIntoView();

    // setInterval(function(){ updateChat(); }, 1000);


  });

</script>