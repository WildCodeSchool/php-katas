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
    private array $xColumnWins = [
        ['X', 'O', 'X'],
        ['O', 'O', 'X'],
        [' ', ' ', 'X'],
    ];

    private array $oColumnWins = [
        ['X', 'O', 'X'],
        ['O', 'O', ' '],
        ['X', 'O', 'X'],
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

    public function testWinner()
    {
        $winner = new TicTacToe();
        $this->assertEquals("X wins", $winner->winner($this->xWins));
        $this->assertEquals("O wins", $winner->winner($this->oWins));
        $this->assertEquals("O wins", $winner->winner($this->oColumnWins));
        $this->assertEquals("X wins", $winner->winner($this->xColumnWins));
        $this->assertEquals("Cat's game", $winner->winner($this->catsGame));
    }
}
