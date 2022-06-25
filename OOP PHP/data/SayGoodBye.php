<?php

namespace Data\Traits;

trait SayGoodBye {   

    public function goodBye(?string $name): void {
        if(is_null($name)){
            echo "Good Bye";
        }
        else {
            echo "Good Bye $name";
        }
    }
}

trait SayHello {   
    public function hello(?string $name): void {
        if(is_null($name)){
            echo "Hallo";
        }
        else {
            echo "Hallo $name";
        }
    }
}


trait HasName {
    public string $name;
}

trait CanRun {
    public abstract function run(): void;
}

class ParentPerson {
    public function goodBye(?string $name) {
        echo "Good Bye in Person".PHP_EOL;
    }


    public function hello(?string $name) {
        echo "Hello in person".PHP_EOL;
    }
}

class Person extends ParentPerson {
    use SayGoodBye, SayHello,HasName,CanRun ;
    // {
    //     hello as private ;
    //     goodBye as private;
    // }
    public function run(): void {
        echo "Person $this->name is Running";
    }
}


