<?php
require('medicinDB.php');

 $getFormDatabase="SELECT *FROM  medtable";
 $holdData = mysqli_query($connection,$getFormDatabase);

?>