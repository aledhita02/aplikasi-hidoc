<?php
    session_start();
    include '../../database/User.php';
    $user = new User;

    $passlamadb = $_SESSION['pass'];

    $passlama = $_POST['passlama'];
    $passbaru1 = $_POST['passbaru1'];
    $passbaru2 = $_POST['passbaru2'];

    if ($passbaru1 == $passbaru2) {
      $cekpass = password_verify($passlama,$passlamadb);
      $passbaruenk = password_hash($passbaru1, PASSWORD_BCRYPT);

      if ($cekpass) {
        $user->updateUserPass($_SESSION['id'],$passbaruenk);
        $_SESSION['pass'] = $passbaruenk;

        echo "<script>
                  alert('Data berhasil diubah !');
                  window.location = '../../index.php?p=edit_profil';
              </script>";


      }else{
        echo "<script>
                  alert('Password lama salah !');
                  window.location = '../../index.php?p=edit_profil';
              </script>";
      }



    }else {
      echo "<script>
                alert('Password baru tidak cocok !');
                window.location = '../../index.php?p=edit_profil';
            </script>";

    }




 ?>
