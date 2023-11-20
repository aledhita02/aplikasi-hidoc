<?php
include '../database/Konsultasi.php';
include '../database/Pesan.php';

$konsul = new Konsultasi;
$pesan = new Pesan;


 ?>


    <!-- chat -->
    <div class="chatlog" id="chatlog">

        <?php
        if (isset($_GET['id_konsul'])):
          $id_konsul = $_GET['id_konsul'];
          $lihatkonsul = $konsul->tampilKonsulById($id_konsul);
          $lihatpesan = $pesan->tampilPesanByIdKonsul($id_konsul);

          ?>


        <div class="kotak-chat-kiri">
          <img src="<?= $lihatkonsul['foto_user'] ?>" class="float-left">
          <p class="bubble-chat-kiri float-left"><?= $lihatkonsul['topik_konsul'] ?></p>
          <p class="time-chat"><?= $lihatkonsul['konsultasi_date'] ?></p>
        </div>

        <?php foreach ($lihatpesan as $row): ?>


          <?php if ($row['id_user']==$_GET['id'] ): ?>
            <div class="kotak-chat-kanan">
              <img src="<?= $row['foto_user'] ?>" class="float-right">
              <p class="bubble-chat-kanan float-right"><?= $row['pesan_teks'] ?></p>
              <p class="time-chat"><?= $row['pesan_date'] ?></p>
            </div>
          <?php elseif ($row['id_user'] != $_GET['id']) : ?>
            <div class="kotak-chat-kiri">
              <img src="<?= $row['foto_user'] ?>" class="float-left">
              <p class="bubble-chat-kiri float-left"><?= $row['pesan_teks'] ?></p>
              <p class="time-chat"><?= $row['pesan_date'] ?></p>
            </div>
          <?php endif; ?>

        <?php endforeach; ?>


    </div>

    <!-- <form class="" action="process/pesan/tambahPesanDokter_proses.php" method="post"> -->
    <!-- <form> -->
    <!-- <form id="frm"> -->
      <div class="chat-form">
        <textarea name="pesan" id="pesan"></textarea>
        <input type="hidden" name="id_konsul" id="id_konsul" value="<?= $id_konsul ?>">
        <input type="hidden" name="id_user" id="id_user" value="<?= $_SESSION['id'] ?>">
        <button type="submit" id="sendchat">Send</button>
        <!-- <input type="button" id="sendchat" value="Save"> -->
      </div>
    <!-- </form> -->


      <?php endif; ?>

  <!--akhir chat -->
