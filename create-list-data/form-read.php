<?php
require('./database.php');

$queryAccount = "SELECT * FROM create_user";
$sqlAccount = mysqli_query($conn,  $queryAccount);
?>