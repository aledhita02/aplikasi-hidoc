<?php
if(isset($_SESSION['role'])){
  if ($_SESSION['role'] == 'dokter') {
    include 'edit_profil.php';
  }

  if ($_SESSION['role'] == 'user') {
    include 'select_main_user.php';
  }

  if ($_SESSION['role'] == 'admin') {
    include 'select_main_admin.php';
  }

}else{
  include 'select_main_user.php';
}
