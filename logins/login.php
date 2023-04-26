<?php
session_start();



$max_attempts = 3;
$blocked_time = 20; // seconds

if(isset($_SESSION['login_attempts'])) {
    if($_SESSION['login_attempts'] >= $max_attempts) {

        if(time() - $_SESSION['login_time'] < $blocked_time) {
            $time_left = $blocked_time - (time() - $_SESSION['login_time']);
            echo "<h2 style='color:green;'>Maximum login attempts exceeded.</h2> Please try again after <span id='countdown'>$time_left</span> seconds.";
            exit;
        }

        unset($_SESSION['login_attempts']);
        unset($_SESSION['login_time']);
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password == '1234') {
        $_SESSION['logged_in'] = true;
        header("Location: home.php");
        exit;
    } else {

        if(!isset($_SESSION['login_attempts'])) {
            $_SESSION['login_attempts'] = 1;
            $_SESSION['login_time'] = Time();
            echo "Sorry invalid login You have 2 attempts left.";
        } else {
            $_SESSION['login_attempts']++;
            $attempts_left = $max_attempts - $_SESSION['login_attempts'];
            if($attempts_left > 0) {
                echo "<h2 style='color:green;'>Sorry invalid login.</h2> You have $attempts_left attempts left.";
            } else {
                echo "<h2 style='color:green;'>Maximum login attempts exceeded.</h2> Please try again after <span id='countdown'>$blocked_time</span> seconds.";
            }
        }
    }
}
?>

