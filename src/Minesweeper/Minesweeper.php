<?php

namespace App\Minesweeper;

/**
 * Create a function `sweep` which takes a grid and two numbers as parameters :
 * - grid : a minesweeper matrix where 0 are empty cells and 1 are bombs.
 *          The width and height of the grid can vary.
 * - row : the vertical coordinate of the cell to sweep
 * - column : the horizontal coordinate of the cell to sweep
 *
 * The function will check the cell using the coordinates and returns :
 * - "kaboom", if it contains a boom
 * - the number of adjacent bombs, if it's empty
 *
 * The function will throw :
 * - InvalidArgumentException if the grid is empty or not a matrix
 * - InvalidArgumentException if at least one value of the grid is not 0 or 1
 * - RangeException if a row or column is out of bounds
 *
 * Example :
 * grid :
 * [
 *   [1, 0, 0, 1],
 *   [0, 1, 0, 0],
 *   [1, 0, 0, 0]
 * ]
 * row : 1
 * column : 2
 * result : 2
 */
class Minesweeper
{
    // TODO
}
