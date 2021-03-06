<?php
/**
 * @author    Krystian Kuczek <krystian@hexmedia.pl>
 * @copyright 2013-2016 Hexmedia.pl
 * @license   @see LICENSE
 */

namespace dev\Hexmedia\Crontab\PhpSpec\Parser;

/**
 * Class AbstractIniParserObjectBehavior
 *
 * @package Hexmedia\CrontabDev\PhpSpec\Parser
 */
abstract class AbstractIniParserObjectBehavior extends AbstractParserObjectBehavior
{
    protected function getFileName()
    {
        return __DIR__ . '/../../../Tests/example_configurations/test.ini';
    }

}
