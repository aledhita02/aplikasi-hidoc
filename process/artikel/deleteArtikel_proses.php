<?php
	include 'database/Artikel.php';

	$id = $_GET['id'];
	$artikel = new Artikel;
	$artikel->hapusArtikel($id);
  	echo "<script>
						alert('Data dihapus !');
						window.location = 'index.php?p=lihat_artikel';
				</script>";
	//header('Location: ../../index.php');


 ?>
