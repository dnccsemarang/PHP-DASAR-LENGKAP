<?php

header("Application: Belajar PHP Web");
header("Author: Rizki Darmawan");


$client  = $_SERVER['HTTP_CLIENT_NAME'];

echo "Hello $client";