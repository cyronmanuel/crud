<?php

require('./database.php');

if (isset($_POST['edit'])){
    $edit_id = $_POST['editId'];
    $edit_name = $_POST['editName'];
    $edit_last = $_POST['editLast'];
    $edit_box = $_POST['editbox'];
    
   
    }

    if(isset($_POST['update'])){
    $update_id = $_POST['update_Id'];
    $update_name = $_POST['update_name'];
    $update_last = $_POST['update_last'];
    $update_gender = $_POST['update_gender'];
    $update_box = $_POST['boxup'];
    $pers =implode('<hr>',$update_box);

    $updated = "UPDATE  DATA SET  name = '$update_name', last ='$update_last', gender ='$update_gender',box='$pers' WHERE id =' $update_id '";
    $getUpdate = mysqli_query($connection, $updated);
 
   
    header('location: index.php?status=success');
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
  <h1>update</h1>


    <form action="edit.php" method="post">
        <label >
            name of task
            <input type="text"name="update_name" value="<?php echo $edit_name ?>" required >
        </label>
        <label ><br>
            <br>
            description
            <textarea name="update_last" value="<?php echo  $edit_last ?>">
            <?php echo $edit_last ?>
        </textarea>
           
        </label>
        <br>
            <br>
        <label ><br>
        number of hours
            <select name="update_gender">
            <option value="hour1">hour1</option>
            <option value="hour2">hour2</option>
            <option value="hour3">hour3</option>
            <option value="hour4">hour4</option>
            <option value="hour5">hour5</option>
            </select>
            <br>
            <br>
            <!-- <input type="radio"name="gender" value="male"required> -->
           
            </label>
             
            <label >
            
            name of the  person  IT 
              <br> <input  name="boxup[]" type="checkbox"   value="teacher1" >teacher1
              <br>  <input name="boxup[]" type="checkbox"  value="teacher2">teacher2
              <br>  <input name="boxup[]" type="checkbox"   value="teacher3">teacher3
               

        </label>
            
       <br><br>
            <br>
        <label >
            
        <input type="submit"name="update" value="update">
            <input type="hidden"name="update_Id" value="<?php echo $edit_id ?>" >

        </label>

    </form>
  
</body>
</html>