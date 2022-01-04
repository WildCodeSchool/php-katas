<?php

namespace App\TicTacToe;

use PHPUnit\Framework\TestCase;

class TicTacToeTest extends TestCase
{
    private array $xWins = [
        ['O', 'X', 'X'],
        ['O', 'X', 'O'],
        ['X', 'O', 'X'],
    ];

    private array $oWins = [
        ['X', 'O', 'X'],
        ['O', 'O', 'O'],
        [' ', ' ', 'X'],
    ];

    private array $catsGame = [
        ['O', 'X', 'O'],
        ['X', 'X', 'O'],
        ['O', 'O', 'X'],
    ];

    private array $xCheated = [
        ['O', 'X', 'X'],
        ['X', 'X', 'O'],
        ['X', 'O', 'X'],
    ];

    private array $rangeException = [
        ['O', 'X', 'X'],
        ['X', 'X'],
        ['X', 'O', 'X'],
    ];

    private array $illegalArgument = [
        ['O', 'X', 'X'],
        ['O', 'X', '0'],
        ['X', 'O', 'X'],
    ];

    public function testDefault()
    {
        $this->assertTrue(true);
    }

    // TODO: add your own test
}
