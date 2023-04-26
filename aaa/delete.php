<?php
require('medicinDB.php');

if(isset($_POST['removeData'])){
    $deleted =$_POST['removeId'];
    $deleteIMG =$_POST['img'];



    $deletes ="DELETE FROM medtable WHERE id = '$deleted' ";
    $removed = mysqli_query($connection, $deletes);
    if($removed){
        unlink("uploads/".$_POST['img']);
        echo "deleted img";
        header('location:medicin.php'); 
        }else{
        echo "not deleted";
    }
}

      /*  $folder_path ="uploads"; */
// List of name of files inside
// // specified folder
// $files = glob($folder_path.'/*'); 
// // Deleting all the files in the list
// foreach($files as $file) {
//     if(is_file($f    ile)) 
    
//         // Delete the given file
//         unlink($file); 
//         header('location:medicin.php'); 
// }
//  /*     header('location:medicin.php'); 
?>