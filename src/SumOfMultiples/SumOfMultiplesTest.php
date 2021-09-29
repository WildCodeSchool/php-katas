<?php

namespace App\SumOfMultiples;

use App\SumOfMultiples\SumOfMultiples;
use PHPUnit\Framework\TestCase;

class SumOfMultiplesTest extends TestCase
{
    public function testFizzBuzz()
    {
        $sumOfMultiples = new SumOfMultiples();
        self::assertEquals(0, $sumOfMultiples->sum(0));
        self::assertEquals(23, $sumOfMultiples->sum(10));
        self::assertEquals(408, $sumOfMultiples->sum(42));
        self::assertEquals(2318, $sumOfMultiples->sum(100));
    }
}
