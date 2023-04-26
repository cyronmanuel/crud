  <?php

  require('./createDT.php');
  require('./read.php');
  
  ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
           

              margin-left:auto ;
              margin-right: auto;
        }

    </style>
</head>
<body>
     <div>
         <form action="/CYRON_PHP_PROJECT/Create_Account/create.php" method="post">
         
            <input 
             type="text"
             name="first"   
             placeholder="Enter first name required"
             required>  <br>
           
            <input value=" <?php echo (!empty($_POST['middle']))? $_POST['middle'] : "" ;?>" type="text" name="middle" required>
            <br>
            <input type="text" name="last" required>
            <br>
            <input type="password" name="password" required>
            <br>
          
             <div>
                birthdate
                 <input type="date" value="date">
             </div>

            <div>
                <h1>gender</h1>
                <label >male
                <input type="radio" name="gender" value="male">
                </label>
                <label >female
                <input type="radio" name="gender" value="female">
                </label>
            </div>

            <div>
              <h1> status</h1> 
                <label >Regural
                    <input type="radio" name="status" value="Regural">
                </label>
                <label >Irregural
                    <input type="radio" name="status" value="Irregural">
                </label>
            </div>

            <div>
              <h1> subjects</h1> 
                <label >
                    <input type="checkbox" name="subjects[]" value="math">
                </label>
                <label >english
                    <input type="checkbox" name="subjects[]" value="english">
                </label>
                <label >filipino
                    <input type="checkbox" name="subjects[]" value="filipino">
                </label>
                <label >p.e
                    <input type="checkbox" name="subjects[]" value="p.e">
                </label>
                <label >nstp
                    <input type="checkbox" name="subjects[]" value="nstp">
                </label>
                <label >oop
                    <input type="checkbox" name="subjects[]" value="oop">
                </label>
            </div>
            <input type="submit"  name="create" value="Submit" required>
         </form>

         <table  border="2">
            <tr  >
                <th colspan="7"><h1> Account Details</h1></th>
            </tr>
               <tr>
                 <th>ID</th>
                 <th>FIRST NAME</th>
                 <th>LAST NAME</th>
                 <th>address</th>
                 <th>date</th>
                 <th>gender</th>
                 <th>status</th>
                 <th>subjects</th>
                 <th colspan="2">ACTION</th>
                 
               </tr>
    <tbody>
               <?php   while ($item = mysqli_fetch_array($sqlData)){?>

               <tr>
                 <td><?php echo $item['id'] ?></td>
                 <td><?php echo $item['first'] ?></td>
                 <td><?php echo $item['middle'] ?></td>
                 <td><?php echo $item['last'] ?></td>
                 <td><?php echo $item['password'] ?></td>
                 <td><?php echo $item['first'] ?></td>
                 <td><?php echo $item['middle'] ?></td>
                 <td><?php echo $item['last'] ?></td>
                 <td><?php echo $item['password'] ?></td>
                  
                 
              
                <td >
                <form action="/CYRON_PHP_PROJECT/Create_Account/update.php" method="post">

               
                 <input type="hidden" name="editId" value="<?php echo $item['id'] ?>">
                 <input type="hidden" name="editFirst"  value="<?php echo $item['first'] ?>">
                 <input type="hidden" name="editMiddle" value="<?php echo $item['middle'] ?>">
                 <input type="hidden" name="editLast" value="<?php echo $item['last'] ?>">
                 <input type="hidden" name="editPassword" value="<?php echo $item['password'] ?>">
                 <input type="submit" name="edit" value="EDIT" >

                </form>
                </td>
                   <td>
                <form action="/CYRON_PHP_PROJECT/Create_Account/delete.php" method="post">

                <input type="submit" name="delete" value="DELETE">
                <input type="hidden" name="deleteId" value="<?php echo $item['id']?>">
                </form>
                </td>
               </tr>
               </tbody>     
             <?php  }?>
         </table>
     </div>
</body>
</html>