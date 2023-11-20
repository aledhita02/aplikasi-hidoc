<?php
  include '../../database/Pesan.php';

  date_default_timezone_set('Asia/Jakarta');


  $isi = $_POST['pesan'];
  $konsul = $_POST['id_konsul'];
  $user = $_POST['id_user'];

  $date = date("Y-m-d,h-i-s");


  //gambar
  $sumber = $_FILES['attach']['tmp_name'];
  $namafile = $_FILES['attach']['name'];

  // var_dump($namafile);

  $ekstensiGambar = explode('.',$namafile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;


  $tujuan = "../../attachment/".$namaFileBaru;  //untuk di upload
  $alamat ="attachment/".$namaFileBaru;  //untuk di simpan
  $alamatkosong = "";
  //akhir gambar

  // var_dump($tujuan);

  $pesan = new Pesan;


  $filesize = $_FILES['attach']['size']; //ambil size gambar
  $sizemax = 10*1024*1024;   //2mb
  // cek apakah file ada?
  if ($namafile == "") {
    $pesan->tambahPesan($konsul,$user,$isi,$date,$alamatkosong);

    echo "<script>
              alert('Pesan terkirim !');
              window.location = '../../pages/select_chat_blank.php?id_konsul=".$konsul."';
          </script>";
  } else{
    if ($filesize <= $sizemax) {
      $pecahfile = explode(".",$namafile);
      $ext = end($pecahfile);
      $ext = strtolower($ext);
      $extboleh = array("jpg","png","gif","jpeg");
      $extboleh2 = array("mp3","mp4","vlv","avi","mpg","3gp","webm","mkv","gifv","wmv","3gpp");

      if (in_array($ext, $extboleh)) {

        // var_dump($sumber);  //photo
        // var_dump($tujuan);

        move_uploaded_file($sumber,$tujuan);


        $pesan->tambahPesan($konsul,$user,$isi,$date,$alamat);

        echo "<script>
                  alert('Pesan terkirim !');
                  window.location = '../../pages/select_chat_blank.php?id_konsul=".$konsul."';
              </script>";
      }//else if (in_array($ext, $extboleh2)) {

        // var_dump($sumber);  //video
        // var_dump($tujuan);


        // move_uploaded_file($sumber,$tujuan);
        //
        //
        // $pesan->tambahPesan($konsul,$user,$isi,$date,$alamat);
        //
        // echo "<script>
        //           alert('Pesan terkirim !');
        //           window.location = '../../pages/select_chat_blank.php?id_konsul=".$konsul."';
        //       </script>";
      //}
      else {
        echo "<script>
                  alert('Hanya berlaku gambar  !');
                  window.location = '../../pages/select_chat_blank.php?id_konsul=".$konsul."';
              </script>";
      }
    }else{
      echo "<script>
                alert('Ukuran terlalu besar    !');
                window.location = '../../pages/select_chat_blank.php?id_konsul=".$konsul."';
            </script>";
    }
  }











 ?>
