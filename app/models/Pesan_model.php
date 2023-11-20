<?php
  class Pesan{
    private $pdo;

    function __construct(){
      try{
        $this->pdo = new PDO('mysql:host=localhost;dbname=konsuldoc','root','');
      }catch(PDOException $e){
        echo $e;
      }

    }

    public function tampilPesanByIdKonsul($id){
      $sql="SELECT * FROM tpesan,tuser WHERE id_konsultasi='$id' AND tpesan.id_user = tuser.id_user ORDER BY pesan_date";
      $stmt = $this->pdo->query($sql);
      return $stmt;
    }


    public function tambahPesan($konsul,$user,$isi,$date,$attach){
      $sql="INSERT INTO tpesan (id_konsultasi,id_user,pesan_teks,pesan_date,pesan_attachment) VALUES(?,?,?,?,?)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute([
        $konsul,$user,$isi,$date,$attach
      ]);
    }

  }
