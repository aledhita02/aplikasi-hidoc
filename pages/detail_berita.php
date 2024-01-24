<?php
include 'database/Artikel.php';
include 'database/Komentar.php';
$id = $_GET['id'];
$user = new Artikel;
$data = $user->tampilArtikelById($id);

?>
<div class="main-content">
	<div class="page-content">
		<div class="container-fluid">
			<div class="card">
				<div class="row">
					<div class="container turun">
						<div class="w-full detailberita">
							<div class="row">
								<h1 class="py-2 text-center"
									style=" font-size: 3rem; font-weight: 600; text-transform: capitalize;">
									<?php echo $data['judul'] ?>
								</h1>
								<input type="hidden" name="" value="<?= $data['id'] ?>" id="id_artikel">
							</div>
							<div class="d-flex justify-content-center py-4">
								<img src="<?php echo $data['foto'] ?>" alt="workingspace" class="img-fluid">
								<br>
							</div>
						</div>


						<div class="col-md-6">
							<p class="text-secondary"><span class="oi oi-people"></span></span>
								Admin1</small><br>
							<p class="text-secondary"><span class="oi oi-calendar"></span>
								<?php echo $data['date'] ?>
							</p>
						</div>


						<div class="row">
							<div class="col-md-8">

								<div class="card-body">
									<h5 class="card-text text-justify font-weight-light">
										<?php echo $data['artikel'] ?>
									</h5>
								</div>

							</div><!-- end col -->



							<div class="col-md-4 ">
								<div class="recent-post">
									<div class="card">
										<div class="card-body bg-success">
											<h4 class="putih py-3 text-center"
												style="font-size: 1.8rem; font-weight: 700;">
												Artikel
												lainnya</h4>
										</div>

										<div class="row g-0 align-items-center workingspace">
											<?php
											$artikel = new Artikel;
											$recent = $artikel->tampilRecentArtikel();
											foreach ($recent as $row): ?>

												<a href="index.php?p=detail_berita&id=<?= $row['id'] ?>">

													<div class="col-md-4">

														<img class="card-img img-fluid" src="<?= $row['foto'] ?>"
															alt="Card image">
													</div>
													<div class="col-md-12">
														<div class="card-body">

															<h5 class="card-title">
																<?= $row['judul'] ?>
															</h5>
															<p class="card-text">
																<?= $row['artikel'] ?>
															</p>


														</div>
													</div>
												</a>
											<?php endforeach; ?>
										</div>
									</div>
								</div>
							</div><!-- end col -->

						</div>
					</div>


				</div>

				<br />

				<!-- komentar -->
				<div class="container-fluid">
					<div class="p-5 rounded">
						<div style="font-weight: 500; font-size: 2rem;">
							Komentar :
						</div>
						<div class="row komentar d-flex justify-content-start mt-5">
							<div class="col-12">
								<?php
								if (isset($_SESSION['role'])) {
									$nama = $_SESSION['nama'];
									$role = $_SESSION['role'];
									?>
									<!-- <form action="process/komentar/tambahKomentar_proses.php" method="post" enctype="multipart/form-data"> -->

									<div class="komen-lawan border-0">
										<img src="<?= $_SESSION['foto'] ?>">
										<div class="form-group text-center">
											<div class="row">
												<div class="col-12">
													<input type="hidden" name="nama" value="<?php echo $nama; ?>" id="nama">
												</div>
												<div class="col-12">
													<input type="hidden" name="post" value="<?php echo $data['id']; ?>"
														id="post">
												</div>
												<div class="col-12">
													<textarea class="form-control" name="komentar" maxlength="150" id="text"
														required></textarea>
												</div>

												<div class="col-12">
													<span class="badge badge-success ml-3 px-3 mx-auto"
														style="height: 1rem; margin-top: 1rem;" id="count_message"></span>
												</div>

												<div class="col-12">
													<button type="button" class="btn btn-success btn-lg mt-2 mx-auto"
														id="sendkomentar">Posting</button>
												</div>
											</div>
										</div>
									</div>
									<!-- </form> -->

									<?php

								} else {
									?>
									<h3 class="text-hijau">Silahkan login untuk berkomentar</h3>
									<?php
								}
								?>
								<div id="kolomKomentar">
									<?php
									$post = $_GET['id'];
									$komentar = new Komentar;

									$data2 = $komentar->tampilKomentarByPost($post);
									foreach ($data2 as $row2):
										?>
										<div class="komen-lawan2 mt-4 border p-4">
											<div class="row">
												<div class="col-xl-12 col-md-5">
													<div>
														<div class="d-flex">
															<img src="<?= $row2['foto_user'] ?>"
																class="avatar-sm rounded-circle" alt="img" />
															<div class="flex-1 ms-4">
																<h5 class="mb-2 font-size-20 text-success">
																	<?= $row2['nama'] ?>
																</h5>
																<h5 class="text-muted font-weight-normal font-size-10">
																	<?php $tgl_formatted = date("d F Y, h:i A", strtotime($row2['date'])); ?>
																	<?= $tgl_formatted ?>
																</h5>
																<h5 class="text-muted font-weight-normal font-size-15">
																	<?= $row2['komentar'] ?>
																</h5>
															</div>
														</div>
													</div>
												</div>

											</div>
										</div>
										<?php
									endforeach;
									?>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 	<script src="https://rawgit.com/jackmoore/autosize/master/dist/autosize.min.js"></script> -->
<script src="http://code.jquery.com/jquery-1.5.js"></script>

<script>
	$(document).ready(function () {
		var text_max = 150;
		$('#count_message').html('0 / ' + text_max);

		$('#text').keyup(function () {
			var text_length = $('#text').val().length;
			var text_remaining = text_max - text_length;

			$('#count_message').html(text_length + ' / ' + text_max);
		});

		$("#sendkomentar").click(function () {
			$('#count_message').html('0 / ' + text_max);
		});

		// autosize(document.getElementById("text"));
	});
</script>

<script type="text/javascript" src="js\komentarArtikel.js"></script>
<script type="text/javascript" src="js\sendKomentarArtikel.js"></script>