<?php
include '../../database/Konsultasi.php';

$id = $_GET['id'];

$konsul = new Konsultasi;
$konsul->updateKonsultasiFinish($id);

echo "<script>
            alert('Konsultasi telah selesai !');
            window.location = '../../index.php?p=select_chat_blank&&id_konsul=" .$id."';

        </script>";



?>