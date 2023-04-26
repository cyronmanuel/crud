<?php
  require('./createDt.php');
  
 

     if(isset($_POST['create'])){
        $first = $_POST['first'];
        $middle = $_POST['middle'];
        $last = $_POST['last'];
        $password = $_POST['password'];

    $InsertData = "INSERT INTO cyron_data  VALUES (id , '$first',  '$middle',    ' $last' ,  '$password')";
    $GetData = mysqli_query($con, $InsertData);
  // echo "<script>alert('success')</script>";
   echo '<script> window.location.href = "/CYRON_PHP_PROJECT/Create_Account/index.php"</script>';

     }
?>