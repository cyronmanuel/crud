
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form action="inser_data.php" method="post">

 <input type="text" name="name"><br>
 <input type="number"name="age"><br>
 <input type="text"name="gender"><br><br>
 <input type="submit" ><br>


</form>


<?php
require_once "connect.php";
 
 

 if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    echo "<br>NAME :$name";
    echo "<br>AGE :$age";
    echo "<br>GENDER:$gender";
    
 }



  

 
?>
</body>
</html>
