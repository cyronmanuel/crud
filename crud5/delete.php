<?php 


require('./dt.php');

if(isset($_POST['removeData'])){
   $deleted = $_POST['removeId'];
   


   $bura ="DELETE FROM  data7  WHERE id = '$deleted'  ";

   $buratatat = mysqli_query($con,  $bura);
   header('location:main.php');
}


?>