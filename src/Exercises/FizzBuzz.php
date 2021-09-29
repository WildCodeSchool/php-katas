<?php

namespace Wcs\Katas\Exercises;

/**
 * Create a function `fizzBuzz` which takes a number as parameter, and returns:
 * "Fizz", if the argument is a multiple of 3
 * "Buzz" if the argument is a multiple of 5
 * "FizzBuzz", if the argument is a multiple of 3 and 5
 * the argument as a string in any other case
 */
class FizzBuzz
{
    // TODO
    function fizzBuzz($n)
    {
        if ($n % 15 === 0) {
            return "FizzBuzz";
        }
        if ($n % 3 === 0) {
            return "Fizz";
        }
        if ($n % 5 === 0) {
            return "Buzz";
        }
        return "$n";
    }
}
