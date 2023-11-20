<?php
  include '../../database/Artikel.php';
  $user = new Artikel;



  $id = $_POST['id'];
  $judul = $_POST['judul'];
  $artikel = $_POST['artikel'];
  $fotolama = $_POST['fotolama'];

  $sumber = $_FILES['foto']['tmp_name'];
  $namafile = $_FILES['foto']['name'];
  $tujuan = "../../photos/".$namafile;  //untuk di upload
  $alamat ="photos/".$namafile;  //untuk di simpan


  $filesize = $_FILES['foto']['size']; //ambil size gambar
  $sizemax = 2*1024*1024;   //2mb

  if($_FILES['foto']['name']!=null){

    if ($filesize <= $sizemax) {
      $pecahfile = explode(".",$namafile);
      $ext = end($pecahfile);
      $ext = strtolower($ext);
      $extboleh = array("jpg","png","gif","jpeg");

      if (in_array($ext, $extboleh)) {

        $user->updateArtikel($id,$judul,$artikel,$alamat);
        unlink("../../".$fotolama);   //hapus foto
        move_uploaded_file($sumber,$tujuan);

        echo "<script>
                  alert('Data berhasil diubah  !');
                  window.location = '../../index.php?p=lihat_artikel';
              </script>";
      }else {
        echo "<script>
                  alert('File tidak sesuai ekstensi!');
                  window.location = '../../index.php?p=edit_artikel&id=".$id."';
              </script>";
      }

    }else{
      echo "<script>
                alert('File size melebihi ketentuan!');
                window.location = '../../index.php?p=edit_artikel&id=".$id."';
            </script>";

    }
}
else {


  $user->updateArtikel2($id,$judul,$artikel);
  echo "<script>
                  alert('Data berhasil diubah tanpa foto !');
                  window.location = '../../index.php?p=lihat_artikel';
              </script>";
}

 ?>
