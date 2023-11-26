<?php
require '../../config.php' ;
require_once BLA.'inc/header.php' ;
require BL."Functions/validation.php" ;


?>
<style>
   
<?php 
include "../../assets/CSS/add.css";
include "../../assets/CSS/header.css";
include "../../assets/CSS/ViewAll.css";

?>
</style>
<div  class='title'>All Cities</div>
 <table id='customers'>
 <tr >
    <th >Id of City</th>
    <th>Name Of City</th>
    <th>Actions</th>
  </tr>
<?php
   $sql = "SELECT * FROM cities ";
   $result =mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $idOfCity = 'city.id';
    $nameOfCity ='city.name';
    while($row = mysqli_fetch_assoc($result) ){
        echo "
        
  <tr>
    <td> $row[$idOfCity]</td>
    <td> $row[$nameOfCity]</td>
    <td>
    <a href= " ?> <?php  echo BURLA.'cities/edit.php?id='.$row['city.id'] ?> <?php echo " <button  type='button' class=' btn buttonUpdate me-5' > Update <i class='bi bi-pencil'></i></button></a> 
    <a  href= " ?> <?php  echo BURLA.'cities/delete.php?id='.$row['city.id'] ?> <?php echo "  ><button type='button' class='btn  buttonDelete' data-id="?> <?php echo $row['city.id'] ?> <?php echo "> Delete <i class='bi bi-trash3-fill'></i></button></a> 
  </td>
  </tr> ";
    }}
?>
</table>