<?php 
require('./dt.php');
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
        
         <form  id="MyForm" action="create.php" method="post" >

           <label>
             fullname
            <input type= "text"  id="name" name="name" require>
           </label>
            
           <label>
       <h1> category items</h1>   <br>
            

            <input  type="radio"  id="items"     name="gender" value="bags">bags<br>
            <input  type="radio"  id="items"  name="gender" value="shoes">shoes<br>
            <input  type="radio"  id="items"   name="gender" value="pants">pants<br>
            <input  type="radio"  id="items"    name="gender" value="dress">dress<br>
            <input  type="radio"  id="items" name="gender" value="T-shirts">T-shirts<br>
           </label>

           <label>
           <h1>Brands Select</h1>  
            <select name="course" id="items" required>
          
            <option  id="brand"name="course"value="chanel" required>chanel</option>
            <option id="brand" name="course"value="gucci" required>gucci</option>
            <option id="brand"name="course"value="lv" required>lv</option>
            <option id="brand"name="course" value="bech" required>bech</option>
            <option id="brand"name="course" value="adidas" required>adidas</option>
             <option id="brand"name="course"value="levis" required>levis</option>
            </select>
           </label>
           <label>
            <br>
           <label>
            
            <input type= "submit" name="create" value="CREATE" >
           </label>
           
         </form>
        


         <table border >

            <tr>
                <th>ID</th>
                <th> name</th>
                <th>category</th>
                <th>Brands</th>
              
                <th>ACTION</th>
            </tr>
    <?php while ($value = mysqli_fetch_array($sql)) {?>
            <tr>
                <td><?php echo $value['id']?></td>
                <td><?php echo $value['name']?></td>
                <td><?php echo $value['gender']?></td>
                <td><?php echo $value['course']?></td>
               
                <td>
               
                 
                <form action="update.php" method="post">

                <input type="submit" name="edit"         value="EDIT">
                <input type="hidden" name="editId"       value="<?php echo $value['id']?>">
                <input type="hidden" name="edit_name"    value="<?php echo $value['name']?>">
                <input type="hidden" name="edit_gender"  value="<?php echo $value['gender']?>">
                <input type="hidden" name="course"       value="<?php echo $value['course']?>">
                <input type="hidden" name="date"         value="<?php echo $value['date']?>">
          
                </form>

                 <form action="delete.php" method="post">
                <input type="submit" name="removeData" value="DELETE">
                <input type="hidden" name="removeId" value="<?php echo $value['id']?>">
          
                </form>

                </td>
            </tr>
<?php }?>
            
         </table>
    </body>
    <script> 
  
    </script>
</html>