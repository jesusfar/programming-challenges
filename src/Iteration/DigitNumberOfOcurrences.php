<?php

namespace JesusFar\ProgrammingChallenges\Iteration;

class DigitNumberOfOcurrences
{
    /**
     * execute should return a number ocurrences of digit in the
     * secuenque of numbers.
     *
     * Example: n = 13
     * Execute: should return 6
     * Because in secuenque: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13
     * Digit one appears 6 times
     *
     */
    public function execute(int $n, int $digit = 1) : int
    {
        $ocurrences = 0;
        for ($i = 1; $i <= $n; $i++) {
            $ocurrences += $this->getNumberOcurrencesOf($i, $digit);
        }
        return $ocurrences;
    }

    protected function getNumberOcurrencesOf(int $n, int $digit) : int
    {
        $ocurrences = 0;
        $number = (string) $n;
        for ($i = 0; $i < strlen($number); $i++) {
            if ($number[$i] == $digit) {
                $ocurrences++;
            }
        }
        return $ocurrences;
    }
}
