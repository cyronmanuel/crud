

<?php
require('./database.php');
require('./read.php');

if( $_GET['created'] == 'success'):
   
    echo '<div class="create ">
           <strong>Successfully!</strong> Created Data
          </div>';
endif;
if( $_GET['status'] == 'success'):
   
    echo '<div class="update ">
           <strong>Successfully!</strong> Updated your Data
          </div>';
endif;
if( $_GET['deleted'] == 'success'):
   
    echo '<div class="delete ">
           <strong>Successfully!</strong> Deleted your Data
          </div>';
endif;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Document</title>


    <style>
        .create{
            width: 250px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color:#DDFFDD;
            color: green;
            position: relative;
            top: 300px;
            margin:-12px;
            animation: myfirst 4.5s ease-in-out  1;
            padding:10px;
            text-align: center;
            opacity: 0;
            font-size:10px;
            border-radius: 5px;
            display: block;
}

@keyframes myfirst {
  0%  {   opacity: 1;}
  100% {  opacity: 0;}
}


.update{
            width: 250px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color:#D9EDF7;
            color: #31708F;
            position: relative;
            top: 300px;
            margin:-12px;
            animation: myfirst 4.5s ease-in-out  1;
            padding:10px;
            text-align: center;
            opacity: 0;
            font-size:10px;
            border-radius: 5px;
            display: block;
}

@keyframes myfirst {
  0%  {   opacity: 1;}
  100% {  opacity: 0;}
}


.delete{
            width: 250px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color:#F2DEDE;
            color: #A94442;
            position: relative;
            top: 300px;
            margin:-12px;
            animation: myfirst 4.5s ease-in-out  1;
            padding:10px;
            text-align: center;
            opacity: 0;
            font-size:10px;
            border-radius: 5px;
            display: block;
}

@keyframes myfirst {
  0%  {   opacity: 1;}
  100% {  opacity: 0;}
}
        
    </style>
</head>
<body>
    

    <form action="./create.php" method="post">
        <label >
            name of task
            <input type="text" name="name" required >
        </label>
        <label ><br>
            <br>
            description
            <textarea name="last"></textarea>
            <!-- <input type="text" name="last" required> -->
        </label>
        <br>
            <br>
        <label ><br>
        number of hours
            <select name="gender" >
            <option value="1">hour1</option>
            <option value="2">hour2</option>
            <option value="3">hour3</option>
            <option value="4">hour4</option>
            <option value="5">hour4</option>
            </select>
            <br>
            <br>
            <!-- <input type="radio"name="gender" value="male"required> -->
           
            </label>
             
            <label >
            
            name of the  person  IT 
              <br> <input  name="box[]" type="checkbox" value="teacher1">teacher1
              <br>  <input name="box[]"  type="checkbox"  value="teacher2">teacher2
              <br>  <input name="box[]" type="checkbox"  value="teacher3">teacher3
               

        </label>
            
       <br><br>
            <br>
        <label >
            
            <input type="submit"name="create" value="create" required>

        </label>

    </form>
   <form action="index.php" method="post">
       <input  type="text" name="search">
       <button type="submit">
           search
       </button>
     
   </form>
    <table border>
        <tr>
            
            <th>name of task</th>
            <th>description </th>
            <th>number of hours</th>
            <th> name of the  person  IT </th>
            <th colspan="6">Action</th>
        
        </tr>

        <?php  while  ($Get_from_sql = mysqli_fetch_array($read)) {?>
        <tr>
            
            <td><?php echo $Get_from_sql['name'] ?></td>
            <td><?php echo $Get_from_sql['last'] ?></td>
            <td><?php echo $Get_from_sql['gender'] ?></td>
            <td><?php echo $Get_from_sql['box'] ?></td>
            

            <td>
            <form action="edit.php" method="post">
                <input type="submit" name="edit" value="Edit">
                <input type="hidden" name="editId" value="<?php echo $Get_from_sql['id'] ?>">
                <input type="hidden" name="editName" value="<?php echo $Get_from_sql['name'] ?>">
                <input type="hidden" name="editLast" value="<?php echo $Get_from_sql['last'] ?>">
                <input type="hidden" name="editGender" value="<?php echo $Get_from_sql['gender'] ?>">
                <input type="hidden" name="editbox" value="<?php echo $Get_from_sql['box'] ?>">
                 
                </form>
            </td>
                <td>
                   
               
               
              
                
                <form action="delete.php" method="post">
                <input type="submit" name="delete" value="delete">
                <input type="hidden" name="deleteId" value="<?php echo $Get_from_sql['id'] ?>">
               </form>
            </td>
        </tr>
        <?php }?>
    </table>
</body>
</html>