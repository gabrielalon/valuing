<?php

namespace N3ttech\Valuing\Test\Intl\Currency;

use N3ttech\Valuing\Intl\Currency\Code;
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
    public function itCreatesPolishCurrencyTest()
    {
        $this->assertInstanceOf(Code::class, Code::fromCode('PLN'));
    }

    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function throwsExceptionOnCurrencyCreateTest()
    {
        $this->expectException(\Assert\AssertionFailedException::class);
        Code::fromCode('xxx');
    }
}
