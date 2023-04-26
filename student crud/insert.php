<?php 

 require('./tbase.php');



 if(isset($_POST['create'])){
    
    $name=$_POST['name'];
    $course =$_POST['course'];
    $gender =$_POST['gender'];
    $date =$_POST['date'];
    

    $createData = "INSERT INTO crud66 VALUES(id, '$name', '$course' , '$gender', '$date')";
    $createGET = mysqli_query($con , $createData);

    header('location:index.php');
 }


?>