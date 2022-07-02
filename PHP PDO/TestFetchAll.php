<?php

require_once __DIR__. "/getConnection.php";

$connection = getConnection();

$sql = "SELECT * FROM customers";

$data = $connection->query($sql);
$customer = $data->fetchAll();
var_dump($customer);
$connection = null;
