<?php

// dot operator
$nama = "Rizki Darmawan";
echo "Nama : ".$nama . PHP_EOL ;
echo "Angka : ". 100 . PHP_EOL ;

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);
$valueFloat = (float)"100.5";
var_dump($valueFloat);

// mengakses karakter
$nama = "Rizki Darmawan";
echo $nama[0];
echo $nama[1];
echo $nama[2];
echo $nama[3]. "\n";

// Variabel parsing

$nama = "Rizki";
echo "Hello $nama \n";

// Curly brace
echo "Hello {$nama}'s Selamat Belajar";

