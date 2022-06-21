<?php

$name = "Rizki";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";
echo "Age : ";
echo $age;
echo "\n";


// check is null
echo "Is Name null";
var_dump(is_null($name)) ;



// unset variabel
$contoh = "Eko";
unset($contoh);
echo $contoh;


// isset untuk mengecek variabel
var_dump(isset($contoh));