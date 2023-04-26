

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">

 <input  value="<?php  echo (!empty($_POST['num1']))? $_POST['num1'] :"" ?>"
  type="text"
    name="num1" 
    required>
     <br>

  <select name="operator" placeholder= "SELECT OPERATOR" >
   <option  value="" >SELECT</option>
    <option value="Celsius to Kelvin">Celsius to Kelvin</option>
    <option value="Kelvin to Celsius">Kelvin to Celsius</option>
    <option value="Fahrenheit to Celsius">Fahrenheit to Celsius</option>
    <option value="Celsius to Fahrenheit">Celsius to Fahrenheit</option>
    <option value="Fahrenheit to Kelvin">Fahrenheit to Kelvin</option>
    <option value="Kelvin to Fahrenheit">Kelvin to Fahrenheit</option>
   
  </select>
  <br><br>
  <input type="submit" value="compute">
</form>


<?php
 
  $num1 =$_POST['num1'];

  
  echo "$_POST[ctk]";

  if(!empty($_POST)){
    if($_POST['operator'] == 'Celsius to Kelvin')
    {
      echo "output " . $num1  + 273.15;
    }
    if($_POST['operator'] == 'Kelvin to Celsius')
    {
      echo "output " . $num1 - 273.15;
    }
    if($_POST['operator'] == 'Fahrenheit to Celsius')
    {
      echo "output " . ($num1   -32) *(5/9);
    }
    if($_POST['operator'] == 'Celsius to Fahrenheit')
    {
      echo "output " . ($num1  * 9/5)+ 32  ;
    }
    if($_POST['operator'] == 'Fahrenheit to Kelvin')
    {
      echo "output " .( $num1   -32)* 1.8 + 273.15 ;
    }
    if($_POST['operator'] == 'Kelvin to Fahrenheit')
    {

      echo "output " .($num1 -273.15) * (9/5) + 32   ;
    }
  

  }
 

?>
</body>
</html>