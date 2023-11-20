
 			<?php

      include '../database/Komentar.php';
        $post = $_GET['id'];
          $komentar= new Komentar;

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
