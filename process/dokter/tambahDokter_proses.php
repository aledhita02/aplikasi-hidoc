
<?php
    include '../../database/Dokter.php';
    $dktr = new Dokter;

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telepon'];
    $date = $_POST['date'];
    $jk = $_POST['jk'];
    $spesialis  = $_POST['spesialis'];
    $pass = $_POST['password'];

    // 
    // var_dump($jk);
    // var_dump($date);



    $passenkripsi = password_hash($pass, PASSWORD_BCRYPT);



    //gambar
    $sumber = $_FILES['foto']['tmp_name'];
    $namafile = $_FILES['foto']['name'];

    // var_dump($namafile);

    $ekstensiGambar = explode('.',$namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    $tujuan = "../../photos/".$namaFileBaru;  //untuk di upload
    $alamat ="photos/".$namaFileBaru;  //untuk di simpan
    $alamatkosong = "";
    //akhir gambar

    $filesize = $_FILES['foto']['size']; //ambil size gambar
    $sizemax = 2*1024*1024;   //2mb


    if ($dktr->checkEmail($email)== 1) {         //check email
      echo "<script>
                alert('Email Sudah Tersedia !');
                window.location = '../../index.php?p=tabel_dokter';
            </script>";
    }else{

      if ($filesize <= $sizemax) {
        $pecahfile = explode(".",$namafile);
        $ext = end($pecahfile);
        $ext = strtolower($ext);
        $extboleh = array("jpg","png","gif","jpeg");

        if (in_array($ext, $extboleh)) {

          $dktr->tambahDokter($nama,$email,$telp,$passenkripsi,$spesialis,$alamat,$date,$jk);

          move_uploaded_file($sumber,$tujuan);

          echo "<script>
                    alert('Data berhasil tambah !');
                    window.location = '../../index.php?p=tabel_dokter';
                </script>";
        }else {
          echo "<script>
                    alert('Data Gagal tambah !');
                    window.location = '../../index.php?p=tabel_dokter';
                </script>";
        }

      }else{
        echo "<script>
                  alert('Data Gagal tambah !');
                  window.location = '../../index.php?p=tabel_dokter';
              </script>";
      }





    }










 ?>
