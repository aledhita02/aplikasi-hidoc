<?php
	include '../../database/Dokter.php';

	$id = $_GET['id'];
  $foto = $_GET['foto'];

	$dokter = new Dokter;
	$dokter->hapusDokter($id);
  unlink("../../".$foto);
	echo "<script>
						alert('Data dihapus !');
						window.location = '../../index.php?p=tabel_dokter';
				</script>";
	


 ?>
