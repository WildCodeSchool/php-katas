<?php

namespace App\RunlengthEncoding;

use App\RunlengthEncoding\RunlengthEncoding;
use PHPUnit\Framework\TestCase;

class RunlengthEncodingTest extends TestCase
{
    public function testComplementaryDna()
    {
        $runlenght = new RunlengthEncoding();
        self::assertEquals("a", $runlenght->encode("a"));
        self::assertEquals("aa", $runlenght->encode("aa"));
        self::assertEquals("a3", $runlenght->encode("aaa"));
        self::assertEquals("a4bbc3a", $runlenght->encode("aaaabbccca"));
    }
}
