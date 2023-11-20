<?php
    include '../../database/Komentar.php';
    $usr = new Komentar;

    $nama = $_GET['nama'];
    $komentar = $_GET['komentar'];
    $post = $_GET['post'];

          $usr->tambahKomentar($nama,$komentar,$post);

          // echo "<script>
        	// 					alert('Data berhasil tambah !');
        	// 					window.location = '../../index.php?p=detail_berita&id=".$post."';
        	// 			</script>";









 ?>
