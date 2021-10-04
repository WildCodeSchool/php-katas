<?php

namespace App;

use App\SumOfOdds\SumOfOdds;
use PHPUnit\Framework\TestCase;

class SumOfOddsTest extends TestCase
{
    public function testSum()
    {
        $sumOfOdds = new SumOfOdds();
        self::assertEquals(1, $sumOfOdds->sum([1]));
    }
}
