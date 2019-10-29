<?php

namespace N3ttech\Valuing\Test\Intl\Continent;

use N3ttech\Valuing\Intl\Continent\Code;
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
    public function itCreatesPolishContinentTest()
    {
        $this->assertInstanceOf(Code::class, Code::fromCode('eu'));
    }

    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function throwsExceptionOnContinentCreateTest()
    {
        $this->expectException(\Assert\AssertionFailedException::class);
        Code::fromCode('xxx');
    }
}
