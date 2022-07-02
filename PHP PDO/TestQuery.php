<?php

require_once __DIR__. "/getConnection.php";

$connection = getConnection();

$sql = "SELECT * FROM customers";

$data = $connection->query($sql);

foreach ($data as $row) {
    echo "ID: {$row['id']}".PHP_EOL;
    echo "Name: {$row['name']}".PHP_EOL;
    echo "Email: {$row['email']}".PHP_EOL;
    echo "\n";
    // echo $row['id'] . " " . $row['name'] . " " . $row['email'] . "\n";
}

$connection = null;
