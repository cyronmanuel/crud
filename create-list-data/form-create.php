<?php

require('./database.php');

require('./form-index.php');



  if(isset($_POST['create'])){
    $name = $_POST['name'];
    $password = $_POST['password'];


    $queryCreate = "INSERT INTO create_user  VALUES (id, '$name', '$password')";
    $sqlCreate = mysqli_query($conn, $queryCreate);

    echo '<script>alert("successfully  created") </script>';
  header('location: form-index.php');
    
  }


?>