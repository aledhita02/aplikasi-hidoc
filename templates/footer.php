<?php
 
?>
<?php if(isset($_SESSION['role'] )){
  if ($_SESSION['role']=='dokter') {
    include 'footer_dokter.php';
  }

  if ($_SESSION['role']=='user') {
    include 'footer_user.php';
  }

  if ($_SESSION['role']=='admin') {
    include 'footer_admin.php';
  }
  
}else {
  include 'footer_user.php';
}

?>

