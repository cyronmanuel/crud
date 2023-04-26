<?php
session_start();

if(!empty($_SESSION['logged_in'])) {
    die(header("Location: home.php"));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <h1>Login here:</h1>
    <form action="login.php" method="POST">
        <label for="">Enter username: 
            <input type="text" name="username">
        </label><br>
        <label for="">
            Enter password:
            <input type="password" name="password">
        </label><br>
        <hr>
        <button type="submit">Login</button>
    </form>
</body>
</html>