<?php

namespace N3ttech\Valuing\Test\Char;

use N3ttech\Valuing\Char\Text;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @internal
 * @coversNothing
 */
class TextTest extends PHPUnitTestCase
{
    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function itCreatesTextTest()
    {
        $this->assertInstanceOf(Text::class, Text::fromString('lorem ipsum'));
    }

    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function throwsExceptionOnTextCreateTest()
    {
        $this->expectException(\Assert\AssertionFailedException::class);
        Text::fromString(str_repeat('lorem ipsum', pow(2, 8)));
    }
}
