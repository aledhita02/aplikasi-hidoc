<?php
  class Dokter{

    private $pdo;

    function __construct(){
      try{
        $this->pdo = new PDO('mysql:host=localhost;dbname=konsuldoc','root','');
      }catch(PDOException $e){
        echo $e;
      }
      

    }

    public function cariDokter($keyword){
        $sql="SELECT * FROM tuser,tspesialisasi WHERE role='dokter' AND tuser.spesialis = tspesialisasi.kode_spesialisasi AND nama_user LIKE '%$keyword%'   ";
        $stmt = $this->pdo->query($sql);
        return $stmt;
    }

    public function hitungDokter(){
        $sql="SELECT * FROM tuser WHERE  role=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['dokter']);
        $count = $stmt->rowCount();
        return $count;

    }

    public function checkEmail($email){
      $sql="SELECT * FROM tuser WHERE  email_user=?";
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute([$email]);
      $count = $stmt->rowCount();
      if ($count >0) {
        return 1;
      }else {
        return 0;
      }

  }

  public function tampilJumlahDokter(){
		$sql = "SELECT * FROM tuser WHERE role='dokter'";
		$stmt = $this->pdo->query($sql);
		$count = $stmt->rowCount();
		return $count;
	}

  public function tampilJumlahDokterByKode($kode){
		$sql = "SELECT * FROM tuser WHERE role='dokter' AND spesialis='$kode'";
		$stmt = $this->pdo->query($sql);
		$count = $stmt->rowCount();
		return $count;
	}

  public function tambahDokter($nama,$email,$telp,$pass,$spesialis,$foto,$date,$jk){
    $sql="INSERT INTO tuser (nama_user,email_user,telp_user,pass_user,spesialis,role,foto_user,tgl_lahir,jk) VALUES(?,?,?,?,?,?,?,?,?)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
      $nama,$email,$telp,$pass,$spesialis,'dokter',$foto,$date,$jk
    ]);
  }

  public function tampilDokter(){
    $sql="SELECT * FROM tuser,tspesialisasi WHERE role='dokter' AND tuser.spesialis = tspesialisasi.kode_spesialisasi";
    $stmt = $this->pdo->query($sql);
    return $stmt;
  }



  public function tampilDokterBySpesial(){
    $sql="SELECT * FROM tuser,tspesialisasi WHERE role='dokter' AND tuser.spesialis = tspesialisasi.kode_spesialisasi";
    $stmt = $this->pdo->query($sql);
    return $stmt;
  }

  public function tampilDokterBySpesialisasi($spesialis){
    $sql="SELECT * FROM tuser,tspesialisasi WHERE spesialis='$spesialis' AND tuser.spesialis = tspesialisasi.kode_spesialisasi";
    $stmt = $this->pdo->query($sql);
    return $stmt;
  }

  public function tampilDokterById($id){
    $sql="SELECT * FROM tuser WHERE id_user=?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$id]);
    $data = $stmt->fetch();
    return $data;
  }

  public function hapusDokter($id){
    $sql = "DELETE FROM tuser WHERE id_user=?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$id]);
  }

  public function updateDokter($id,$nama,$telp,$pass,$spesialis,$foto){
    $sql = "UPDATE tuser SET nama_user=?,
                  telp_user=?,
                  pass_user=?,
                  spesialis=?,
                  foto_user=?
                  WHERE id_user=?";
    $stmt=$this->pdo->prepare($sql);
    $stmt->execute([
      $nama,$telp,$pass,$spesialis,$foto,$id
    ]);
    return 1;

  }

  public function updateDokterBio($id,$nama,$tgl_lahir,$telp,$jk){
    $sql = "UPDATE tuser SET nama_user=?,
                  tgl_lahir=?,
                  telp_user=?,
                  jk=?
                  WHERE id_user=?";
    $stmt=$this->pdo->prepare($sql);
    $stmt->execute([
      $nama,$tgl_lahir,$telp,$jk,$id
    ]);
    return 1;

  }

  public function updateUserPass($id,$pass){
    $sql = "UPDATE tuser SET pass_user=?
                  WHERE id_user=?";
    $stmt=$this->pdo->prepare($sql);
    $stmt->execute([
      $pass,$id
    ]);
    return 1;

  }

  public function tampilDokterLimit(){
    $sql="SELECT * FROM tuser,tspesialisasi WHERE role='dokter' AND tuser.spesialis = tspesialisasi.kode_spesialisasi LIMIT 0,4";
    $stmt = $this->pdo->query($sql);
    return $stmt;
  }


}
