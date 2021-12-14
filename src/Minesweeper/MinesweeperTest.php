<?php

namespace App\Minesweeper;

use PHPUnit\Framework\TestCase;

class MinesweeperTest extends TestCase
{
    private array $validGrid = [
        [1, 0, 0, 1],
        [0, 1, 0, 0],
        [1, 0, 0, 0],
    ];

    private array $invalidGrid = [
        [0, 0, 0, 1],
        [0, -1, 0, 1],
        [1, 0, 0, 0],
    ];

    public function testDefault()
    {
        $this->assertTrue(true);
    }

    // TODO: add your own test
}
