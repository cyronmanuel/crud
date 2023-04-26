<?php
 require("./createDT.php");


 if(isset($_POST['delete'])){
 $deleteId = $_POST['deleteId'];

$InsertDelete = "DELETE FROM cyron_data WHERE id= $deleteId " ;
$Getdelete = mysqli_query($con, $InsertDelete);
//   echo "<script>alert('success delete ')</script>";
     echo '<script> window.location.href = "/CYRON_PHP_PROJECT/Create_Account/index.php"</script>';
 }

?>