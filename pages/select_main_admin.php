<?php
  include 'database/Artikel.php';
  $art = new Artikel;
  $artikel = $art->hitungArtikel();

  $usr = new User;
  $user = $usr->hitungUser();
  $datauser = $usr->tampilUser();

  $dktr = new Dokter;
  $dokter = $dktr->hitungDokter();
  $lihatDokter = $dktr->tampilDokterBySpesial();

  $spesial = new Spesialisasi;
  $spesialis = $spesial->tampilSpesialisasi();


 ?>
<br />
<div class="alert alert-primary">
  Hi! <strong><?= $_SESSION['nama'] ?></strong> Jangan Lupa Senyum Hari ini. | Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a>
  
</div>

<!-- infopanel admin -->
<div class="col-12">
	<div class="row">
		<div class="col-lg admin_panel ml-3 mr-3">
			<img src="img/ic4.png" class="float-left">
			<h1><?= $artikel ?></h1>
			<p>Artikel</p>
		</div>
		<div class="col-lg admin_panel ml-3 mr-3">
			<img src="img/ic_doc.png" class="float-left">
			<h1><?= $dokter ?></h1>
			<p>Dokter</p>
		</div>
		<div class="col-lg admin_panel ml-3 mr-3">
			<img src="img/ic_user.png" class="float-left">
			<h1><?= $user ?></h1>
			<p>User</p>
		</div>
	</div>
</div>
<!-- akhir infopanel admin -->
