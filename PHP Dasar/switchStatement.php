<?php

// switch statement
$nilai = "B";
switch($nilai) {
    case "A":
        echo "Nilai anda A";
        break;
    case "B":
        echo "Nilai anda B";
        break;
    case "C":
        echo "Nilai anda C";
        break;
    case "D":
        echo "Nilai anda D";
        break;
    default :
        echo "Nilai anda E";
        break;
}

echo "\n";
// sintak alternatif

switch($nilai) :
    case "A":
        echo "Nilai anda A";
        break;
    case "B":
        echo "Nilai anda B";
        break;
    case "C":
        echo "Nilai anda C";
        break;
    case "D":
        echo "Nilai anda D";
        break;
    default :
        echo "Nilai anda E";
        break;
endswitch;