<?php

namespace App;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testFizzBuzz()
    {
        $fizzBuzz = new FizzBuzz();
        self::assertEquals("Fizz", $fizzBuzz->fizzBuzz(3));
        self::assertEquals("Fizz", $fizzBuzz->fizzBuzz(9));
        self::assertEquals("Buzz", $fizzBuzz->fizzBuzz(5));
        self::assertEquals("Buzz", $fizzBuzz->fizzBuzz(10));
        self::assertEquals("FizzBuzz", $fizzBuzz->fizzBuzz(15));
        self::assertEquals("FizzBuzz", $fizzBuzz->fizzBuzz(30));
        self::assertEquals("7", $fizzBuzz->fizzBuzz(7));
        self::assertEquals("13", $fizzBuzz->fizzBuzz(13));
    }
}
