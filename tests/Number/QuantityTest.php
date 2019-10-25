<?php

namespace N3ttech\Valuing\Test\Number;

use N3ttech\Valuing\Number\Quantity;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @internal
 * @coversNothing
 */
class QuantityTest extends PHPUnitTestCase
{
    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function itCreatesQuantityTest()
    {
        $this->assertInstanceOf(Quantity::class, Quantity::fromNumber(12));
    }
}
