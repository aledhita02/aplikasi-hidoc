<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>

	<?php
	include 'database/Artikel.php';
	include 'database/Komentar.php';
	$id = $_GET['id'];
	$user = new Artikel;
	$data = $user->tampilArtikelById($id);

	?>
	<div class="row">
		<div class="container turun">
			<div class="w-full detailberita">
				<div class="row">
					<h1 class="text-hijau py-2" style=" font-size: 4rem; font-weight: 600; text-transform: capitalize;"> <?php echo $data['judul'] ?></h1>
					<input type="hidden" name="" value="<?= $data['id'] ?>" id="id_artikel">
				</div>
				<div class="d-flex justify-content-center py-4">
					<img src="<?php echo $data['foto'] ?>" alt="workingspace" class="img-fluid"> <br>
				</div>
			</div>

			<p class="text-secondary"><span class="oi oi-people"></span></span> Admin1</small><br>
			<p class="text-secondary"><span class="oi oi-calendar"></span> <?php echo $data['date'] ?></p>
		</div>

		<div class="container">
			<div class="row d-flex justify-content-center mt-5">
				<div class="col-7 isiartikel">
				<?php echo $data['artikel'] ?>
				</div>
	
				<div class="col-3 offset-2">
					<div class="recent-post">
						<table class="w-100">
							<tr>
								<th class="hijau putih py-3" style= "font-size: 1.8rem; font-weight: 700;">Artikel lainnya</th>
							</tr>
	
							<?php
							$artikel = new Artikel;
							$recent = $artikel->tampilRecentArtikel();
							foreach ($recent as $row) : ?>
								<tr>
									<td>
										<a href="index.php?p=detail_berita&id=<?= $row['id'] ?>">
											<div class="card my-2 shadow" style="border-radius: 5%;">
												<div class=" d-flex justify-content-center">
													<img src="<?= $row['foto'] ?>" class="card-img-top" alt="Foto Artikel" style="width: 100px; height: 100px;">
												</div>
													<div class="card-body">
														<h1><?= $row['judul'] ?></h1>
														<p class="potongteks"><?= $row['artikel'] ?></p>
													</div>
											</div>
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<br />

	<div class="container">
		<div class="row komentar d-flex justify-content-center mt-5">
			<div class="col-8">
				<?php
				if (isset($_SESSION['role'])) {
					$nama = $_SESSION['nama'];
					$role = $_SESSION['role'];
				?>
					<!-- <form action="process/komentar/tambahKomentar_proses.php" method="post" enctype="multipart/form-data"> -->
					<div class="komen-lawan">
						<img src="<?= $_SESSION['foto'] ?>">
						<div class="form-group">
							<input type="hidden" name="nama" value="<?php echo $nama; ?>" id="nama">
							<textarea class="form-control" name="komentar" maxlength="120" id="text" required></textarea>
							<input type="hidden" name="post" value="<?php echo $data['id']; ?>" id="post">
							<span class="badge badge-secondary" id="count_message"></span>
							<button type="button" class="btn btn-secondary tombolpost" id="sendkomentar">Post</button>
						</div>
					</div>
					<!-- </form> -->
	
				<?php
	
				} else {
				?><h3 class="text-hijau">Silahkan login untuk berkomentar</h3><?php
																}
																	?>
				<div id="kolomKomentar">
	
	
					<?php
					$post = $_GET['id'];
					$komentar = new Komentar;
	
					$data2 = $komentar->tampilKomentarByPost($post);
					foreach ($data2 as $row2) :
					?>
	
	
						<div class="komen-lawan2">
							<img src="<?= $row2['foto_user'] ?>">
							<h1 class="text-hijau"><?= $row2['nama'] ?></h1>
							<p><?= $row2['komentar'] ?></p>
						</div>
					<?php
					endforeach;
					?>
	
				</div>
			</div>
	
		</div>
	</div>

	<!-- 	<script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script> -->
	<script src="http://code.jquery.com/jquery-1.5.js"></script>

	<script>
		$(document).ready(function() {
			var text_max = 120;
			$('#count_message').html('0 / ' + text_max);

			$('#text').keyup(function() {
				var text_length = $('#text').val().length;
				var text_remaining = text_max - text_length;

				$('#count_message').html(text_length + ' / ' + text_max);
			});

			$("#sendkomentar").click(function() {
				$('#count_message').html('0 / ' + text_max);
			});

			// autosize(document.getElementById("text"));
		});
	</script>

	<script type="text/javascript" src="js\komentarArtikel.js"></script>
	<script type="text/javascript" src="js\sendKomentarArtikel.js"></script>

</body>

</html>