<?php

class Manager {
    var string $name;
    var string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name) : void {
        echo "Hi $name, My name is manager $this->name";
    }
}

class VicePrecident extends Manager {
    public function __construct(string $name = "")
    {
        // tidak wajib tp rekomendasi
        parent::__construct($name = "VP");
    }

    function sayHello(string $name) : void {
        echo "Hi $name, My name is VP $this->name";
    }
}