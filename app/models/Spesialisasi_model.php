
<?php


class Spesialisasi
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


	public function hitungSpesialisasiButtonSpesial($kode)
	{
		$sql = "SELECT * FROM tuser WHERE spesialis=?  ";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$kode]);
		$count = $stmt->rowCount();
		return $count;
	}

	public function tambahSpesialisasi($kode_spesialisasi, $nama_spesialisasi)
	{

		$sql = "INSERT INTO tspesialisasi (kode_spesialisasi,nama_spesialisasi) VALUES(?,?)";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([
			$kode_spesialisasi, $nama_spesialisasi
		]);
	}

	public function tampilSpesialisasi()
	{
		$sql = "SELECT * FROM tspesialisasi";
		$stmt = $this->pdo->query($sql);
		return $stmt;
	}

	public function tampilJumlahSpesial()
	{
		$sql = "SELECT * FROM tspesialisasi";
		$stmt = $this->pdo->query($sql);
		$count = $stmt->rowCount();
		return $count;
	}

	public function tampilJumlahSpesialByKode($kode)
	{
		$sql = "SELECT * FROM tspesialisasi WHERE  kode_spesialisasi=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$kode]);
		$count = $stmt->rowCount();
		return $count;
	}

	public function tampilSpesialisasiByKode($kode)
	{
		$sql = "SELECT * FROM tspesialisasi
				WHERE kode_spesialisasi=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$kode]);
		$data = $stmt->fetch();
		return $data;
	}

	public function tampilSpesialisasiById($id)
	{
		$sql = "SELECT * FROM tspesialisasi
				WHERE id_spesialisasi=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
		$data = $stmt->fetch();
		return $data;
	}

	public function updateSpesialisasi($id, $kode_spesialisasi, $nama_spesialisasi)
	{
		$sql = "UPDATE tspesialisasi
				SET kode_spesialisasi = ?,
					nama_spesialisasi = ?
					WHERE id_spesialisasi=?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$kode_spesialisasi, $nama_spesialisasi, $id]);
	}

	public function hapusSpesialisasi($id)
	{
		$sql = "DELETE FROM tspesialisasi WHERE id_spesialisasi= ?";
		$stmt = $this->pdo->prepare($sql);
		$stmt->execute([$id]);
	}
}
