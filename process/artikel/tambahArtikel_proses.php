<?php
    include '../../database/Artikel.php';
    $usr = new Artikel;


    date_default_timezone_set('Asia/Jakarta');

    $judul = $_POST['judul'];
    $artikel = $_POST['artikel'];
    $date = date("Y-m-d,h-i-s");

    $sumber = $_FILES['foto']['tmp_name'];
    $namafile = $_FILES['foto']['name'];
    $tujuan = "../../photos/".$namafile;  //untuk di upload
    $alamat ="photos/".$namafile;  //untuk di simpan

    $filesize = $_FILES['foto']['size']; //ambil size gambar
    $sizemax = 2*1024*1024;

    if ($filesize <= $sizemax) {

        $pecahfile = explode(".",$namafile);
        $ext = end($pecahfile);
        $ext = strtolower($ext);
        $extboleh = array("jpg","png","gif","jpeg");

        if (in_array($ext, $extboleh)) {
          $usr->tambahArtikel($judul,$artikel,$alamat,$date);
          move_uploaded_file($sumber,$tujuan);

          echo "<script>
					alert('Data berhasil tambah !');
    				window.location = '../../index.php?p=lihat_artikel';
        		</script>";
        }else {
          echo "<script>
                    alert('Data Gagal tambah !');
                    window.location = '../../index.php?p=tambah_artikel';
               </script>";
        }

    }else{
    echo "<script>
             alert('Data Gagal tambah !');
             window.location = '../../index.php?p=tambah_artikel';
          </script>";
    }

 ?>
