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
    }
}
