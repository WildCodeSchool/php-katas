<?php

namespace App;

use App\InverseValues\InverseValues;
use PHPUnit\Framework\TestCase;

class InverseValuesTest extends TestCase
{
    public function testInverse()
    {
        $inverseValues = new InverseValues();
        self::assertEquals([-1], $inverseValues->inverse([1]));
    }
}
