<?php

$host = 'localhost';
$user = 'root';
$password = '';
$DataBase = 'cyron';

$con = mysqli_connect($host, $user, $password, $DataBase);

if(mysqli_connect_error()){
    echo "error connecting to database:<br>";
    echo "message".mysqli_connect_error(). "<br>";   
    }
?>