<?php

namespace spec\Hexmedia\Crontab\Parser\Unix;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ParserFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Hexmedia\Crontab\Parser\Unix\ParserFactory');
        $this->shouldImplement('Hexmedia\Crontab\Parser\ParserFactoryAbstract');
    }
}