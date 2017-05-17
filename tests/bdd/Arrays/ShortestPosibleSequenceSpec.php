<?php

namespace bdd\JesusFar\ProgrammingChallenges\Arrays;

use JesusFar\ProgrammingChallenges\Arrays\ShortestPosibleSequence;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ShortestPosibleSequenceSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(ShortestPosibleSequence::class);
    }

    public function it_is_should_return_6()
    {
        $this->execute(18)->shouldReturn(6);
    }

    public function it_is_should_return_()
    {
        $this->execute(23)->shouldReturn(8);
    }
}
