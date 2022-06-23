<?php

use LDAP\Result;

function input(string $info): string
{
    echo "$info : " ;
    $result = fgets(STDIN);
    return trim($result);
}