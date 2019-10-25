<?php

namespace N3ttech\Valuing\Test\Char;

use N3ttech\Valuing\Char\Email;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @internal
 * @coversNothing
 */
class EmailTest extends PHPUnitTestCase
{
    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function itCreatesEmailTest()
    {
        $this->assertInstanceOf(Email::class, Email::fromString('test@test.pl'));
    }

    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function throwsExceptionOnEmailCreateTest()
    {
        $this->expectException(\Assert\AssertionFailedException::class);
        Email::fromString('xxx');
    }
}
