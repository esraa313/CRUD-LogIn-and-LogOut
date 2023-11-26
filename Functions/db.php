<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename="medical_serv21/11/2023";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$databasename);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

function insertion($sql){
    global $conn ;
    if (mysqli_query($conn,$sql)){
        // echo "new record";
    }
}

// Function to can login with admin

function getRow($table,$field,$value){
  global $conn ;
  $sql = "SELECT * FROM `$table` WHERE `$field` = '$value'";
  $result = mysqli_query($conn,$sql);
  if ($result){
    $rows = [];
    if(mysqli_num_rows($result) > 0 ){
      $rows[] = mysqli_fetch_assoc($result);
      return $rows[0];
    }else{
      return false ;
    }
  }
  

}
// $conn->close();
?>