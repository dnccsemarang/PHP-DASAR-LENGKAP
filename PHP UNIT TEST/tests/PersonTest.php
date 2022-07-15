<?php

namespace rizdev\Test;

use Exception;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

class PersonTest extends TestCase
{

    private Person $person;

    public function setUp(): void {
        // $this->person = new Person("Rizki");
    }
    
    /**
     * @before
     */
    public function createPerson() {
        $this->person = new Person("Rizki");
        
    }

    public function testSuccess() {
        // $person = new Person("Rizki");
        assertEquals("Hello Rizki, my name is Rizki", $this->person->sayHello("Rizki"));
    }

    public function testException() {
        // $person = new Person("Rizki");
        $this->expectException(Exception::class);
        $this->person->sayHello(null);
    }

    public function testGoodByeSuccess() {
        // $person = new Person("Rizki");
        $this->expectOutputString("Good bye Budi". PHP_EOL);
        $this->person->sayGoodBye("Budi");
    }
}