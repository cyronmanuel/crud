<?php
require('./dt.php');



if(isset($_POST['create'])){
    

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $date = $_POST['date'];


    $insert = "INSERT INTO data7 VALUES(id ,'$name' , '$gender' , '$course' ,'$date')";
    $getData = mysqli_query($con ,$insert  );

 echo "mali";
    header('location:main.php');
}

?>