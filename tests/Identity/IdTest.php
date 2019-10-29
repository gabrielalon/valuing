<?php

namespace N3ttech\Valuing\Test\Identity;

use N3ttech\Valuing\Identity\Id;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @internal
 * @coversNothing
 */
class IdTest extends PHPUnitTestCase
{
    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function itCreatesIdTest()
    {
        $id = 1;
        $this->assertInstanceOf(Id::class, Id::fromIdentity($id));
    }

    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function throwsExceptionOnIdCreateTest()
    {
        $this->expectException(\Assert\AssertionFailedException::class);
        Id::fromIdentity(0);
    }
}
