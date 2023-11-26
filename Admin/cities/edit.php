<?php
require '../../config.php' ;
require_once BLA.'inc/header.php' ;


?><style>
<?php include "../../assets/CSS/add.css";
include "../../assets/CSS/header.css";

?>
</style>

<?php
$nameErr = $nameValid = "" ;

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $row = getRow('cities','city.id',$_GET['id']);
            if($row){
                $cityId = $row['city.id'];
            }

      }else{
        ?>
        <script>

        window.location.href='http://localhost/medical_project/Admin/index.php'   ;    
           alert("*Name of city has to be more than 3 letters");
           
            </script>
            <?php
      }
     
	
?>
<div class="box">
	<form method="post" action="<?php  echo BURLA.'cities/update.php' ?>">
		<span class="text-center">Edit City</span>
        <div class="input-container">
		<input type="text"  name="name" class="mt-3" required="" value=" 
        <?php echo $row['city.name'];  ?> "/>

        <input type="hidden" name="cityId" class="mt-3" required="" value=" <?php echo $cityId;  ?> "/>

		<label>Name of city</label>	
         <span class="valid"> <?php echo $nameValid;?></span> 
         <span class="error"> <?php echo $nameErr;?></span> 
	
	 </div>

		<button type="submit" class="btn submit" name="submit" value="submit">Save</button>
</form>	
</div> 