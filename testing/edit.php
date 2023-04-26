<?php
require('database.php');


if(isset($_POST['edit'])){
    $currentID =$_POST['ID'];
    $currentName =$_POST['IDname'];
    $currentDate =$_POST['IDdate'];
    $currentGENDER =$_POST['IDgender'];

}
if(isset($_POST['update'])){
    $upID =$_POST['updateID'];
    $upName =$_POST['names'];
    $upDate =$_POST['dates'];
    $upGENDER =$_POST['genders'];
 
    $editDATA = "UPDATE  test SET  name='$upName',date='$upDate',gender='$upGENDER' WHERE id =' $upID'";
    $updated = mysqli_query($con, $editDATA );
    echo   $upID,   $upName, $upDate,$upGENDER;
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="edit.php"  method="post" >
            <labe for="">
                name
                <input type="text" name="names" value="<?php echo $currentName?>">
            </labe>
            <br>
            <labe for="">
                date
                <input type="date" name="dates" value="<?php echo $currentDate ?>">
            </labe>
            <br>
            <labe for="">
                gender
                <br>  <input type="radio" name="genders" value="male"  value="<?php echo   $currentGender   ?>">male
                <br>  <input type="radio" name="genders" value="female" value="<?php echo $currentGender  ?>">female
            </labe>
            <br>
            <br>
            <input type="submit" name="update" value="submit">
            <input type="hidden" name="updateID" value="<?php echo $currentID ?>">
        </form>

        <!-- table of  data  output  form data base -->
        
    </body>
</html>