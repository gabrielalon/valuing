<?php

namespace N3ttech\Valuing\Test\Date;

use N3ttech\Valuing\Date\Time;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @internal
 * @coversNothing
 */
class TimeTest extends PHPUnitTestCase
{
    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function itCreatesTimeTest()
    {
        $this->assertInstanceOf(Time::class, Time::fromTimestamp(\time()));
    }
}
