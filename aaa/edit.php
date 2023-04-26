<?php
require('medicinDB.php');



if(isset($_POST['edit'])){
    $upId = $_POST['upID'];
   $upImg = $_POST['upImg'];
    $upBrand = $_POST['upBrand'];
 /*    unlink("uploads/". $upImg);
    echo "deleted img";
    //header('location:medicin.php'); 
    }else{
    echo "not deleted"; */
   
      
       
  /*   echo     $upId , $upImg ,  $upBrand ; */
    
}
if(isset($_POST['update'])){
   
    $Id  =  $_POST['medId'];
    
    $upsBrand   =   $_POST['EditBrand'];
    $upImgs = $_POST['oldImg'];
    $upBrand = $_POST['upBrand'];
     unlink("uploads/".$upImgs); 
    echo "deleted img"; 
   echo  "asda" , $upImgs;

  /*  if(file_exists("uploads/").$upImgs){
    echo " deleted";
   } */
      
 
     

    if(isset($_FILES['File'])){
        $file_name =$_FILES['File']['name'];
        $tmp_name =$_FILES['File']['tmp_name'];
        $local = "uploads/";
      /*   echo "$tmp_name"; */ 
        $file_name = "IMG_" . time() . ".png";
        $local = "uploads/".$photo;
        move_uploaded_file( $tmp_name,$local.$file_name);
        
        
     
        // echo  $tmp_name, $local, $file_name;
        
        // header('location:medicin.php'); 
  /*   echo  $Id,  $upsImg , $upsBrand; */
    $updated    = "UPDATE medtable SET img ='$file_name', brandname ='$upsBrand' WHERE id='$Id'";
    $getUpdate  = mysqli_query($connection, $updated);
    }
   //  header('location: medicin.php');
   /*  if($getUpdate){
      
    } */
    if($getUpdate){
      
    }
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
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
      <div class="title box1"  >
    <h1>
       UPDATE Medicine
    </h1>
    </div>
     <div class="container-form box2" >
        <form action="edit.php" method="post" enctype="multipart/form-data">
            <img id="profile"  src="uploads/<?php echo  trim($upImg);?>" style="height: 100px;"  name="editImg"><br>
            <input type="hidden" value="<?php echo  trim($upImg) ?>" name="oldImg">
            <input type="button" onclick="chooseImage();" value="Choose Image" ></input>

 <input type="file" name="File" id="file"  style="display: none;" <?php echo $_POST['File'];?> ><br>
            <input type="text" name="EditBrand" value="<?php echo  $upBrand?>">
            <br>
         
            <input type= "hidden" name="medId" value="<?php echo $upId?>" >
            <input type="submit" name="update" value=" Update MED">
        </form>
        </div>
      
   
</div>



        <script >file.onchange = (e) => {
    let imageData = e.target.files[0];

    profile.src = URL.createObjectURL(imageData);
}
function chooseImage() {
    file.click();
}

</script>
    </body>
</html>