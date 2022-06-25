<?php

require_once "data/Car.php";

use Data\{Avanza, Brio};


$car = new Brio();
$car->car = new Avanza();

$car->car->drive();
