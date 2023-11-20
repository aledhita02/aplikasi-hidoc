<?php
  class Konsultasi{
    private $pdo;

    function __construct(){
      try{
        $this->pdo = new PDO('mysql:host=localhost;dbname=konsuldoc','root','');
      }catch(PDOException $e){
        echo $e;
      }

    }

    public function hitungKonsultasi($id){
        $sql="SELECT * FROM tkonsultasi WHERE id_pasien=?  ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $count = $stmt->rowCount();
        return $count;

    }

    public function hitungKonsultasiButtonDokter($id){
        $sql="SELECT * FROM tkonsultasi WHERE id_dokter=?  ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $count = $stmt->rowCount();
        return $count;

    }



    public function hitungKonsultasiFinish($id){
        $sql="SELECT * FROM tkonsultasi WHERE id_pasien=? AND status_konsul='finish' ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $count = $stmt->rowCount();
        return $count;

    }


    public function hitungKonsultasiDokter($id){
        $sql="SELECT * FROM tkonsultasi WHERE id_dokter=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $count = $stmt->rowCount();
        return $count;

    }

    public function hitungKonsultasiDokterPending($id){
        $sql="SELECT * FROM tkonsultasi WHERE id_dokter=? AND status_konsul='pending'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $count = $stmt->rowCount();
        return $count;

    }

    public function hitungKonsultasiDokterProcess($id){
        $sql="SELECT * FROM tkonsultasi WHERE id_dokter=? AND status_konsul='process'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $count = $stmt->rowCount();
        return $count;

    }

    public function hitungKonsultasiDokterFinish($id){
        $sql="SELECT * FROM tkonsultasi WHERE id_dokter=? AND status_konsul='finish'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $count = $stmt->rowCount();
        return $count;

    }

    public function tambahKonsultasi($id_dokter,$id_pasien,$topik,$date){
      $sql="INSERT INTO tkonsultasi (id_dokter,id_pasien,topik_konsul,konsultasi_date,status_konsul) VALUES(?,?,?,?,?)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute([
        $id_dokter,$id_pasien,$topik,$date,'pending'
      ]);
    }

      public function tampilKonsulDokter($id,$status){
    		$sql="SELECT * FROM tkonsultasi,tuser WHERE id_dokter='$id' AND status_konsul='$status' AND tkonsultasi.id_pasien = tuser.id_user";
    		$stmt = $this->pdo->query($sql);
    		return $stmt;
    	}

      public function tampilKonsulUser($id,$status){
    		$sql="SELECT * FROM tkonsultasi,tuser WHERE id_pasien='$id' AND status_konsul='$status' AND tkonsultasi.id_dokter = tuser.id_user";
    		$stmt = $this->pdo->query($sql);
    		return $stmt;
    	}

      public function tampilKonsulUserById($id){
    		$sql="SELECT * FROM tkonsultasi,tuser WHERE id_pasien='$id' AND status_konsul='process' AND tkonsultasi.id_dokter = tuser.id_user";
    		$stmt = $this->pdo->query($sql);
    		return $stmt;
    	}

      public function tampilKonsulUserByIdFinish($id){
    		$sql="SELECT * FROM tkonsultasi,tuser WHERE id_pasien='$id' AND status_konsul='finish' AND tkonsultasi.id_dokter = tuser.id_user";
    		$stmt = $this->pdo->query($sql);
    		return $stmt;
    	}

      public function tampilKonsulUserByIdSemua($id){
    		$sql="SELECT * FROM tkonsultasi,tuser WHERE id_pasien='$id'  AND tkonsultasi.id_dokter = tuser.id_user";
    		$stmt = $this->pdo->query($sql);
    		return $stmt;
    	}

      public function tampilKonsulDokterByIdPending($id){
    		$sql="SELECT * FROM tkonsultasi,tuser WHERE id_dokter='$id'AND status_konsul='pending' AND tkonsultasi.id_pasien = tuser.id_user";
    		$stmt = $this->pdo->query($sql);
    		return $stmt;
    	}

      public function tampilKonsulDokterByIdProcess($id){
    		$sql="SELECT * FROM tkonsultasi,tuser WHERE id_dokter='$id'AND status_konsul='process' AND tkonsultasi.id_pasien = tuser.id_user";
    		$stmt = $this->pdo->query($sql);
    		return $stmt;
    	}

      public function tampilKonsulDokterByIdFinish($id){
    		$sql="SELECT * FROM tkonsultasi,tuser WHERE id_dokter='$id'AND status_konsul='finish' AND tkonsultasi.id_pasien = tuser.id_user";
    		$stmt = $this->pdo->query($sql);
    		return $stmt;
    	}

      public function updateKonsultasi($id){
  			$sql = "UPDATE tkonsultasi SET status_konsul='process' WHERE id_konsultasi=?";
  			$stmt=$this->pdo->prepare($sql);
  			$stmt->execute([
  				$id
  			]);
  			return 1;

  		}

      public function updateKonsultasiFinish($id){
  			$sql = "UPDATE tkonsultasi SET status_konsul='finish' WHERE id_konsultasi=?";
  			$stmt=$this->pdo->prepare($sql);
  			$stmt->execute([
  				$id
  			]);
  			return 1;

  		}

      public function tampilKonsulById($id){
        $sql="SELECT * FROM tkonsultasi,tuser WHERE id_konsultasi=? AND tkonsultasi.id_pasien = tuser.id_user";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        $data = $stmt->fetch();
        return $data;
      }

      public function hapusKonsul($id){
        $sql = "DELETE FROM tkonsultasi WHERE id_konsultasi=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
      }




  }
