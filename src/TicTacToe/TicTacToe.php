<?php

namespace App\TicTacToe;

/**
 * Create a function `winner` which analyses a 3x3 tic-tac-toe grid.
 * - "X" represents player X
 * - "0" represents player 0
 * - " " (space) is an empty cell
 *
 * grid :
 * [
 *   ["X", "O", "O"],
 *   ["X", "O", "O"],
 *   ["X", " ", " "],
 * ]
 *
 * The function should returns the winner :
 * - "X wins" when X wins
 * - "O wins" when O wins
 * - "Cat's game" if it's a draw or if nobody wins
 * - "{player} cheated" where {player} is replaced by the player who cheated.
 *
 * The function should throw :
 * - RangeException if the grid has not the size expected
 * - InvalidArgumentException if the grid contains at least one illegal character
 */
class TicTacToe
{
    // TODO
}
