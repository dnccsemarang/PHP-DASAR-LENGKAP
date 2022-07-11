<?php


require_once __DIR__ . '/vendor/autoload.php';
use ProgrammerZamanNow\Data\People;

$people = new People("Rizki Darmawan");

echo $people->sayHello("Andre").  PHP_EOL;
