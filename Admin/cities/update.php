<?php
require '../../config.php' ;
require_once BLA.'inc/header.php' ;



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
    $name = ($_POST["name"]);
    $cityId = $_POST["cityId"];

    // Validation of name
    if (empty($_POST["name"])) {
        $nameErr = "*Name of city is required";
      } else {
		if (trim(strlen($name)) <= 3){
			$nameErr = "*Name of city has to be more than 3 letters";
		}else{
			$nameValid = "It's valid name of city" ;
            $row = getRow('cities','city.id',  $cityId);
            if($row){
                $sql = "UPDATE cities SET `city.name`=' $name ' WHERE `city.id`='$cityId ' ";
                mysqli_query($conn,$sql);
                ?> <script>
        window.location.href='http://localhost/medical_project/Admin/cities/ViewAll.php'   ;   
        // alert("Updated sucessfully")  ;
                        </script> 
                        <?php
            }
			
		}
       
      }
     
	}
?>


       