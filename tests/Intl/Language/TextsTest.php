<?php

namespace N3ttech\Valuing\Test\Intl\Language;

use N3ttech\Valuing\Intl\Language\Texts;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @internal
 * @coversNothing
 */
class TextsTest extends PHPUnitTestCase
{
    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function itCreatesPolishLocalesTest()
    {
        $this->assertInstanceOf(Texts::class, Texts::fromArray(['pl' => 'translate']));
    }

    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function throwsExceptionOnLocalesCreateTest()
    {
        $this->expectException(\Assert\AssertionFailedException::class);
        Texts::fromArray(['xx' => 'translate']);
    }
}
