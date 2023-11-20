<?php
  include '../../database/Konsultasi.php';

  $id = $_GET['id'];

  $konsul = new Konsultasi;
  $konsul->updateKonsultasiFinish($id);

  echo "<script>
            alert('Konsultasi telah selesai !');
            window.location = '../../pages/select_chat_blank.php';
        </script>";



 ?>
