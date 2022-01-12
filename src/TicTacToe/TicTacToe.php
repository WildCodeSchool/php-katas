<?php

namespace App\TicTacToe;

/**
 * Create a function `winner` which analyses a 3x3 tic-tac-toe grid.
 * - 'X' represents player X
 * - 'O' represents player O
 * - ' ' (space) is an empty cell
 *
 * grid :
 * [
 *   ['X', 'O', 'O'],
 *   ['X', 'O', ' '],
 *   ['X', ' ', ' '],
 * ]
 *
 * The function should returns the winner :
 * - 'X wins' when X wins
 * - 'O wins' when O wins
 * - 'Cat's game' if it's a draw or if nobody wins
 * - Bonus: '{player} cheated' where {player} is replaced by the player who cheated.
 *
 * The function should throw :
 * - RangeException if the grid has not the size expected
 * - InvalidArgumentException if the grid contains at least one illegal character
 */
class TicTacToe
{
    // TODO
    public function winner(array $array): string
    {
        $a = $array[0][0];
        $b = $array[0][1];
        $c = $array[0][2];
        $d = $array[1][0];
        $e = $array[1][1];
        $f = $array[1][2];
        $g = $array[2][0];
        $h = $array[2][1];
        $i = $array[2][2];
        $matrice = [
            [$a, $b, $c],
            [$d, $e, $f],
            [$g, $h, $i],
            [$a, $d, $g],
            [$b, $e, $h],
            [$c, $f, $i],
            [$a, $e, $i],
            [$c, $e, $g],
        ];
        for ($i=0; $i< 8; $i++) {
            if (in_array(3, array_count_values($matrice[$i]))) {
                return $matrice[$i][0] . " wins";
            }
        }
        return "Cat's game";
    }
}
