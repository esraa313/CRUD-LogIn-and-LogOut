 <?php
require '../config.php' ;
// require_once BLA.'inc/header.php' ;
require BL."Functions/validation.php" ;

if(isset($_SESSION['adminName'])){
  header("location:".BURL.'index.php');
  }
?>


<style>
<?php include "../assets/CSS/add.css" ;
// include "../assets/CSS/header.css";

?>
 .box{
	
	margin-top: 6%;}
</style>

<?php

$dataValid = $dataErr = '';

if (isset($_POST['submit'])) 
{ 
  $email = $_POST["email"] ;

  $password = $_POST["password"] ;

       // Check if the login email and password are right or not
       
        if(!empty($_POST["email"]) && !empty($_POST["password"])){
          $sql = "SELECT * FROM admins WHERE adminEmail = '$email' and adminPassword = '$password'";
          $result = mysqli_query($conn,$sql);
         
            $row = mysqli_fetch_assoc($result);
          
          if($row > 0){
            $dataValid = "Welcome ".$row['adminName']." .. you are logged in as Admin" ;
            $_SESSION['adminName'] = $row['adminName'];
            $_SESSION['adminId'] = $row['AdminId'];
            $_SESSION['adminEmail'] = $row['adminEmail'];

           echo "<script>   window.location.href='http://localhost/medical_project/Admin/index.php'  </script>" ;
            
          }else{
            $dataErr = "*Data isn't correct .. please try again" ;
          }
      
}}
    

      ?>
<div class="box">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
<span class="text-center">Login</span>
<span class="valid"> <?php echo $dataValid;?></span> 
<span class="error"> <?php echo $dataErr;?></span> 
<br>
<br>

<div class="input-container">
    <input   name="email" required=""/>
    <label>Email Address</label>
</div>
<div class="input-container">		
    <input  name="password" required="" type="password"/>
    <label>Password</label>
</div>
    <button type="submit" class="btn submit" name="submit" value="submit">submit</button>
</form>	
</div>  