<?php

interface HelloWorld {
    function sayHello(): void ;
}

// class SampleHelloWorld implements HelloWorld {
//     public function sayHello(): void
//     {
//         echo "Hello World";
//     }
    
// }

// $helloworld = new SampleHelloWorld();
// $helloworld->sayHello();

$helloworld = new class("Eko") implements HelloWorld {

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Hello $this->name".PHP_EOL;
    }
};
$helloworld->sayHello();
