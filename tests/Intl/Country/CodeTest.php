<?php

namespace N3ttech\Valuing\Test\Intl\Country;

use N3ttech\Valuing\Intl\Country\Code;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @internal
 * @coversNothing
 */
class CodeTest extends PHPUnitTestCase
{
    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function itCreatesPolishCountryTest()
    {
        $this->assertInstanceOf(Code::class, Code::fromCode('pl'));
    }

    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function throwsExceptionOnCountryCreateTest()
    {
        $this->expectException(\Assert\AssertionFailedException::class);
        Code::fromCode('xx');
    }
}
