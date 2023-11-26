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
<div  class='title'>All Admins</div>
 <table id='customers'>
 <tr >
    <th >Id of Admin</th>
    <th>Name Of Admin</th>
    <th>Email Of Admin</th>
    <th>Mobile Of Admin</th>
  </tr>
<?php
   $sql = "SELECT * FROM admins ";
   $result =mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $idOfAdmin = 'AdminId';
    $nameOfAdmin ='adminName';
    $EmailOfAdmin ='adminEmail';
    $mobileOfAdmin ='adminMobile';
    while($row = mysqli_fetch_assoc($result) ){
        echo "
        
  <tr>
    <td> $row[$idOfAdmin]</td>
    <td> $row[$nameOfAdmin]</td>
    <td> $row[$EmailOfAdmin]</td>
    <td> $row[$mobileOfAdmin]</td>
    
  </tr> ";
    }}
?>
</table>