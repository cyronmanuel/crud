<?php 


require('./database.php');

if(isset($_POST['removeData'])){
   $deleted = $_POST['removeId'];
   


   $bura ="DELETE FROM  data33  WHERE id = '$deleted' OR  id IN('$zip_all_delete') ";

   $buratatat = mysqli_query($connection,  $bura);
   header('location: index.php');
}else {
    header('location: index.php');
}


?>