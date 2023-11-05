<?php

class Mahasiswa_model {

    private $table = 'mahasiswa';
    private $db;
    //koneksi ke database pd method construct
    public function __construct(){
        $this->db = new Database;
        
    }
    // private $mhs = 
    // [
    //     [
    //         "nama" => "Muhammad Zidan Ramadhan",
    //         "npm" => "51421686",
    //         "email" => "zidan.ramadhan102@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Cindy Hapsari",
    //         "npm" => "2215101032",
    //         "email" => "simp.detected@gmail.com",
    //         "jurusan" => "Ilmu Komputer"
    //     ],
    //     [
    //         "nama" => "Ea siapa",
    //         "npm" => "5142168--",
    //         "email" => "E@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ]
    //     ];

    public function getAllMahasiswa(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();

    }

    public function getMahasiswaById($id){
        //menyimpan data yang akan di bind, utk menghindari sqli. id nya bisa langsung pake param $id biar bisa sqli
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data){
        $query = "INSERT INTO mahasiswa VALUES ('', :nama, :npm, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('npm', $data['npm']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute(); 

        return $this->db->rowCount();
    }
    
    public function hapusDataMahasiswa($id){
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id',$id);
        
        $this->db->execute();
        
        return $this->db->rowCount();
    }
    
    public function ubahDataMahasiswa($data){
        $query = "UPDATE mahasiswa SET 
                        nama = :nama,
                        npm = :npm,
                        email = :email,
                        jurusan = :jurusan
                        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('npm', $data['npm']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute(); 

        return $this->db->rowCount();
    }

    public function cariDataMahasiswa(){
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword',"%$keyword%");
        return $this->db->resultSet();
    }

}