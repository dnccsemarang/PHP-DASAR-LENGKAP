<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict  as Conflict1;
use function Helper\helpMe;
use const  Helper\APPLICATION;


$conflict = new Conflict1();
helpMe();
echo APPLICATION;