<?php
require '../config.php' ;
require_once BLA.'inc/header.php' ;
require BL."Functions/validation.php" ;

if(isset($_SESSION['adminName'])){
  SESSION_destroy();
  echo "<script>   window.location.href='http://localhost/medical_project/Admin/login.php'  </script>" ;
  }
else{
  echo "<script>   window.location.href='http://localhost/medical_project/Admin'  </script>" ;

}
?>