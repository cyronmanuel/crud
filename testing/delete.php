<?php
require('database.php');


if(isset($_POST['delete'])){
    $id = $_POST['deleteID'];


    $del = "DELETE  FROM test WHERE id ='$id'";
    $deleted = mysqli_query($con,$del);
   echo "asdasd";
    header('location:index.php');
}
?>