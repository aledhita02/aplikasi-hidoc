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
<div class="alert alert-primary">
	Hi! </a>

</div>

<div class="main-content">
	<div class="page-content">
		<div class="container-fluid">

			<!-- start page title -->
			<div class="row">
				<div class="col-12">
					<div class="page-title-box d-sm-flex align-items-center justify-content-between">
						<h4 class="mb-sm-0 font-size-18">Welcome, <strong>
								<?= $_SESSION['nama'] ?></strong> !</h4>

						<div class="page-title-right">
							<ol class="breadcrumb m-0">
								<li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
								<li class="breadcrumb-item active">Welcome!</li>
							</ol>
						</div>

					</div>
				</div>
			</div>
			<!-- end page title -->

			<div class="row">
				<div class="col-xl-3 col-md-6">
					<!-- card -->
					<div class="card card-h-100">
						<!-- card body -->
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="flex-grow-1">
									<span class="text-muted mb-3 lh-1 d-block text-truncate">Dokter</span>
									<h4 class="mb-3">
										<span>
											<?= $dokter ?>
										</span>
									</h4>
									<div class="text-nowrap">
										<span class="ms-1 text-muted font-size-13">Selengkapnya</span>
									</div>
								</div>

								<div class="flex-shrink-0 text-end dash-widget">
									<div id="mini-chart1" data-colors='["--bs-primary", "--bs-success"]'
										class="apex-charts"></div>
								</div>
							</div>
						</div><!-- end card body -->
					</div><!-- end card -->
				</div><!-- end col -->

				<div class="col-xl-3 col-md-6">
					<!-- card -->
					<div class="card card-h-100">
						<!-- card body -->
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="flex-grow-1">
									<span class="text-muted mb-3 lh-1 d-block text-truncate">User</span>
									<h4 class="mb-3">
										<span>
											<?= $user ?>
										</span>
									</h4>
									<div class="text-nowrap">
										<span class="ms-1 text-muted font-size-13">Selengkapnya</span>
									</div>
								</div>
								<div class="flex-shrink-0 text-end dash-widget">
									<div id="mini-chart2" data-colors='["--bs-primary", "--bs-success"]'
										class="apex-charts"></div>
								</div>
							</div>
						</div><!-- end card body -->
					</div><!-- end card -->
				</div><!-- end col-->

				<div class="col-xl-3 col-md-6">
					<!-- card -->
					<div class="card card-h-100">
						<!-- card body -->
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div class="flex-grow-1">
									<span class="text-muted mb-3 lh-1 d-block text-truncate">Artikel</span>
									<h4 class="mb-3">
										<span>
											<?= $artikel ?>
										</span>
									</h4>
									<div class="text-nowrap">
										<span class="ms-1 text-muted font-size-13">Selengkapnya</span>
									</div>
								</div>
								<div class="flex-shrink-0 text-end dash-widget">
									<div id="mini-chart3" data-colors='["--bs-primary", "--bs-success"]'
										class="apex-charts"></div>
								</div>
							</div>
						</div><!-- end card body -->
					</div><!-- end card -->
				</div><!-- end col -->

			</div><!-- end row-->




		</div>
		<!-- container-fluid -->
	</div>
	<!-- End Page-content -->

	<footer class="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<script>document.write(new Date().getFullYear())</script> © Dason.
				</div>
				<div class="col-sm-6">
					<div class="text-sm-end d-none d-sm-block">
						Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<!-- end main content-->
