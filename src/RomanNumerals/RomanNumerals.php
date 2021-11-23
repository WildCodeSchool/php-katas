<?php

namespace App\RomanNumerals;

/*
 * Create a method `convert` which converts roman numeral to arabic.
 *
 * If the argument is empty or contains an illegal numeral,
 * throw an InvalidArgumentException with the text "Not a valid roman numeral".
 *
 * Example :
 * - I       -> 1
 * - III     -> 3
 * - IV      -> 4
 * - V       -> 5
 * - VIII    -> 8
 * - IX      -> 9
 * - X       -> 10
 * - XLIII   -> 43
 * - CXI     -> 111
 * - MDCLXVI -> 1666
*/
class RomanNumerals
{
    private array $romanNumerals = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000,
    ];

    // TODO
}
