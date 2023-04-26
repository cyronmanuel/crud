<?php 


require('tbase.php');
require('./select.php');

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
     
        <form action="insert.php" method="post">
            
        <label>
            full name
            <input type="text" name="name" required >
        </label>
        <label>
             
        <select required>
            select course:
            <option name="course" value="bsit">bsit</option>
            <option name="course"value="bsba" >bsba</option>
            <option name="course"value="bsed">bsed</option>
            
        </select>

        </label>
         <label>
            gender:
            <input type="radio" name="gender"  value="male">male
            <input type="radio" name="gender"  value="female">female
         </label>

    <label>date of birth
        <input type="date" name="date" required >
    </label>

        

       <input type="submit" name="create" value="SUBMIT">
        </form>
  
    </body>

    <table border>
          <tr>
            <th>ID</th>
            <th>COURSE</th>
            <th>DATE BIRTH</th>
            <th>FULL NAME</th>
             
            <th>ACTION</th> 
          </tr>

          <?php  while ($value= mysqli_fetch_array($getdata))?>
          <tr>
            <td><?php echo $value['id']?></td>
            <td><?php echo  $value['name']?></td>
            <td><?php echo  $value['course']?></td>
            <td><?php echo  $value['gender']?></td>
            <td><?php echo  $value['date']?></td>
           
          </tr>
    </table>
</html>