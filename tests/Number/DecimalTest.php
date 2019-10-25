<?php

namespace N3ttech\Valuing\Test\Number;

use N3ttech\Valuing\Number\Decimal;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @internal
 * @coversNothing
 */
class DecimalTest extends PHPUnitTestCase
{
    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function itCreatesDecimalTest()
    {
        $this->assertInstanceOf(Decimal::class, Decimal::fromFloat(12.2));
    }
}
