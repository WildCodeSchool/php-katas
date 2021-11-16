<?php

namespace App\MorseCode;

/**
 * Create a function `decode` which translates morse code into latin alphabet.
 * Morse code is consisting of dots and dashes:
 * - each word being separated by three spaces
 * - each letter being separated by one space
 *
 * eg: "WILD CODE" => ".-- .. .-.. -..   -.-. --- -.. ."
 *
 * Add your own tests
 */
class MorseCode
{
    private array $morseMap = [
        ".-" => "A",
        "-..." => "B",
        "-.-." => "C",
        "-.." => "D",
        "." => "E",
        "..-." => "F",
        "--." => "G",
        "...." => "H",
        ".." => "I",
        ".---" => "J",
        "-.-" => "K",
        ".-.." => "L",
        "--" => "M",
        "-." => "N",
        "---" => "O",
        ".--." => "P",
        "--.-" => "Q",
        ".-." => "R",
        "..." => "S",
        "-" => "T",
        "..-" => "U",
        "...-" => "V",
        ".--" => "W",
        "-..-" => "X",
        "-.--" => "Y",
        "--.." => "Z",
        ".-.-.-" => ".",
        "..--.." => "?",
        "-.-.--" => "!",
    ];

    // TODO
}
