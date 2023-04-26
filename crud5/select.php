<?php
require('./dt.php');



$data = "SELECT * ,FLOOR(DATEDIFF(CURDATE(),date)/365)AS age FROM data7 " ;
$sql = mysqli_query($con, $data);

?>