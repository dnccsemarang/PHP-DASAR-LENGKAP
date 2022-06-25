<?php

require_once "data/Person.php";

$person = new Person("Rizki",null);
$person->name = "Rizki";
$person->address = "Semarang";
$person->country = "Jerman";

var_dump($person);

echo "Name : $person->name". PHP_EOL;
echo "Address : $person->address". PHP_EOL;
echo "Country : $person->country". PHP_EOL;

$person2 = new Person("Rizki",null);
$person2->name = "Budi";
$person2->address = null;
// $person2->country = "indonesia";

var_dump($person2);

// error
// $person2->name = [];
