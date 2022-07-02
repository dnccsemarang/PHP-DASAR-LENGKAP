<?php

require_once __DIR__. "/getConnection.php";

$connection = getConnection();

$username = "admin";
$password = "admin";
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password ";
$data = $connection->prepare($sql);
$data->bindParam('username', $username);
$data->bindParam('password', $password);
$data->execute();
$success = false;
$find_user = null;

foreach($data as $row) {
    //
    $success = true;
    $find_user = $row['username'];   
}

if ($success) {
    echo "Welcome, $find_user";
} else {
    echo "Login failed";
}

$connection = null;



$connection = null;
