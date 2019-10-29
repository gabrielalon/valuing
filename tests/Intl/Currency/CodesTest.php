<?php

namespace N3ttech\Valuing\Test\Intl\Currency;

use N3ttech\Valuing\Intl\Currency\Codes;
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
    public function itCreatesPolishCurrencyTest()
    {
        $this->assertInstanceOf(Codes::class, Codes::fromArray(['PLN']));
    }

    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function throwsExceptionOnCurrencyCreateTest()
    {
        $this->expectException(\Assert\AssertionFailedException::class);
        Codes::fromArray(['xxx']);
    }
}
