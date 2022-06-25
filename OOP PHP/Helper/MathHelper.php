<?php

namespace Helper;

class MathHelper {
    static public string $name  = "Math Helper";

    static public function sum(int... $numbers) {
        $total = 0;
        // var_dump($numbers);
        foreach($numbers as $number) {
            $total += $number;
        }

        return $total;
    }
}