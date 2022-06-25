<?php

require_once "data/Person.php";

$person = new Person("Rizki",null);
$person->name = "Eko";
$person->sayHello("Rizki");

$dar = new Person("Rizki",null);
$dar->name = "Dar";
$dar->sayHello(null);

$dar->info();
$person->info();