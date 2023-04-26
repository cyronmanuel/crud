<?php
require('database.php');
require('select.php');
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
        <form action="insert.php"  method="post" >
            <labe for="">
                name
                <input type="text" name="name">
            </labe>
            <br>
            <labe for="">
                date
                <input type="date" name="date">
            </labe>
            <br>
            <labe for="">
                gender
                <br>  <input type="radio" name="gender" value="male">male
                <br>  <input type="radio" name="gender" value="female">female
            </labe>
            <br>
            <br>
            <input type="submit" name="submit" value="submit">
        </form>

        <!-- table of  data  output  form data base -->
        <table border>
            <tr>
            <th>id</th>
            <th>name</th>
            <th>date</th>
            <th>gender</th>
            <th colspan="2">action</th>
            </tr>
            <?php while ($DATA = mysqli_fetch_array($selected)) {?>
                
      
            <tr>
                <td><?php echo $DATA['id']?></td>
                <td><?php echo $DATA['name']?></td>
                <td><?php echo $DATA['date']?></td>
                <td><?php echo $DATA['gender']?></td>
                 <!-- action delete and edit  -->
                 <td><form action="edit.php" method="post">
                <input type="submit" name="edit" value="edit">
                <input type="hidden" name="ID"value="<?php echo $DATA['id']?>">
                <input type="hidden" name="IDname" value="<?php echo $DATA['name']?>">
                <input type="hidden" name="IDdate"value="<?php echo $DATA['date']?>">
                <input type="hidden" name="IDgender"value="<?php echo $DATA['gender']?>">
                </form>
                </td> 
                <td><form action="delete.php" method="post">
                <input type="submit" name="delete" value="delete">
                <input type="hidden" name="deleteID"value="<?php echo $DATA['id']?>">
                </form>
                </td> 

            </tr>
            
            <?php   }?>
        </table>
    </body>
</html>