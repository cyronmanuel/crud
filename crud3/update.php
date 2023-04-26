<?php 

   require('./database.php');

   if(isset($_POST['edit'])){
       $editId = $POST['editId'];
       $editName = $POST['editName'];
       $editLast = $POST['editLast'];
       $editGender = $POST['editGender'];

       

    
   }

   if(isset($_POST['up'])){
     $up_Id = $_POST['Id'];
     $up_Name = $_POST['upName'];
     $up_Last = $_POST['upLast'];
     $up_Gender = $_POST['upGender'];

     $updateData = " UPDATE data3 SET   name = '$up_Name',  last = '$up_Last' , gender = '$up_Gender'  WHERE id = '$up_Id' ";
     $upUp =  mysqli_query($connection, $updateData );
      header('location:index.php');
   }else {
    echo 'error';
    
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
    
 <form action="update.php" method="post" >
  <label >FIRST NAME  <br>
  <input type="text" name="upName" value="<?php echo $editName  ?>">
  </label><br>
     <label >Last NAME
  <input type="text" name="upLast" value="<?php echo $editLast ?>">
     </label><br
     

     <labe > male   
     <input type="radio" name="upGender" value="male" value="<?php echo $editGender  ?>">
     </labe>
     <label >female
     <input type="radio" name="upGender" value="female" value="<?php echo $editGender  ?>">
     </label>
    <br>
     <label>
     <input type="submit" name="up"  value="UPDATE">
     <input type="hidden" name="Id" value="<?php echo  $upId ?>">
     </label>



     </form>

 </body>
 </html>