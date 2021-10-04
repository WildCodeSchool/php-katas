<?php

namespace App;

use App\Uniq\Uniq;
use PHPUnit\Framework\TestCase;

class UniqTest extends TestCase
{
    public function testInverse()
    {
        $uniq = new Uniq();
        self::assertEquals(['a'], $uniq->uniq(['a', 'a']));
    }
}
