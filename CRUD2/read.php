<?php

require('./database.php');
$ser = $_POST['search'];
$sqlRead = "SELECT * FROM DATA   WHERE  name LIKE '%$ser%' OR last LIKE '%$ser%' OR gender LIKE '$ser%' ";
$read = mysqli_query($connection, $sqlRead);


?>