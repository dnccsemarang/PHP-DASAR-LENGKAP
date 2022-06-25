<?php

$array = [
    "firstName" => "Eko",
    "middleName" => "Dar",
    "lastName" => "Arina",
];

$object = (object)$array ;

var_dump($object);

echo "firstname $object->firstName" .PHP_EOL;
echo "middlename $object->middleName" .PHP_EOL;
echo "lastname $object->lastName" .PHP_EOL;


require_once "data/Person.php";

$person = new Person("Rizki","Semarang");

$arrayPerson = (array)$person;
var_dump($arrayPerson);