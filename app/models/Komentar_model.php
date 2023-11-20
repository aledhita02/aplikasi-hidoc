<?php
	class Komentar
	{

		private $pdo;

		function __construct()
		{
			try {
				$this->pdo = new PDO('mysql:host=localhost;dbname=konsuldoc', 'root', '');
			} catch (PDOException $e) {
				echo $e;
			}
		}


		public function tambahKomentar($nama, $komentar, $post)
		{
			$sql = "INSERT INTO tkomentar (nama,komentar,post) VALUES(?,?,?)";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([
				$nama, $komentar, $post
			]);
		}

		public function tampilKomentar()
		{
			$sql = "SELECT * FROM tkomentar";
			$stmt = $this->pdo->query($sql);
			return $stmt;
		}

		public function tampilKomentarByPost($post)
		{
			$sql = "SELECT * FROM tkomentar,tuser WHERE post = ? AND tkomentar.nama= tuser.nama_user ORDER BY date DESC";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$post]);
			return $stmt;
		}

		public function hapusArtikel($id)
		{
			$sql = "DELETE FROM tartikel WHERE id=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$id]);
		}

		public function updateArtikel($id, $judul, $artikel)
		{
			$sql = "UPDATE tartikel SET judul=?,
                    artikel=? WHERE id_user=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$judul, $artikel]);
			return 1;
		}


	}





	?>
