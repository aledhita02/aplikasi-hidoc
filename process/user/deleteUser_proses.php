<?php
	include '../../database/User.php';

	$id = $_GET['id'];
  $foto = $_GET['foto'];

	$user = new User;
	$user->hapusUser($id);
  unlink("../../".$foto);
	echo "<script>
						alert('Data dihapus !');
						window.location = '../../index.php?p=tabel_user';
				</script>";


 ?>
