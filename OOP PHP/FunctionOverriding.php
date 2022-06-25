<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Rudi";
$manager->sayHello("Joko");

$vp = new VicePrecident();
// $vp->name = "Eko"; 
$vp->sayHello("Joko");
