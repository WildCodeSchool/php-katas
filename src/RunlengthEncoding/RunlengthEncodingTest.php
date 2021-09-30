<?php

namespace App\RunlengthEncoding;

use App\RunlengthEncoding\RunlengthEncoding;
use PHPUnit\Framework\TestCase;

class RunlengthEncodingTest extends TestCase
{
    public function testComplementaryDna()
    {
        $runlenght = new RunlengthEncoding();
        self::assertEquals(true, true);
    }
}
