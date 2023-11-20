
<div class="col-lg-12">
	<div class="row edit_profile">
			<div class="col-lg-4">
				<img src="<?= $_SESSION['foto'] ?>" class="edit_profile_image">
			</div>

			<div class="col-lg-6">
				<span class="badge badge-secondary label_profile"><?= $_SESSION['role'] ?></span>
				<h1 class="nama_profile"><?= $_SESSION['nama'] ?></h1>
				<img src="img/birthday-cake.svg" class="icon_kue">
				<p class="p_class">
					<?php if ($_SESSION['tgl_lahir']==""): ?>
						<?php echo "Belum Diisi" ?>
					<?php else: ?>
							<?= $_SESSION['tgl_lahir']?>
					<?php endif; ?>

				</p><br />

				<img src="img/cd-icon-phone.svg" class="icon_kue">
				<p class="p_class">
					<?php if ($_SESSION['telp']==""): ?>
						<?php echo "Belum Diisi" ?>
					<?php else: ?>
							<?= $_SESSION['telp']?>
					<?php endif; ?>

				</p><br />

				<img src="img/male-and-female-symbols.svg" class="icon_kue">
				<p class="p_class">
					<?php if ($_SESSION['jk']==""): ?>
						<?php echo "Belum Diisi" ?>
					<?php else: ?>
							<?= $_SESSION['jk']?>
					<?php endif; ?>
				</p><br />


				<a href="#" class="btn btn-outline-dark tombol_edit_profile" data-toggle="modal" data-target="#edit_bio" data-whatever="@getbootstrap">Edit Profil</a>
			</div>

			<!-- tabel  -->
			<table class="table table_privacy">
			  <thead class="thead barThead">
			    <tr>
			      <th colspan="3">Privacy</th>

			    </tr>
			  </thead>
			  <tbody>
			    <tr>

			      <td>Email</td>
			      <td><?= $_SESSION['email']  ?></td>
			  	<td></td>
			    </tr>
			    <tr>

			      <td>Password</td>
			      <td>*************</td>
			      <td><button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit_pw" data-whatever="@getbootstrap">Edit Password</button></td>
			    </tr>
			  </tbody>
			</table>

			<!-- akhirtable -->
	</div>
</div>

<!-- Edit Bio -->
<div class="modal fade" id="edit_bio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Bio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

			<form action="process/user/ubahUserBio_proses.php" method="post">
      <div class="modal-body">

	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Nama:</label>
	            <input type="text" class="form-control" id="recipient-name" name="nama" value="<?= $_SESSION['nama'] ?>" required>
	          </div>

	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Tanggal Lahir:</label>
	            <input type="date" class="form-control" id="recipient-name" name="tgl_lahir" required>
	          </div>

	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Telepon:</label>
	            <input type="tel" class="form-control" id="recipient-name" name="telepon" value="<?= $_SESSION['telp'] ?>" required>
	          </div>

	          <div class="form-group">
	          	<label for="recipient-name" class="col-form-label">Jenis Kelamin:</label><br />
	            <div class="form-check-inline">
	        		<input class="form-check-input" type="radio" name="jk" id="exampleRadios1" value="Laki-Laki" checked>
	        		<label class="form-check-label" for="exampleRadios1">
	            		Laki - Laki
	        		</label>
	    			</div>
				    <div class="form-check-inline">
				        <input class="form-check-input" type="radio" name="jk" id="exampleRadios2" value="Perempuan">
				        <label class="form-check-label" for="exampleRadios2">
				            Perempuan
				        </label>
				    </div>
	          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
			</form>
    </div>
  </div>
</div>
<!-- Akhir edit Bio -->


<!-- Edit Password -->
<div class="modal fade" id="edit_pw" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
			<form action="process/user/ubahUserPass_proses.php" method="post">
      <div class="modal-body">

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password Lama:</label>
            <input type="password" class="form-control" id="recipient-name" name="passlama">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password Baru:</label>
            <input type="password" class="form-control" id="recipient-name" name="passbaru1">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Konfirmasi Password Baru:</label>
            <input type="password" class="form-control" id="recipient-name" name="passbaru2">
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
			</form>
    </div>
  </div>
</div>
<!-- Akhir edit password -->
