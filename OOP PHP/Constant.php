<?php

require_once "data/Person.php";

define("APPLICATION", "Belajar PHP OOP");
// hanya di php 7.4
const APP_VERSION = "1.0.0";

echo APPLICATION. PHP_EOL;
echo APP_VERSION .PHP_EOL;

// akses constant di class
echo Person::AUTHOR .PHP_EOL;

