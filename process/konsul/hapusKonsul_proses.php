<?php
	include '../../database/Konsultasi.php';

	$id = $_GET['id'];


	$konsul = new Konsultasi;
	$konsul->hapusKonsul($id);
	echo "<script>
						alert('Data dihapus !');
						window.location = '../../index.php?p=select_main';
				</script>";
	//header('Location: ../../index.php');


 ?>
