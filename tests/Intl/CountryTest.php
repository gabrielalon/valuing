<?php

namespace N3ttech\Valuing\Test\Intl;

use N3ttech\Valuing\Intl\Country;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @internal
 * @coversNothing
 */
class CountryTest extends PHPUnitTestCase
{
    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function itCreatesPolishCountryTest()
    {
        $this->assertInstanceOf(Country::class, Country::fromCode('pl'));
    }

    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function throwsExceptionOnCountryCreateTest()
    {
        $this->expectException(\Assert\AssertionFailedException::class);
        Country::fromCode('xx');
    }
}
