<?php

require_once "data/Programmer.php";


$company = new Company();

$company->programmer = new Programmer("Eko");
$company->programmer = new BackendProgrammer("Eko");
$company->programmer = new FrondednProgrammer("Rizki");


sayHelloProgrammer(new Programmer("Eko"));
sayHelloProgrammer(new BackendProgrammer("Eko"));
sayHelloProgrammer(new FrondednProgrammer("Eko"));