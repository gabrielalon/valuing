<?php

namespace N3ttech\Valuing\Test\Intl\Country;

use N3ttech\Valuing\Intl\Country\Codes;
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
    public function itCreatesPolishCountryTest()
    {
        $this->assertInstanceOf(Codes::class, Codes::fromArray(['pl']));
    }

    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function throwsExceptionOnCountryCreateTest()
    {
        $this->expectException(\Assert\AssertionFailedException::class);
        Codes::fromArray(['xx']);
    }
}
