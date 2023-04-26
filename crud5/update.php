<?php
  require('./dt.php');


  if(isset($_POST['edit'])){
    $edit_id=$_POST['editId'];
    $edit_name=$_POST['edit_name'];
    $edit_gender=$_POST['edit_gender'];
    $edit_course =$_POST['course'];
   
  }
 
  if(isset($_POST['update'])){
    $up_id = $_POST['id'];
    $up_name =$_POST['up_name'];
    $up_gender =$_POST['gender'];
    $up_course =$_POST['course'];
   
  
  $updatsa = " UPDATE data7 SET   name = '$up_name', gender ='$up_gender ', course='$up_course'   WHERE id = '$up_id' ";
  $upko =  mysqli_query($con, $updatsa );
 echo  $upko;
 echo   $updatsa;
 header('location:main.php');
  }
  
?>

 
<form action="update.php" method="post" >

<label>
  fullname
 <input type= "text" name="up_name" value="<?php echo $edit_name?>"require>
</label>
 
<label>
       <h1> category items</h1>   <br>
            

            <input type="radio"  id="bags"     name="gender" value="bags">bags<br>
            <input  type="radio" id="shoes"    name="gender" value="shoes">shoes<br>
            <input  type="radio" id="pants"    name="gender" value="pants">pants<br>
            <input  type="radio" id="dress"    name="gender" value="dress">dress<br>
            <input  type="radio" id="T-shirts" name="gender" value="T-shirts">T-shirts<br>
           </label>

           <label>
           <h1>Brands Select</h1>  
            <select name="course" required>
          
            <option name="course"value="chanel" required>chanel</option>
            <option name="course"value="gucci" required>gucci</option>
            <option name="course"value="lv" required>lv</option>
            <option name="course" value="bech" required>bech</option>
            <option name="course" value="adidas" required>adidas</option>
             <option name="course"value="levis" required>levis</option>
            </select>
           </label>
           <label>

 <input type= "submit" name="update" value="update" >
 <input type= "hidden" name="id" value="<?php echo   $edit_id?>" >
</label>

</form>

