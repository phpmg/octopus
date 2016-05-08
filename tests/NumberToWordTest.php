<?php

namespace PhpMg\Octopus\Tests;

use PhpMg\Octopus\Language\LanguageInterface;
use PhpMg\Octopus\NumberToWord;
use PHPUnit_Framework_TestCase;

class NumberToWordTest extends PHPUnit_Framework_TestCase
{
    public function assertPreconditions()
    {
        $this->assertTrue(class_exists(NumberToWord::class));
    }

    /**
     * @test
     */
    public function expectsCallingLanguageConverterOnceToGetValueInWords()
    {
        $language = $this->getMockBuilder(LanguageInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $language->expects($this->once())
            ->method('getValueInWords')
            ->with(2)
            ->willReturn('dois');

        $numberToWord = new NumberToWord($language);
        $this->assertEquals('dois', $numberToWord->getValueInWords(2));
    }
}
