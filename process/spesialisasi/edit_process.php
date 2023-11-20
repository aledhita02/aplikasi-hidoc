<?php
	include '../../database/Spesialisasi.php';
	$id = $_POST['id'];
	$kode_spesialisasi = $_POST['kode_spesialisasi'];
	$nama_spesialisasi = $_POST['nama_spesialisasi'];

	//var_dump($id,$kode_spesialisasi,$nama_spesialisasi);

	$spesialisasi= new Spesialisasi();
	$spesialisasi->updateSpesialisasi($id,$kode_spesialisasi,$nama_spesialisasi);
	echo "<script>
						alert('Data Berhasil Diubah!');
						window.location = '../../index.php?p=tabel_spesialis';

				</script>";

 ?>
