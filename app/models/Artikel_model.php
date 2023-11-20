<?php
	class Artikel
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

		public function hitungArtikel()
		{
			$sql = "SELECT * FROM tartikel";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute();
			$count = $stmt->rowCount();
			return $count;
		}

		public function tambahArtikel($judul, $artikel, $foto, $date)
		{
			$sql = "INSERT INTO tartikel (judul,artikel,foto,date) VALUES(?,?,?,?)";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([
				$judul, $artikel, $foto, $date
			]);
		}

		public function tampilRecentArtikel()
		{
			$sql = "SELECT * FROM tartikel ORDER BY date DESC LIMIT 0,4";
			$stmt = $this->pdo->query($sql);
			return $stmt;
		}

		public function tampilArtikel()
		{
			$sql = "SELECT * FROM tartikel ORDER BY date DESC LIMIT 1,4";
			$stmt = $this->pdo->query($sql);
			return $stmt;
		}

		public function tampilArtikel2()
		{
			$sql = "SELECT * FROM tartikel ORDER BY date DESC LIMIT 0,1";
			$stmt = $this->pdo->query($sql);
			return $stmt;
		}

		public function tampilArtikel3()
		{
			$sql = "SELECT * FROM tartikel";
			$stmt = $this->pdo->query($sql);
			return $stmt;
		}


		public function tampilArtikelById($id)
		{
			$sql = "SELECT * FROM tartikel WHERE id=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$id]);
			$data = $stmt->fetch();
			return $data;
		}

		public function hapusArtikel($id)
		{
			$sql = "DELETE FROM tartikel WHERE id=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([$id]);
		}

		public function updateArtikel($id, $judul, $artikel, $foto)
		{
			$sql = "UPDATE tartikel SET judul=?,
                    artikel=?,
					foto=?
										WHERE id=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([
				$judul, $artikel, $foto, $id
			]);
		}

		public function updateArtikel2($id, $judul, $artikel)
		{
			$sql = "UPDATE tartikel SET judul=?,
                    artikel=?
										WHERE id=?";
			$stmt = $this->pdo->prepare($sql);
			$stmt->execute([
				$judul, $artikel, $id
			]);
		}

	}





	?>
