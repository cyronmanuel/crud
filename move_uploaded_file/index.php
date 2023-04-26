<?php 
if(isset($_FILES['file'])){
$file_name =$_FILES['file']['name'];
$tmp_name =$_FILES['file']['tmp_name'];
$local = "uploads/";
// echo "$tmp_name";

  
move_uploaded_file( $tmp_name,$local.$file_name );
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

    </head>
    <body>
      <fieldset> <h1>asdas</h1></fieldset>
        <form  method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" name="submit"  value="send">

            
        </form>
  
    </body>
</html>