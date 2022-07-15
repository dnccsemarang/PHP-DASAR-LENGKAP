<?php

namespace rizdev\Test;

class Math {
    static public function sum(array $values): int {
        $total = 0;

        foreach ($values as $value) {
            $total += $value;
        }

        return $total;
    }
}