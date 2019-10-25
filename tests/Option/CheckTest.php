<?php

namespace N3ttech\Valuing\Test\Option;

use N3ttech\Valuing\Option\Check;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @internal
 * @coversNothing
 */
class CheckTest extends PHPUnitTestCase
{
    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function itCreatesCheckTest()
    {
        $this->assertInstanceOf(Check::class, Check::fromBoolean(true));
    }
}
