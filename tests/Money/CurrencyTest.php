<?php

namespace N3ttech\Valuing\Test\Money;

use N3ttech\Valuing\Money\Currency;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @internal
 * @coversNothing
 */
class CurrencyTest extends PHPUnitTestCase
{
    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function itCreatesPolishCurrencyTest()
    {
        $this->assertInstanceOf(Currency::class, Currency::fromCode('PLN'));
    }

    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function throwsExceptionOnCurrencyCreateTest()
    {
        $this->expectException(\Assert\AssertionFailedException::class);
        Currency::fromCode('xxx');
    }
}
