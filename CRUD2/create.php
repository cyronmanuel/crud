<?php
require('./database.php');





if(isset($_POST['create'])){
    $name = $_POST['name'];
    $last = $_POST['last'];
    $gender = $_POST['gender'];
    $box = $_POST['box'];


    $person =implode('<hr>',$box);

   
  



    $insert = "INSERT INTO DATA  VALUES (id,  '$name','$last','$gender',' $person' )";

    $getInsert = mysqli_query($connection, $insert);

    header('location:index.php?created=success');
   
}


?>