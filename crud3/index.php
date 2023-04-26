<?php 
require('./database.php');
require('./select.php');



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>
<body>
     <form action="./create.php" method="post" enctype="multipart/form-data">

 <img id="profile" src="https://scontent.fcrk2-1.fna.fbcdn.net/v/t39.30808-6/324234429_1793761907689633_3901572551063616410_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeG0QcVes_M7TlrMfwcczUkk5LBceIvg7lvksFx4i-DuWwwMEuy7J-mhV09-jtg-N8Bz_9ebE2YPqiUvG4AtvogX&_nc_ohc=Yv09kX5EKdcAX8ITUvz&_nc_ht=scontent.fcrk2-1.fna&oh=00_AfC6WVJ-Yyc9A22llLe27Zg1HwqM88VR5Tia2UWrreL6VQ&oe=63F4F07A" style="height: 100px;" alt="">
 <button type="button" onclick="chooseImage();">Choose Image</button>
 <input type="file" name="file" id="file" style="display:none;" ><br>

 
  <label >FIRST NAME 
  <input type="text" name="name">
  </label><br>
     <label >Last NAME
  <input type="text"name="last">
     </label><br
     

     <label >male
     <input type="radio"name="gender" value="male">
     </label>
     <label >female
     <input type="radio"name="gender" value="female">
     </label>

   <label> password
     <input type="text" name="password"  >
     </label>
    <br>
     <input type="submit"name="create"  value="CREATE">



     </form>


    

   <form  action="index.php" method="post" >
     <input  onkeyup= "searchAjax" type="text" id="search"   name="search">
     <button >
         search
     </button>
   </form>
    <form action="allDelete.php" method="post">
     <table border="1">

     <tr>
        <th>
       
               <input type="checkbox" id="chkAll">
      
      </th>
        <th>ID</th>
        <th>FIRST_NAME</th>
        <th>LAST_NAME</th>
        <th>GENDER</th>
        <th>IMAGE</th>
        <th>PASSWORD</th>
        <th>ACTION</th>
     </tr>  
     <form action="index.php "method="post" enctype="multipart/form-data"></form>
   <?php  while ($values = mysqli_fetch_assoc($getdata))  {  ?>
     <tr> 
        <th> 
        <input type="checkbox" class="select-option" name="allData[]" 
            value="<?php echo $values['id']?>">
        </th>
      
        <td><?php echo $values['id']?></td>
        <td><?php echo $values['name']?></td>
        <td><?php echo $values['last']?></td>
        <td><?php echo $values['gender']?></td>
        <td>
        <img style="height: 75px;" src="LOAD/<?php echo $values['image']; ?>" alt="">

        </td>
        <td><?php echo $values['password']?></td>
        <td> 
       
        <form action="edit.php" method="post">
            <form action="" method="post">
                <input  type="submit" name="edit"        value="EDIT">
                <input type="hidden"  name="editId"       value="<?php echo $values['id']?>">
                <input type="hidden"  name="editName"     value="<?php echo $values['name']?>">
                <input type="hidden"  name="editLast"     value="<?php echo $values['last']?>">
                <input type="hidden"  name="editGender"   value="<?php echo $values['gender']?>">
                <input type="hidden"  name="editPassword" value="<?php echo $values['password']?>">
                </form>
            </form>
            <form action="delete.php" method="post">
                <input type="submit" name="removeData"value="DELETE">
                <input type="hidden" name="removeId"value="<?php echo $values['id']?>">
            </form>
            
        </td>


        

     </tr>
    
     <?php } ?>
    
     <tr>
        <td style="text-align: right;" colspan="1">
            <button type="submit" name="allDelete" >Delete Selected</button>
        </td>
        </tr>
      
     </table>


     </form>
     <script >
    const chkAll = document.querySelector("#chkAll");
    
const chkOptions =document.querySelectorAll(".select-option");
console.log(chkOptions);
function SelectAllChkbox() {
    const ischekced = chkxAll.checked;
    const chekced =chkclose.change;
    for(let i = 0 ; i < chkOptions.length; i++){
        chkOptions[i].checked =false;
    }

}chkAll.addEventListener("change", ()   => {
    Array.from(chkOptions).map((chkbx) =>
    {
        chkbx.checked =  chkAll.checked;
       
    }
    );   
});

file.onchange = (e) => {
    let imageData = e.target.files[0];

    profile.src = URL.createObjectURL(imageData);
}
function chooseImage() {
    file.click();
}




 
</script>
</body>
</html>