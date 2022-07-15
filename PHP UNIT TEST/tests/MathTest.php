<?php

namespace rizdev\Test;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    // public function testSum()
    // {
    //     self::assertEquals(10,Math::sum([5,5]));
    //     self::assertEquals(20,Math::sum([4,4,4,4,4]));
    //     self::assertEquals(9,Math::sum([3,3,3]));
    //     self::assertEquals(0,Math::sum([]));
    //     self::assertEquals(2,Math::sum([2]));
    // }

    public function mathSumData():array {
        return [
            [[5,5],10],
            [[4,4],8],
            [[3,3],6],
            [[],0],
            [[2,2],4]
        ];
    }

    /**
     * @dataProvider mathSumData
     */

    public function testDataProvider(array $values, int $expected){
        self::assertEquals($expected, Math::sum($values));
    }

    /**
     * @testWith [[5,5],10]
     *           [[4,4],8]
     *           [[3,3],6]
     *           [[],0]
     *           [[2,2],4]
     */

    public function testDataProvider2(array $values, int $expected){
        self::assertEquals($expected, Math::sum($values));
    }

   
}
