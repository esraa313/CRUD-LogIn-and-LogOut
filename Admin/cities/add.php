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
$nameErr = $nameValid = "" ;
if (isset($_POST['submit'])) 
{ 
    // Validation of name
    if (empty($_POST["name"])) {
        $nameErr = "*Name of city is required";
      } else {
        $name = ($_POST["name"]);
		if (trim(strlen($name)) <= 3){
			$nameErr = "*Name of city has to be more than 3 letters";
		}else{
			$nameValid = "It's valid name of city" ;
			$sql = "INSERT INTO cities (`city.name`)
            VALUES ('$name')";
            insertion($sql);
		}
       
      }
     
	}
?>
<div class="box">
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']  ?>">
		<span class="text-center">Add New City</span>
		<span class="valid"> <?php echo $nameValid;?></span> 
         <span class="error"> <?php echo $nameErr;?></span> 
        <div class="input-container">
		<input type="text"  name="name" required=""/>
		<label>Name of city</label>	
         
	
	 </div>

		<button type="submit" class="btn submit" name="submit" value="submit">Save</button>
</form>	
</div> 