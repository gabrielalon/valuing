<?php

namespace N3ttech\Valuing\Test\Intl\Language;

use N3ttech\Valuing\Intl\Language\Code;
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
    public function itCreatesPolishLocaleTest()
    {
        $this->assertInstanceOf(Code::class, Code::fromCode('pl'));
    }

    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function throwsExceptionOnLocaleCreateTest()
    {
        $this->expectException(\Assert\AssertionFailedException::class);
        Code::fromCode('xx');
    }
}
