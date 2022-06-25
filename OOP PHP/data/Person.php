<?php



class Person {

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }



    const AUTHOR = "RIZKI DARMAWAN";

    var string $name ;
    var ?string $address = null; // nullable type
    var string $country = "Indonesia";


    function sayHello(?string $name) {
        echo "Hello $name," ;

        if(is_null($name)){
            echo "Hi, My Name is $this->name";
        }else {
            echo "Hi, My Name is $name";
            
        }
    }

    function info(){
        echo "AUTHOR : ". self::AUTHOR. PHP_EOL;
    }

    function __destruct()
    {
        echo "Obejct person $this->name is destroyed";
    }
}