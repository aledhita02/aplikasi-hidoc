<?php
  session_start();

  // $_SESSION['login']=0;
  // $_SESSION['nama']=null;
  // $_SESSION['role']=null;

  session_unset();
  session_destroy();

  echo "<script>
            alert('Logout Berhasil !');
            window.location = '../index.php';
        </script>";


 ?>
