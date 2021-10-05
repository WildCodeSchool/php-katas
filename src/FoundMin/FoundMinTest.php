<?php

namespace App;

use App\FoundMin\FoundMin;
use PHPUnit\Framework\TestCase;

class FoundMinTest extends TestCase
{
    public function testMin()
    {
        $foundMin = new FoundMin();
        self::assertEquals(1, $foundMin->min([1]));
        self::assertEquals(1, $foundMin->min([1, 2, 3]));
        self::assertEquals(-2, $foundMin->min([3, -2, 1]));
        self::assertEquals(null, $foundMin->min([]));
        self::assertEquals(null, $foundMin->min(null));
    }
}
