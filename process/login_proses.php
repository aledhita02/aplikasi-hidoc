<?php
    include '../database/User.php';
    $usr = new User;

    $email = $_POST['email'];
    $pass = $_POST['password'];

    $data = $usr->login($email);

    $cekpass = password_verify($pass,$data['pass_user']);

    if ($cekpass) {
      session_start();
      $_SESSION['login']=1;
      $_SESSION['id']=$data['id_user'];
      $_SESSION['pass']=$data['pass_user'];
      $_SESSION['nama']=$data['nama_user'];
      $_SESSION['role']=$data['role'];
      $_SESSION['email']=$data['email_user'];
      $_SESSION['foto']=$data['foto_user'];
      $_SESSION['telp']=$data['telp_user'];
      $_SESSION['tgl_lahir']=$data['tgl_lahir'];
      $_SESSION['jk']=$data['jk'];




      echo "<script>
                alert('Login Berhasil !');
                window.location = '../index.php';
            </script>";

    }else {
      echo "<script>
                alert('Login Gagal, Password tidak sesuai !');
                window.location = '../index.php';
            </script>";
    }


 ?>
