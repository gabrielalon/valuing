<?php

namespace N3ttech\Valuing\Test\Intl\Language;

use N3ttech\Valuing\Intl\Language\Codes;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @internal
 * @coversNothing
 */
class CodesTest extends PHPUnitTestCase
{
    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function itCreatesPolishLanguageTest()
    {
        $this->assertInstanceOf(Codes::class, Codes::fromArray(['pl']));
    }

    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function throwsExceptionOnLanguageCreateTest()
    {
        $this->expectException(\Assert\AssertionFailedException::class);
        Codes::fromArray(['xx']);
    }
}
