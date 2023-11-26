<?php
require '../../config.php' ;
require_once BLA.'inc/header.php' ;
require BL."Functions/validation.php" ;


?>
<style>
<?php include "../../assets/CSS/add.css";
include "../../assets/CSS/header.css";

?>

</style>

<?php

$nameErr = $emailErr = $passwordErr = $mobileValid ="";
$name = $email = $password = $mobile = "";
$nameValid = $emailValid = $passwordValid = $mobileErr ="";

if (isset($_POST['submit'])) 
{ 
    // Validation of name
    if (empty($_POST["name"])) {
        $nameErr = "*Name is required";
      } else {
        $name = test_input($_POST["name"]);
       
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
          $nameErr = "*Only letters and white space allowed";
        }
      }
      if(!empty($_POST["name"]) && preg_match("/^[a-zA-Z-' ]*$/",$name)){
        $nameValid = "It's valid name" ;
      }
         // Validation of mobile
    if (empty($_POST["mobile"])) {
      $mobileErr = "*Name is required";
    } else {
      $mobile = test_input($_POST["mobile"]);
      $mobileValid = "It's valid name" ;

    }
// Validation of email
      if (empty($_POST['email'])){
        $emailErr = "*Email is required " ;
      }else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "*Invalid email format";
          }
      }
      if(!empty($_POST["email"]) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailValid = "It's valid email" ;
      }
    //   Validation of password
      if (empty($_POST["password"])) {
        $passwordErr = "*password is required";
      } else {
        $password =test_input($_POST["password"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$password)) {
          $passwordErr = "*It's not strong password";
        }
      }
      if(!empty($_POST["password"]) && preg_match("/^[a-zA-Z-' ]*$/",$password)){
        $passwordValid = "It's valid password" ;
      }
      // Insert to Database
      if(!empty($_POST["name"]) && preg_match("/^[a-zA-Z-' ]*$/",$name)){
        if(!empty($_POST["email"]) && filter_var($email, FILTER_VALIDATE_EMAIL)){
          if(!empty($_POST["password"]) && preg_match("/^[a-zA-Z-' ]*$/",$password)){
            // $hashed_password = password_hash($password,PASSWORD_DEFAULT);
            
            $sql = "INSERT INTO admins (	adminName ,adminEmail , adminPassword , adminMobile	)
            VALUES ('$name', '$email', '$password' ,'$mobile' )";
            insertion($sql);
      
}
        }}}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>
<div class="box">
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']  ?>">
		<span class="text-center">Add new Admin</span>
        <div class="input-container">
		<input type="text"  name="name" required=""/>
		<label>Name</label>	
         <span class="valid"> <?php echo $nameValid;?></span> 
         <span class="error"> <?php echo $nameErr;?></span> 
	
	 </div>
   <div class="input-container">
		<input type="number"  name="mobile" required=""/>
		<label>Mobile-Number</label>	
         <span class="valid"> <?php echo $mobileValid;?></span> 
         <span class="error"> <?php echo $mobileErr;?></span> 
	
	 </div>
	<div class="input-container">
		<input   name="email" required=""/>
		<label>Email Address</label>
         <span class="valid"> <?php echo $emailValid;?></span> 
        <span class="error"> <?php echo $emailErr;?></span>		
	</div>
	<div class="input-container">		
		<input  name="password" required=""/>
		<label>Password</label>
         <span class="valid"> <?php echo $passwordValid;?></span> 
        <span class="error"> <?php echo $passwordErr;?></span>
	</div>
		<button type="submit" class="btn submit" name="submit" value="submit">submit</button>
</form>	
</div> 
