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

if ($row = $data->fetch()) {
    echo "Welcome, $row->username";
} else {
    echo "Login failed";
}




$connection = null;
