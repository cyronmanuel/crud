<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database= 'create_data';

$conn = mysqli_connect($host, $user, $password, $database);

  if(mysqli_connect_error()){
  echo "error connecting to database:<br>";
  echo "message".mysqli_connect_error(). "<br>";   
  }

?>