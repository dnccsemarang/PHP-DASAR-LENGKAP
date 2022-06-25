<?php

namespace Data;

abstract class Animal {
    public string $name;

    abstract public function run(): void; // kalo abstract tidak boleh punya body, kalau punya body tidak boleh abstract
}


class Cat  extends Animal {

    // kalau ada function abstrack maka wajib di override di class childnya 
    public function run(): void{
        echo "Cat $this->name is Running";
    }

}
class Dog  extends Animal {
    public function run(): void{
        echo "Dog $this->name is Running";
    }

}



