<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript">
$(document).ready(function () {

    //called when key is pressed in textbox
    $("#number").keypress(function (e) {
     //if the letter is not digit then display error and don\'t type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
               return false;
    }
    });
});
</script>

<form action="converter.php" method="post">
 <input type="text" name="number" id="number">
 <select name="choose">
        <option>Choose</option>
        <option value="meter" id="meter">Meter</option>
        <option value="cm" id="cm">Cm</option>
        <option value="foot" id="fot">Fot</option>
        <option value="inches" id="tum">Tum</option>
<input type="submit" value="Convert!">
</form>
<?php    
$number = isset($_POST['number']) ? $_POST['number'] : 0;
$choose = isset($_POST['choose']) ? $_POST['choose'] : '';

switch ($choose)
{
case 'meter':
    $cm      = $number * 100;
    $foot    = $number * 3.2808;
    $inches  = $number * 39.370;
    $Answer  = 'Meters: '.$number.'<br />'.
               'Cm: '.$cm.'<br />'.
               'Foot: '.$foot.'<br />'.
               'Inches: '.$inches;

break;

case 'cm':
    $meter   = $number / 100;
    $foot    = $number * 0.032808;
    $inches  = $number * 0.39370;
    $Answer  = 'Cm: '.$cm.'<br />'.
               'Meters: '.$number.'<br />'.            
               'Foot: '.$foot.'<br />'.
               'Inches: '.$inches;
break;

case 'foot':
    $meter   = $number / 3.2808;
    $cm      = $number / 0.032808;
    $inches  = $number * 12.000;
    $Answer  = 'Foot: '.$foot.'<br />'.
               'Meters: '.$number.'<br />'.
               'Cm: '.$cm.'<br />'.            
               'Inches: '.$inches;
break;

case 'inches':
    $meter   = $number / 39.370;
    $cm      = $number / 0.39370;
    $foot    = $number / 12.000;
    $Answer  = 'Inches: '.$inches.'<br />'.
               'Foot: '.$foot.'<br />'.
               'Meters: '.$number.'<br />'.
               'Cm: '.$cm;
break;
default:
    $Answer  = '';
break;
}

echo $Answer;
?>
