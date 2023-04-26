<?php
require('medicinDB.php');


if(isset($_POST['addMed'])){
    $name = $_POST['brandname'];
    
    if(isset($_FILES['file'])){
        $file_name =$_FILES['file']['name'];
        $tmp_name =$_FILES['file']['tmp_name'];
        $local = "uploads/";
        echo "$tmp_name"; 
        $file_name = "IMG_" . time() . ".png";
        $local = "uploads/".$photo;
        move_uploaded_file( $tmp_name,$local.$file_name);
        }
        echo "$file_name";
        

$createValue = "INSERT INTO medtable VALUES(id,'$file_name','$name')";

$value = mysqli_query($connection,$createValue);

header('location: medicin.php');
}

?>