<?php


use G4\CodeCoverage\Console;
use Emanci\ConsoleColor\ConsoleColor;

class ConsoleTest extends PHPUnit_Framework_TestCase
{

    public function testConstruct()
    {
        $consoleColorMock = $this->getMockBuilder(ConsoleColor::class)
            ->disableOriginalConstructor()
            ->getMock();

        new Console($consoleColorMock);
    }
}
