<?php

namespace App\ComplementaryDna;

use App\ComplementaryDna\ComplementaryDna;
use PHPUnit\Framework\TestCase;

class ComplementaryDnaTest extends TestCase
{
    public function testComplementaryDna()
    {
        $dna = new ComplementaryDna();
        self::assertEquals("C", $dna->complementary('G'));
        self::assertEquals("G", $dna->complementary('C'));
        self::assertEquals("T", $dna->complementary('A'));
        self::assertEquals("A", $dna->complementary('T'));
        self::assertEquals("TAACG", $dna->complementary('ATTGC'));
        self::assertEquals("CATA", $dna->complementary('GTAT'));
    }
}
