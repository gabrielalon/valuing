<?php

namespace N3ttech\Valuing\Test\Intl\Continent;

use N3ttech\Valuing\Intl\Continent\Codes;
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
    public function itCreatesPolishContinentTest()
    {
        $this->assertInstanceOf(Codes::class, Codes::fromArray(['eu']));
    }

    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function throwsExceptionOnContinentCreateTest()
    {
        $this->expectException(\Assert\AssertionFailedException::class);
        Codes::fromArray(['xxx']);
    }
}
