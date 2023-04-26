<?php 
require('./database.php');

if(isset($_POST['create'])){
    $name =$_POST['name'];
    $last =$_POST['last'];
    $gender =$_POST['gender'];
    $password =$_POST['password'];
   

    if(isset($_FILES['file'])){
        $file_name =$_FILES['file']['name'];
        $tmp_name =$_FILES['file']['tmp_name'];
        $local = "LOAD/";
         echo "$tmp_name";
        
          
        move_uploaded_file( $tmp_name,$local.$file_name );
        }
        
        
        
          
      
        

    



$insert = "INSERT INTO  data33  VALUES(id, '$name' ,'$last' ,'$gender','$file_name',md5('$password'))";
$getInsert = mysqli_query($connection , $insert );


  


 header('location: index.php');
}
?>