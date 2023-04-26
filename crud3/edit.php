<?php 
   require('./database.php');


   if(isset($_POST['edit'])){
    $edit_id = $_POST['editId'];
    $edit_name = $_POST['editName'];
    $edit_last = $_POST['editLast'];
    $edit_gender = $_POST['editGender'];

   }

   if(isset($_POST['update'])){
    $update_id = $_POST['update_id'];
    $update_name = $_POST['up_name'];
    $update_last = $_POST['up_last'];
    $update_gender = $_POST['up_gender'];
 
    $updated = "UPDATE data33 SET name ='$update_name',  last ='$update_last', gender ='$update_gender' WHERE id=' $update_id '";
    $getUpdate = mysqli_query($connection, $updated);

  


    header('location: index.php');
   }


 ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="edit.php" method="post">
  <label >FIRST NAME 
  <input type="text" name="up_name" value="<?php  echo  $edit_name?>">
  </label><br>
     <label >Last NAME
  <input type="text"name="up_last" value="<?php  echo  $edit_last?>">
     </label><br
     

     <label >male
     <input type="radio"name="up_gender" value="male" value="<?php  echo  $edit_gender?>">
     </label>
     <label >female
     <input type="radio"name="up_gender" value="female" value="<?php  echo  $edit_gender?>">
     </label>
    <br>
     <input type="submit"name="update"  value="update">
     <input type="hidden" name="update_id"  value="<?php  echo  $edit_id?>">
      



     </form>
