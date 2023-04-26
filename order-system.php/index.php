<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDERING SYSTEM</title>

    <link rel="stylesheet" href="index.css">
</head>

<body>

    
    <div class="con">
   

        <div>
            <div>
                <form action="" method="post">

                <div class="container-input">
                    <input value="<?php echo (!empty($_POST['Quantity'])) ? $_POST['Quantity2'] : ""   ?>" style="width: 300px;" name="Quantity" type="number" placeholder="Enter Total Order Quantity " required>
                    <br><br>

                    <select name="flavor" style="font-weight: bold;
                     font-family:Sans-serif;" required>

                        <option name="" value="null">SELECT FLAVOR</option>

                        <option name="Classic " value="87">Classic Milk Tea</option>
                        <option name="Brown " value="75">Brown Sugar Milk Tea</option>
                        <option name="Wintermelon " value="85">Wintermelon Milk Tea</option>
                        <option name="Matcha " value="90">Matcha Milk Tea</option>
                        <option name="Taro " value="65">Taro Milk Tea</option>
                        <option name="Earl " value="95">Earl Gray Milk Tea</option>
                        <option name="Banana " value="92">Banana Milk Tea</option>
                        <option name="Yakult" value="86">Yakult</option>

                    </select>
                    </div>
                    <hr>
                    <div class="row-check-box ">

                        <div class="check-box" style="font-weight: bold;font-family:Sans-serif;">
                            <h3>add ons</h3>
                            <label>
                                <input type="checkbox" name="add[]" value="10">
                                Popping Boba
                            </label> <br>
                            <label>
                                <input type="checkbox" name="add[]" value="8">
                                Nata De Coco
                            </label> <br>
                            <label>
                                <input type="checkbox" name="add[]" value="12">
                                Grass Jelly
                            </label> <br>
                            <label>
                                <input type="checkbox" name="add[]" value="15">
                                Ice Cream
                            </label> <br>
                            <label>
                                <input type="checkbox" name="add[]" value="6">
                                Red Beans
                            </label> <br>
                            <label>
                                <input type="checkbox" name="add[]" value="6">
                                Tapioca Pearls
                            </label> <br>
                            <label>
                                <input type="checkbox" name="add[]" value="8">
                                Salty Cream
                            </label> <br>
                            <label>
                                <input type="checkbox" name="add[]" value="15">
                                Cheese Cream
                            </label> <br>

                            <label>
                                <input type="checkbox" name="add[]" value="10">
                                Coffee Jelly
                            </label> <br>
                            <label>
                                <input type="checkbox" name="add[]" value="20">
                                Pudding
                            </label> <br>

                        </div>

                        <br>
                        <div class="radio-box" style="font-weight: bold; font-family:Sans-serif;color:wheat"> SIZE <br><br>
                            <label>
                                <input type="radio" name="size" value="0">
                                SMALL
                            </label><br>
                            <label>
                                <input type="radio" name="size" value="10">
                                MEDIUM
                            </label> <br>
                            <label>
                                <input type="radio" name="size" value="25">
                                LARGE
                            </label> <br>
                            <label>

                                <input type="radio" name="size" value="40">
                                EXTRA LARGE
                            </label> <br>

                        </div>
                        <hr>
                        <div class="container-button">
                        <button style="font-weight:900;font-family:Sans-serif; " type="submit">ORDER</button>
                        </div>
                    </div>




                    <?php






                    if ($_POST) {


                        $get = [''];
                        $sum = 0;
                        $size = $_POST['size'];
                        foreach ($_POST['add'] as $adding) {
                            $sum += $adding;
                            $get = $adding;

                            echo '' . $get->getAttribute['id'] . '';
                        }



                        if ($_POST['flavor'] == "87") {

                            $flavor = "Classic : ";
                            $milk = '87';





                            echo '
              <table> 

              <tr>
              <td style="border: 1px solid black;"  colspan="5"><h1 style="text">price your order </h1></td>
              </tr>

              <tr>
              <th style="border: 1px solid black;">Quantity</th>
              <td style="border:1px solid black;">' . $_POST['Quantity'] . '</td>
              </tr>

              <tr>
              <th>FLAVOR</th>
              <td style="border:1px solid black;">' . $flavor, $_POST['flavor'] . '</td>
              </tr>

              <tr>
              <th>TOTAL ADD ONS</th>
              <td style="border:1px solid black;">' .  $sum . '</td>
              </tr>

              <th>SIZE</th>
              <td style="border:1px solid black;">' . $_POST['size'] . '</td>
              </tr>

              <th>TOTAL</th>
              <td style="border:2px solid gray;
              background:skyblue;
              font-weight:bold;
              font-family:Sans-serif;
              ">total :'
                                . ($milk + $size + $sum)
                                * $_POST['Quantity'] .
                                '</td>
              </tr>

              </table>';

                            echo '<script>alert("successfully  Order") </script>';
                        }
                        if ($_POST['flavor'] == '75') {
                            $flavor =  "Brown Sugar :  ";
                            $milk = '75';



                            echo '
             <table> 

             <tr>
             <td style="border: 1px solid black;"  colspan="5"><h1 style="text">price your order </h1></td>
             </tr>

             <tr>   
             <th style="border: 1px solid black;">quantity</th>
             <td style="border:1px solid black;">' . $_POST['Quantity'] . '</td>
             </tr>

             <tr>
             <th>FLAVOR</th>
             <td style="border:1px solid black;">' . $flavor, $_POST['flavor'] . '</td>
             </tr>

             <tr>
             <th>TOTAL ADD ONS</th>
             <td style="border:1px solid black;">' .  $sum . '</td>
             </tr>

             <th>SIZE</th>
             <td style="border:1px solid black;">' . $_POST['size'] . '</td>
             </tr>

             <th>TOTAL</th>
             <td style="border:2px solid gray;
             background:skyblue;
             font-weight:bold;
             font-family:Sans-serif;
             ">total :'
                                . ($milk + $size + $sum)
                                * $_POST['Quantity'] .
                                '</td>
             </tr>

             </table>';



                            echo '<script>alert("successfully  Order") </script>';
                        }
                        if ($_POST['flavor'] == '85') {
                            $flavor =  "Wintermelon :  ";
                            $milk = '85';



                            echo '
                 <table> 
   
                 <tr>
                 <td style="border: 1px solid black;"  colspan="5"><h1 style="text">price your order </h1></td>
                 </tr>
   
                 <tr>
                 <th style="border: 1px solid black;">quantity</th>
                 <td style="border:1px solid black;">' . $_POST['Quantity'] . '</td>
                 </tr>
   
                 <tr>
                 <th>FLAVOR</th>
                 <td style="border:1px solid black;">' . $flavor, $_POST['flavor'] . '</td>
                 </tr>
   
                 <tr>
                 <th>TOTAL ADD ONS</th>
                 <td style="border:1px solid black;">' .  $sum . '</td>
                 </tr>
   
                 <th>SIZE</th>
                 <td style="border:1px solid black;">' . $_POST['size'] . '</td>
                 </tr>
   
                 <th>TOTAL</th>
                 <td style="border:2px solid gray;
                 background:skyblue;
                 font-weight:bold;
                 font-family:Sans-serif;
                 ">total :'
                                . ($milk + $size + $sum)
                                * $_POST['Quantity'] .
                                '</td>
                 </tr>
                 </table>';


                            echo '<script>alert("successfully  Order") </script>';
                        }
                        if ($_POST['flavor'] == '90') {
                            $flavor =  "Matcha :  ";
                            $milk = '90';



                            echo '
                     <table> 
       
                     <tr>
                     <td style="border: 1px solid black;"  colspan="5"><h1 style="text">price your order </h1></td>
                     </tr>
       
                     <tr>
                     <th style="border: 1px solid black;">quantity</th>
                     <td style="border:1px solid black;">' . $_POST['Quantity'] . '</td>
                     </tr>
       
                     <tr>
                     <th>FLAVOR</th>
                     <td style="border:1px solid black;">' . $flavor, $_POST['flavor'] . '</td>
                     </tr>
       
                     <tr>
                     <th>TOTAL ADD ONS</th>
                     <td style="border:1px solid black;">' .  $sum . '</td>
                     </tr>
       
                     <th>SIZE</th>
                     <td style="border:1px solid black;">' . $_POST['size'] . '</td>
                     </tr>
       
                     <th>TOTAL</th>
                     <td style="border:2px solid gray;
                     background:skyblue;
                     font-weight:bold;
                     font-family:Sans-serif;
                     ">total :'
                                . ($milk + $size + $sum)
                                * $_POST['Quantity'] .
                                '</td>
                     </tr>
       
                     </table>';



                            echo '<script>alert("successfully  Order") </script>';
                        }

                        if ($_POST['flavor'] == '65') {
                            $flavor =  "Taro :  ";
                            $milk = '65';



                            echo '
                         <table> 
           
                         <tr>
                         <td style="border: 1px solid black;"  colspan="5"><h1 style="text">price your order </h1></td>
                         </tr>
           
                         <tr>
                         <th style="border: 1px solid black;">quantity</th>
                         <td style="border:1px solid black;">' . $_POST['Quantity'] . '</td>
                         </tr>
           
                         <tr>
                         <th>FLAVOR</th>
                         <td style="border:1px solid black;">' . $flavor, $_POST['flavor'] . '</td>
                         </tr>
           
                         <tr>
                         <th>TOTAL ADD ONS</th>
                         <td style="border:1px solid black;">' .  $sum . '</td>
                         </tr>
           
                         <th>SIZE</th>
                         <td style="border:1px solid black;">' . $_POST['size'] . '</td>
                         </tr>
           
                         <th>TOTAL</th>
                         <td style="border:2px solid gray;
                         background:skyblue;
                         font-weight:bold;
                         font-family:Sans-serif;
                         ">total :'
                                . ($milk + $size + $sum)
                                * $_POST['Quantity'] .
                                '</td>
                         </tr>
                         </table>';



                            echo '<script>alert("successfully  Order") </script>';
                        }
                        if ($_POST['flavor'] == '95') {
                            $flavor =  "Earl Gray :  ";
                            $milk = '95';



                            echo '
              <table> 

              <tr>
              <td style="border: 1px solid black;"  colspan="5"><h1 style="text">price your order </h1></td>
              </tr>

              <tr>
              <th style="border: 1px solid black;">quantity</th>
              <td style="border:1px solid black;">' . $_POST['Quantity'] . '</td>
              </tr>

              <tr>
              <th>FLAVOR</th>
              <td style="border:1px solid black;">' . $flavor, $_POST['flavor'] . '</td>
              </tr>

              <tr>
              <th>TOTAL ADD ONS</th>
              <td style="border:1px solid black;">' .  $sum . '</td>
              </tr>

              <th>SIZE</th>
              <td style="border:1px solid black;">' . $_POST['size'] . '</td>
              </tr>

              <th>TOTAL</th>
              <td style="border:2px solid gray;
              background:skyblue;
              font-weight:bold;
              font-family:Sans-serif;
              ">total :'
                                . ($milk + $size + $sum)
                                * $_POST['Quantity'] .
                                '</td>
              </tr>

              </table>';



                            echo '<script>alert("successfully  Order") </script>';
                        }


                        if ($_POST['flavor'] == '92') {
                            $flavor =  "Banana :  ";
                            $milk = '92';


                            echo '
                                <table> 
                  
                                <tr>
                                <td style="border: 1px solid black;"  colspan="5"><h1 style="text">price your order </h1></td>
                                </tr>
                  
                                <tr>
                                <th style="border: 1px solid black;">quantity</th>
                                <td style="border:1px solid black;">' . $_POST['Quantity'] . '</td>
                                </tr>
                  
                                <tr>
                                <th>FLAVOR</th>
                                <td style="border:1px solid black;">' . $flavor, $_POST['flavor'] . '</td>
                                </tr>
                  
                                <tr>
                                <th>TOTAL ADD ONS</th>
                                <td style="border:1px solid black;">' .  $sum . '</td>
                                </tr>
                  
                                <th>SIZE</th>
                                <td style="border:1px solid black;">' . $_POST['size'] . '</td>
                                </tr>
                  
                                <th>TOTAL</th>
                                <td style="border:2px solid gray;
                                background:skyblue;
                                font-weight:bold;
                                font-family:Sans-serif;
                                ">total :'
                                . ($milk + $size + $sum)
                                * $_POST['Quantity'] .
                                '</td>
                                </tr>

                  
                                </table>';




                            echo '<script>alert("successfully  Order") </script>';
                        }
                        if ($_POST['flavor'] == '86') {
                            $flavor =  "Yakult : ";
                            $milk = '86';



                            echo '
                                    <table> 
                      
                                    <tr>
                                    <td style="border: 1px solid black;"  colspan="5"><h1 style="text">price your order </h1></td>
                                    </tr>
                      
                                    <tr>
                                    <th style="border: 1px solid black;">quantity</th>
                                    <td style="border:1px solid black;">' . $_POST['Quantity'] . '</td>
                                    </tr>
                      
                                    <tr>
                                    <th>FLAVOR</th>
                                    <td style="border:1px solid black;">' . $flavor, $_POST['flavor'] . '</td>
                                    </tr>
                      
                                    <tr>
                                    <th>TOTAL ADD ONS</th>
                                    <td style="border:1px solid black;">' .  $sum . '</td>
                                    </tr>
                      
                                    <th>SIZE</th>
                                    <td style="border:1px solid black;">' . $_POST['size'] . '</td>
                                    </tr>
                      
                                    <th>TOTAL</th>
                                    <td style="border:2px solid gray;
                                    background:skyblue;
                                    font-weight:bold;
                                    font-family:Sans-serif;
                                    ">total :'
                                . ($milk + $size + $sum)
                                * $_POST['Quantity'] .
                                '</td>
                                    </tr>
                      
                                    </table>';

                            echo '<script>alert("successfully  Order") </script>';
                        }
                    }




                    ?>
                </form>

</body>

</html>