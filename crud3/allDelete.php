<?php
require_once "./database.php";


if(isset($_POST['allDelete']))
{
    $deleted = $_POST['allData'];
    $zip = implode(",",$deleted);
    $all_delete = " DELETE FROM  data33  WHERE id IN($zip) ";
    $deleted_all = mysqli_query($connection,  $all_delete );
    header('location:index.php');
}
?>