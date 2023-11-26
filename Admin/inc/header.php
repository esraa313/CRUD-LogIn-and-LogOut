<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<style>
@import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css");
</style>
<?php

if(!isset($_SESSION['adminName'])){
header("location:".BURLA.'login.php');
} 
?> 
<style>
<?php include "../assets/CSS/header.css"
?>

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medical_serv21</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
</head>
<body>

<!-- NavBar -->
<nav class=" p-2 bg-dark text-light">
<div class="d-flex justify-content-between">
  <div class="d-flex justify-content-around">
    <img src=<?php echo BURL."assets/images/medical-logo.jpg"?> alt=""class="logo">


      <!-- Dropdown cities -->
     <div class="nav-item dropdown d-flex">
        <a class="ancore dropdown-toggle" href="#" id="navbarDropdown"  data-toggle="dropdown" >
          Cities
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo BURLA."cities/add.php"; ?>">Add</a>
          <a class="dropdown-item" href="<?php echo BURLA."cities/ViewAll.php"; ?>">View All</a>
          
        </div>
      </div> 

      <!-- Dropdown Admins -->
      <div class="nav-item dropdown">
        <a class="ancore dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admins
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href=" <?php echo BURLA.'admins/add.php' ; ?>">Add</a>
          <a class="dropdown-item" href="<?php echo BURLA."admins/ViewAll.php"; ?>">View All</a>
        
      </div> 


      </div>



<div class="nav-item dropdown">      
  <?php if(isset($_SESSION['adminName'])){ ?>
<!-- //  header("location:".BURL.'login.php'); -->

<a type="button" class="btn btn-info dropdown-toggle "  href="#" id="navbarDropdown"  data-toggle="dropdown"><?php echo $_SESSION['adminName']; ?> <i class="bi bi-person"></i></a>
<div class="dropdown-menu w-50"> 
 <a class="dropdown-item" href="<?php echo BURLA.'logout.php';  ?>">LogOut</a> </div> <?php
          
 } else { ?> 
  <a type="button" class="btn btn-info " > Login as Admin<i class="bi bi-door-open"></i></a>
  
<?php }

  ?>
        
       
</div>
</div>

</nav>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>