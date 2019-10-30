<?php

namespace N3ttech\Valuing\Test\Intl\Language;

use N3ttech\Valuing\Intl\Language\Contents;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @internal
 * @coversNothing
 */
class ContentsTest extends PHPUnitTestCase
{
    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function itCreatesPolishLocalesTest()
    {
        $this->assertInstanceOf(Contents::class, Contents::fromArray(['pl' => 'translate']));
    }

    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function throwsExceptionOnLocalesCreateTest()
    {
        $this->expectException(\Assert\AssertionFailedException::class);
        Contents::fromArray(['xx' => 'translate']);
    }
}
