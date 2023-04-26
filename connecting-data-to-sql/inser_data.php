<?php 
require_once "index.php";
require_once "connect.php";
$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];


if($name == "" || $age == '' ||  $gender == "")
{
    echo "Please complete the form.";
}
else
{
    try {
        $set = $connection->prepare("INSERT INTO user_table (name, age  ,gender ) VALUES (:name, :age, :gender)");
        $set->execute($_POST);
    
        echo "<script>alert('successfully added data ')</script>";
    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}
// require_once "show.php";
?>