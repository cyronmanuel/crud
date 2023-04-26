<?php
require('medicinDB.php');
require('medicin_select.php');


?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style/dist/med.css">
       
    <link rel="stylesheet" href="aaa/style/aos-master/aos-master/dist/aos.css" />
    </head>
    <body>

    <div class="header"></div>
        <div class="form">
            
            <form action="medicin_create.php" method="post" enctype="multipart/form-data">
                <img id="profile" src="uploads/cot.png" style="height: 100px;"  name="img"><br>
                <button type="button" onclick="chooseImage();">Choose Image</button>

                <input type="file" name="file" id="file" style="display:none;" ><br>
                <input type="text" name="brandname"><br>
                <input type="submit" name="addMed" value="ADD MED">
            </form>


        </div>
        <div class="container-table">
            <div class="card-container" >
            <?php while ($brandData =mysqli_fetch_array($holdData)) {?>
                <div class="card" data-aos="zoom-out-down">
               
                    <div class="img">
                  

                    <img src="uploads/<?php echo $brandData['img']; ?>"
                     alt="medicine Image" width="130px" height="250px" >
                    </div>
                    <div class="med-name">
                    <p><?php echo$brandData['brandname'] ?></p>
                    <p>name brand second</p>
                    </div>
                    <div class="product-name">
                    <button class="addbutton" >
                        ADD TO CART
                    </button>
                    </div>
                    <div class="edit-delete">
                        <div class="botton">
                        <form action="delete.php" method="post">
                <input type="submit" name="removeData"value="DELETE">
                <input type="hidden" name="removeId" value="<?php echo $brandData['id']?>">
                <input type="hidden" name="img" value="<?php echo trim($brandData['img']); ?>">
            </form>
            <form action="edit.php" method="post"  enctype="multipart/form-data">
              
                <input type="hidden" name="upID" value="<?php echo $brandData['id']?>">
                <input type="hidden" name="upImg" value="<?php echo trim($brandData['img']);?>">
                <input type="hidden" name="upBrand" value="<?php echo $brandData['brandname'] ?>">
                <input type="submit" name="edit" value="EDIT">
             
            </form>
          
                        </div>
                     
                    </div>
                   
                </div>
                <?php   }?>
            </div>
           
        </div>
      
        <div class="footer">www.PediaGENERALTINIO.com</div>
    



     <!-- asdasdsdasdasdasdasdasd -->
    
    

     
   
     <script src="aaa/style/aos-master/aos-master/dist/aos.js"></script>
        <script >
        
        file.onchange = (e) => {
    let imageData = e.target.files[0];

    profile.src = URL.createObjectURL(imageData);
}
function chooseImage() {
    file.click();
}


</script>
<script>
    AOS.init({
        easing: 'ease-in-out-sine'
      });
</script>
    </body>
</html>
