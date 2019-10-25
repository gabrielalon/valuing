<?php

namespace N3ttech\Valuing\Test\Identity;

use N3ttech\Valuing\Identity\Uuid;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @internal
 * @coversNothing
 */
class UuidTest extends PHPUnitTestCase
{
    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function itCreatesUuidTest()
    {
        $uuid = \Ramsey\Uuid\Uuid::uuid4()->toString();
        $this->assertInstanceOf(Uuid::class, Uuid::fromIdentity($uuid));
    }

    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function throwsExceptionOnUuidCreateTest()
    {
        $this->expectException(\Assert\AssertionFailedException::class);
        Uuid::fromIdentity('xxx');
    }
}
