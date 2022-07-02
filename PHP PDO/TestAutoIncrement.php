<?php


require_once __DIR__ . "/getConnection.php";

$connection = getConnection();

$connection->exec("INSERT INTO comments (email, comment) VALUES ('Rizki@gmail','Hi')");
$id = $connection->lastInsertId();

echo $id;
$connection = null;