<?php
    include '../../database/Dokter.php';
    session_start();
    $dokter = new Dokter;


    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $telepon = $_POST['telepon'];
    $jk = $_POST['jk'];

    $dokter->updateUserBio($_SESSION['id'],$nama,$tgl_lahir,$telepon,$jk);
    $_SESSION['nama'] = $nama;
    $_SESSION['tgl_lahir'] = $tgl_lahir;
    $_SESSION['telp'] = $telepon;
    $_SESSION['jk'] = $jk;


    echo "<script>
              alert('Data berhasil diubah !');
              window.location = '../../index.php?p=edit_profil';
          </script>";

 ?>
