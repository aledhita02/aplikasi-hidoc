<?php
  include '../../database/User.php';
  $user = new User;



  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $telp = $_POST['telepon'];
  $passlama = $_POST['passwordlama'];
  $passlamadb = $_POST['passlamadb'];
  $passbaru = $_POST['passwordbaru'];
  $fotolama = $_POST['fotolama'];



  $passenkripsi = password_hash($passbaru, PASSWORD_BCRYPT);


  $sumber = $_FILES['foto']['tmp_name'];
  $namafile = $_FILES['foto']['name'];
  $tujuan = "../../photos/".$namafile;  //untuk di upload
  $alamat ="photos/".$namafile;  //untuk di simpan



  $filesize = $_FILES['foto']['size']; //ambil size gambar
  $sizemax = 2*1024*1024;   //2mb

  $cekpass = password_verify($passlama,$passlamadb);
  if ($cekpass) {


    if ($filesize <= $sizemax) {
      $pecahfile = explode(".",$namafile);
      $ext = end($pecahfile);
      $ext = strtolower($ext);
      $extboleh = array("jpg","png","gif","jpeg");

      if (in_array($ext, $extboleh)) {

        $user->updateUser($id,$nama,$telp,$passenkripsi,$alamat);
        unlink("../../".$fotolama);   //hapus foto
        move_uploaded_file($sumber,$tujuan);

        echo "<script>
                  alert('Data berhasil tambah !');
                  window.location = '../../pages/lihatUser.php';
              </script>";
      }else {
        echo "<script>
                  alert('File tidak sesuai ekstensi!');
                  window.location = '../../pages/ubahUser.php?id=".$id."';
              </script>";
      }

    }else{
      echo "<script>
                alert('File size melebihi ketentuan!');
                window.location = '../../pages/ubahUser.php?id=".$id."';
            </script>";

    }

  }else{
    echo "<script>
              alert('Password lama tidak sesuai!');
              window.location = '../../pages/ubahUser.php?id=".$id."';
          </script>";

  }






 ?>
