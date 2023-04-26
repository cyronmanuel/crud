
    <?php
   require('./form-read.php');
   require('./database.php');
  
      
        

        
    ?>
    
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      html body{
        margin: 0;
        padding: 0;
      }
      .main{
        height: 100vh;
        
        /*grid*/
        display: grid;
        grid-template-rows:auto 1fr;
        justify-items: center;
        row-gap: 20px;
      }
      .main .create-main{
          grid-row: 1/2;
          display: grid;
          grid-auto-rows: auto;
          row-gap: 5px;
      }
      .main .create-main h3{
        text-align:center;

      }
      .main .read-main{
        grid-row:2/3;
      }
      .main .read-main tr th{
        width: 200px;
        height: 0px;
        border:2px   solid black ;
        font-size: bold;

      }
      .main .read-main tr td{
        text-align:center ;
        height: 10px;
        border-bottom:1px   solid black ;
      
      }
      .main .read-main tr td :nth-child(4) {
        display:grid;
        grid-auto-flow:column;
      }



      

    </style>
</head>
<body>
    <div class="main">
        <form  class="create-main" action="/CYRON_PHP_PROJECT/create-list-data/form-create.php" method="post">
        <h3>CREATE USER</h3>
        <input  value="<?php  echo (!empty($_POST['name']))? $_POST['name'] :"" ?>" name="name" placeholder="Enter Your Name" required>
        <input value="<?php  echo (!empty($_POST['password']))? $_POST['password'] :"" ?>" type="password" name="password" placeholder="Enter Your Password" required>
        <input type="submit"  name="create"  value="CREATE" >
        </form>

        <table class="read-main">
           
         <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>PASSWORD</th>
            <th>ACTIONS</th>
         </tr>
          <?php  while  ($result = mysqli_fetch_array($sqlAccount)){?>

          
         <tr>
            <td><?php echo $result['id'] ?></td>
            <td><?php echo $result['name'] ?></td>
            <td><?php echo $result['password'] ?></td>
            <td>
            <form action="edit.php" method="post">
            <input type="hidden "name="edit_id" value=>
            </form>
            <form action="/CYRON_PHP_PROJECT/create-list-data/form-delete.php" method="post ">
            <input type="submit" name="delete" value="DELETE">
            <input type="hidden" name="deleteId" value="<?php echo $result['id']?>">
           </form>

            </td>  
       </tr>
     <?php  }?>
      
        </table>
    </div>

  
</body>
</html>
