<?php

namespace App\CaesarCipher;

/**
 * Run-length encoding (RLE) is a very simple form of lossless data compression,
 * in which same consecutive elements are stored as a single data value and count.
 *
 * In cryptography, a Caesar cipher is a simple encryption technique, in which each letter
 * in text is replaced by a letter some fixed number of positions down the alphabet.
 *
 * For example, with a right shift of 3, a becomes d, b becomes e, and so on until w which become z.
 * Then x, y and z become a, b and c.
 *
 * Create a function `cipher` which encrypts a word (only in lowercase) using Caesar cipher,
 * where the shift value (which can be positive or negative) is a parameter.
 *
 *   word:      shift:   result:
 * - "abcd"     1        "bcde"
 * - "abcd"     -1       "zabc"
 * - "tacos"    3        "wdfrv"
 * - "zebra"    2        "bgdtc"
 *
 * If `word` empty, throw an InvalidArgumentException.
 *
 * Add you own tests.
 *
 */
class CaesarCipher
{
    // TODO
}
