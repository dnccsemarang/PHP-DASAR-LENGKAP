<?php

namespace rizdev\Test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase {

    private Counter $counter;
    
    public function setUp() : void {
        $this->counter = new Counter();
        echo "Membuat counter".PHP_EOL;
    }

    public function testIncrement() {
        echo "TEST"; //akan di eksekusi
        self::markTestIncomplete("TODO do counter again");
        self::assertEquals(0, $this->counter->getCounter());
        echo "TEST"; // tidak akan di eksekusi
    }

    public function testCounter() {
        // $counter = new Counter();
        $this->counter->increment();

        // ada 3 cara penulisan

        // 1. Assert::assertEquals(expected, actual)
        // 2. $this->assertEquals(expected, actual)
        // 3. self::assertEquals(expected, actual)
        Assert::assertEquals(1, $this->counter->getCounter());
        // echo $counter->getCounter().PHP_EOL;
    }

    /**
     * @test
     */
    public function increment() {
        // $counter = new Counter();
        self::markTestSkipped("Masih ada error bro");
        $this->counter->increment();
        $this->assertEquals(1, $this->counter->getCounter());
    }

    public function testFirst():Counter {
        // $counter = new Counter();
        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());
        return $this->counter;
    }

    /**
     * @depends testFirst
     */
    public function testSecond(Counter $counter) : void {
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());
        echo "as";
    }

    public function tearDown() : void {
        echo "Tear down".PHP_EOL;
    }

    /**
     * @after
     */
    public function after() : void {
        echo "After".PHP_EOL;
    }

    /**
     * @requires OSFAMILY Windows
     */
    public function testOnlyWindows() {
        self::assertTrue(true, "Only in windows");
    }
}