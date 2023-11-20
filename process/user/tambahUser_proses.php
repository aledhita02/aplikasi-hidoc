<?php
    include '../../database/User.php';
    $usr = new User;

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telepon'];
    $pass = $_POST['password'];



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


    if ($usr->checkEmail($email)== 1) {         //check email
      echo "<script>
                alert('Email Sudah Tersedia !');
                window.location = '../../index.php';
            </script>";
    }else{

      if ($filesize <= $sizemax) {
        $pecahfile = explode(".",$namafile);
        $ext = end($pecahfile);
        $ext = strtolower($ext);
        $extboleh = array("jpg","png","gif","jpeg");

        if (in_array($ext, $extboleh)) {

          $usr->tambahUser($nama,$email,$telp,$passenkripsi,$alamat);

          move_uploaded_file($sumber,$tujuan);

          echo "<script>
        						alert('Data berhasil tambah !');
        						window.location = '../../index.php';
        				</script>";
        }else {
          echo "<script>
        						alert('File bukan berupa foto !');
        						window.location = '../../index.php';
        				</script>";
        }

      }else{
        echo "<script>
      						alert('File terlalu Besar !');
      						window.location = '../../index.php';
      				</script>";
      }





    }










 ?>
