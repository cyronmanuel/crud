<?php
require('database.php');


if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $date =$_POST['date'];
    $gender=$_POST['gender'];

$pushData = "INSERT INTO  test VALUES(id , '$name' , '$date','$gender')";
$pushDatas = mysqli_query($con,$pushData );
echo"inserted";
 header('location:index.php');
}
?>
