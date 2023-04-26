<?php

$host = 'localhost';
$user = 'root';
$password = '';
$DTbase = 'php_data';



try {
   $connection = new PDO(
    "mysql:host= $host;
     dbname= $DTbase"
    , $user,
     $password );
     
   // set the PDO error mode to exception
   $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connected successfully";
} catch (PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
}
?>