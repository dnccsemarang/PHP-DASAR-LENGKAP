<?php

namespace ProgrammerZamanNow\Data;

class People {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    function sayHello(string $name) {
        echo "Hello $name my name is $this->name";
    }

}