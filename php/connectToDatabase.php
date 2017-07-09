<?php
 function connect(){
  $serverName = "localhost";
  $username = "lms-user";
  $password = "lmstestdb1";
  $database = "LMS";

  $conn = new mysqli($serverName, $username, $password, $database);
 
  if($conn->connect_error){
    die("A fatal error occured. Please try again. If error perists, contact system Admin");
  }
  else{
    return $conn;
  }
 }

?>
