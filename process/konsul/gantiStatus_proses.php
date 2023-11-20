<?php
  include '../../database/Konsultasi.php';

  $id = $_GET['id'];

  $konsul = new Konsultasi;
  $konsul->updateKonsultasi($id);

  echo "<script>
            alert('Konsultasi telah di terima !');
            window.location = '../../index.php?p=pesan_pending';
        </script>";



 ?>
