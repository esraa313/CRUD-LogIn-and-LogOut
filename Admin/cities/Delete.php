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
if (isset($_GET['id'])){
    $id = $_GET['id'];
    mysqli_query($conn," DELETE FROM cities WHERE `city.id` ='$id'; ");
    ?>
    <script>
    window.location.href='http://localhost/medical_project/Admin/cities/ViewAll.php'   ;   
    alert("Deleted sucessfully")  ;
                    </script> 
                    <?php
}
?>