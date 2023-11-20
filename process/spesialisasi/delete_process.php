<?php
	include '../../database/Spesialisasi.php';

	$id = $_GET['id'];

	$spesialisasi = new Spesialisasi();
	$spesialisasi->hapusSpesialisasi($id);


	echo "<script>
						alert('Data Berhasil Dihapus !');
						window.location = '../../index.php?p=tabel_spesialis';
				</script>";


 ?>
