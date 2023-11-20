<?php

echo "hehe";


<?php
if (isset($_GET['id_konsul'])):
  $id_konsul = $_GET['id_konsul'];
    $konsul= new Konsultasi;
  $lihatkonsul = $konsul->tampilKonsulById($id_konsul);
  $lihatpesan = $pesan->tampilPesanByIdKonsul($id_konsul);

  ?>


<div class="kotak-chat-kiri">
  <img src="<?= $lihatkonsul['foto_user'] ?>" class="float-left">
  <p class="bubble-chat-kiri float-left"><?= $lihatkonsul['topik_konsul'] ?></p>
  <p class="time-chat"><?= $lihatkonsul['konsultasi_date'] ?></p>
</div>

<?php foreach ($lihatpesan as $row): ?>


  <?php if ($row['id_user']==$_SESSION['id']): ?>
    <div class="kotak-chat-kanan">
      <img src="<?= $row['foto_user'] ?>" class="float-right">
      <p class="bubble-chat-kanan float-right"><?= $row['pesan_teks'] ?></p>
      <p class="time-chat"><?= $row['pesan_date'] ?></p>
    </div>
  <?php elseif ($row['id_user'] != $_SESSION['id']) : ?>
    <div class="kotak-chat-kiri">
      <img src="<?= $row['foto_user'] ?>" class="float-left">
      <p class="bubble-chat-kiri float-left"><?= $row['pesan_teks'] ?></p>
      <p class="time-chat"><?= $row['pesan_date'] ?></p>
    </div>
  <?php endif; ?>

<?php endforeach; ?>

<?php endif; ?>
