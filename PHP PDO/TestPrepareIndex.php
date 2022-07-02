<?php

require_once __DIR__. "/getConnection.php";

$connection = getConnection();

$username = "admin";
$password = "admin";
$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$data = $connection->prepare($sql);
// $data->bindParam(1, $username);  // bisa pakai ini atau array
// $data->bindParam(2, $password);
$data->execute([$username, $password]);
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
