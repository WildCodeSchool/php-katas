<?php

namespace App\ComplementaryDna;

/** function complementary
 * In DNA strings, symbols "A" and "T" are complements of each other, as "C" and "G".
 * Create a function complementary which receive a DNA string and returns the complementary side.
 * - "G" => "C"
 * - "C" => "G"
 * - "A" => "T"
 * - "T" => "A"
 * - "ATTGC" => "TAACG"
 */
class ComplementaryDna
{
    public function complementary(string $dna)
    {
        $resultDNA = "";
        for ($i = 0; $i <strlen($dna); $i++) {
            switch ($dna[$i]) {
                case "A":
                    $resultDNA = $resultDNA . "T";
                    break;
                case "T":
                    $resultDNA = $resultDNA . "A";
                    break;
                case "C":
                    $resultDNA = $resultDNA . "G";
                    break;
                default:
                    $resultDNA = $resultDNA . "C";
            }
        }
        return $resultDNA;
    }
}
