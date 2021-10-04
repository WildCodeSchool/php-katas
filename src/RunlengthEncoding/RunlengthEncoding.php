<?php

namespace App\RunlengthEncoding;

/**
 * Run-length encoding (RLE) is a very simple form of lossless data compression, in which same consecutive elements are stored as a single data value and count.
 *
 * Create a function `encode` that implements a RLE of a string. If a character is present only once or twice consecutively, you must not compress it.
 * Example:
 * - "a" -> "a"
 * - "aa" -> "aa"
 * - "aaa" -> "a3"
 * - "aaaabbccca" -> "a4bbc3a"
 *
 * If the argument is null, return an empty string.
 * If the argument is not a string, throw a TypeError.
 *
 * Add you own tests.
 */
class RunlengthEncoding
{
    public function encode(string $stringToTest) // "aaa"
    {
        $result = [];
        $arrayToTest = str_split($stringToTest); // ["a", "a", "a"]
        while (!empty($arrayToTest)) {
            
        }
    }
}

$rl = new RunlengthEncoding();
$rl->encode("aaa");
