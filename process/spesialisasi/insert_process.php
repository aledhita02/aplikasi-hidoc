<?php
	include '../../database/Spesialisasi.php';

	$kode_spesialisasi = $_POST['kode_spesialisasi'];
	$nama_spesialisasi = $_POST['nama_spesialisasi'];

	$spesialisasi = new Spesialisasi;
	$spesialisasi->tambahSpesialisasi($kode_spesialisasi,$nama_spesialisasi);
	echo "<script>
						alert('Data Berhasil Ditambah !');
						window.location = '../../index.php?p=tabel_spesialis';
				</script>";

 ?>
