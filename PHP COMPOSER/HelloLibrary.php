<?php


require_once __DIR__ . '/vendor/autoload.php';
use rizkidardev\Belajar\Customer;

$customer = new Customer("Arina");
echo $customer->sayHello();