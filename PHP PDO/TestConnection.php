<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
    echo "Successfully connected to MySQL database!";

    // menutup koneksi
    $connection = null;
} catch (PDOException $exception) {
    echo "Connection error: " . $exception->getMessage(). PHP_EOL;
}