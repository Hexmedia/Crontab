<?php

namespace spec\Hexmedia\Crontab\Parser\Ini;

use Hexmedia\CrontabDev\PhpSpec\Parser\IniParserObjectBehavior;
use Prophecy\Argument;

class Zend2ParserSpec extends IniParserObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Hexmedia\Crontab\Parser\Ini\Zend2Parser');
    }
}
