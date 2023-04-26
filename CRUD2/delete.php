<?php
require('./database.php');

if(isset($_POST['delete'])){
    $deleteId = $_POST['deleteId'];


    $removeDate = "DELETE FROM  DATA  WHERE id= '$deleteId '";
    $deleted = mysqli_query($connection,  $removeDate );


   

    // echo '<script> window.location.href = "index.php"</script>';
  
    header('location: index.php?deleted=success');
}

?>