<?php

namespace Data;

interface HasBrand {
    function getBrand(): string;
}

interface isMaintenance {
    function isMaintenance(): bool;
}

interface Car extends HasBrand,isMaintenance {
    function drive(): void;
    function setTire(): int;
}

class Avanza implements Car {

    public function drive(): void {
        echo "Drive Avanza" .PHP_EOL;
    }

    public function setTire(): int {
        return 4;
    }

    public function getBrand(): string
    {
       return "Toyota" ;
    }
    public function isMaintenance(): bool
    {
        return false;
    }
}

class Brio {
    public Car $car;
}

