<?php

namespace N3ttech\Valuing\Test\Intl\Language;

use N3ttech\Valuing\Intl\Language\Locales;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @internal
 * @coversNothing
 */
class LocalesTest extends PHPUnitTestCase
{
    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function itCreatesPolishLocalesTest()
    {
        $this->assertInstanceOf(Locales::class, Locales::fromArray(['pl' => 'translate']));
    }

    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function throwsExceptionOnLocalesCreateTest()
    {
        $this->expectException(\Assert\AssertionFailedException::class);
        Locales::fromArray(['xx' => 'translate']);
    }
}
