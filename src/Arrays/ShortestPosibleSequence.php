<?php

namespace JesusFar\ProgrammingChallenges\Arrays;

class ShortestPosibleSequence
{
    /**
     * execute should return the shortest count of the sequence in an array of integers,
     * given a number N.
     *
     * The secuenque must be generate following the next rules;
     * First element of array must be 1, $a[0] = 1;
     * The nexts elements should calculate adding 1 or multiplying by 2 the previus element:
     * $a[] = $a[$i-1] * 2  OR  $a[] = $a[$i-1] + 1, until the last element is equal to N.
     *
     * Example:
     * Given N = 18, execute should return 6, because the sequence array contains six elements.
     *
     * $a [1, 2, 4, 8, 9, 18];
     *
     */
    public function execute(int $n)
    {
        $sequence[] = $n;
        $this->generateSequenceFor($n, $sequence);
        return count($sequence);
    }

    public function generateSequenceFor($n, &$sequence)
    {
        if ($n == 1) {
            return;
        } elseif ($n % 2 == 0) {
            $n = $n/2;
            $sequence[] = $n;
        } else {
            $n = $n - 1;
            $sequence[] = $n;
        }

        $this->generateSequenceFor($n, $sequence);
    }
}
