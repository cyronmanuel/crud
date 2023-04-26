 <?php

    require('./createDT.php');



    if (isset($_POST['edit'])) {
        $editId = $_POST['editId'];
        $editFirst = $_POST['editFirst'];
        $editMiddle = $_POST['editMiddle'];
        $editLast = $_POST['editLast'];
        $editPassword = $_POST['editPassword'];
    }

     if(isset($_POST['update'])){
        $updateId = $_POST['updateId'];
        $updateFirst= $_POST['updateFirst'];
        $updateMiddle = $_POST['updateMiddle'];
        $updateLast = $_POST['updateLast'];
        $updatePassword = $_POST['updatePassword'];
   
    $queryUpdate = "UPDATE  cyron_data SET first = '$updateFirst', middle = '$updateMiddle',last= '$updateLast',password=' $updatePassword' WHERE  id = '$updateId '";
    $datUpdate = mysqli_query($con ,   $queryUpdate);
   
        echo "<script>alert('success updated')</script>";
        echo '<script> window.location.href = "/CYRON_PHP_PROJECT/Create_Account/index.php"</script>';
    }

   
    ?>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>update</title>
      <style>
        
      </style>

  </head>
  <body>

       <div> 
        <h1>UPDATE DATA</h1>
           <form action="/CYRON_PHP_PROJECT/Create_Account/update.php" method="post">
           
              <input  type="text"  name="updateFirst"  required value="<?php echo $editFirst ?>">  <br>
             
              <input type="text"     name="updateMiddle"   required value="<?php echo $editMiddle?>">
              <br>
              <input type="text"     name="updateLast"     required value="<?php echo $editLast ?>">
              <br>
              <input type="password" name="updatePassword" required value="<?php echo $editPassword ?>">
              <br>
              <input type="submit"   name="update" value="UPDATE"  >
              <input type="hidden"   name="updateId" value="<?php  echo $editId ?>"  >
            
           </form>
  
       </div>

     
  </body>
  </html>
