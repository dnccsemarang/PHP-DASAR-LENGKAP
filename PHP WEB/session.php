<?php

session_start();


$error= "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'admin' && $password == 'admin') {
        $_SESSION['login'] = true;
        $_SESSION['username'] = "Rizki";
        header('Location: member.php');
        exit();
    } else {
        $error = "Login gagal";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($error) {
        echo "<h5>$error</h5>";
    }
    ?>
    <h1>Login</h1>
    <form action="" method="POST">
        <label for="">Username: 
            <input type="text" name="username" placeholder="username">
        </label>
        <br>
        <label for="">Password :
            <input type="password" name="password" placeholder="password">
        </label>

        <input type="submit" value="Login">
    </form>
</body>
</html>