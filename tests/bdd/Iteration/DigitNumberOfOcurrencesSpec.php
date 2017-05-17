<?php

namespace bdd\JesusFar\ProgrammingChallenges\Iteration;

use JesusFar\ProgrammingChallenges\Iteration\DigitNumberOfOcurrences;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DigitNumberOfOcurrencesSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(DigitNumberOfOcurrences::class);
    }

    public function it_is_should_return_1_ocurrences_of_digit()
    {
        $this->execute(3)->shouldReturn(1);
    }

    public function it_is_should_return_5_ocurrences_of_digit()
    {
        $this->execute(13)->shouldReturn(6);
    }
}
