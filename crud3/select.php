<?php 
require('./database.php');





$ser = $_POST['search'];
$hookdata = "SELECT * FROM  data33  WHERE name LIKE '%$ser%' OR last LIKE '%$ser%' OR gender LIKE '$ser%'";

$getdata = mysqli_query($connection , $hookdata);


?>