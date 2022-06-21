<?php

$values = Array(1, 2, 3, 4, 5);
var_dump($values);

$names = ["Eko", "Dedi", "Rizki"];
var_dump($names);


// operasi array
var_dump($names[0]);

$names[0] ="Budi";
var_dump($names);

unset($names[0]);
var_dump($names);

$names[] = "Darmawan";
var_dump($names);

var_dump(count($names));


// array sebagai map
// map adalah assosiative array dan key-nya adalah index dan value

$eko = array(
    "id" => 1,
    "name" => "Eko",
    "age" => 20,
    "address" => [
        "street" => "Jl. Raya",
        "city" => "Bandung",
        "province" => "Jawa Barat"
    ]
);

var_dump($eko);
var_dump($eko['name']);
var_dump($eko['address']['city']);


$budy = [
    "id" => 2,
    "name" => "Budi",
    "age" => 21,
    "addres" => [
        "street" => "Jl. Raya",
        "city" => "Bandung",
        "province" => "Jawa Barat"
    ]
];

var_dump($budy);
