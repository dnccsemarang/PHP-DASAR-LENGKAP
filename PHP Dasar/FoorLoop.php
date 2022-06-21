<?php

// perulangan tanpa henti

// for(; ;){
//     echo "Hello World! \n";
// }

// $counter = 1;

// for (; $counter <= 10;) {
//     echo "Hello World! ke-$counter \n";
//     $counter++;
// }

// for ($counter = 1; $counter <= 10;) {
//     echo "Hello World! ke-$counter \n";
//     $counter++;
// }


for ($counter = 10; $counter >= 1; $counter--) {
    echo "Hello World! ke-$counter \n";
}

// alternatife sintax
for ($counter = 1; $counter <= 10;) :
    echo "Hello World! ke-$counter \n";
    $counter++;
endfor;
