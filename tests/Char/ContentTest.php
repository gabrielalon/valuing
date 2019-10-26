<?php

namespace N3ttech\Valuing\Test\Char;

use N3ttech\Valuing\Char\Content;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @internal
 * @coversNothing
 */
class ContentTest extends PHPUnitTestCase
{
    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function itCreatesContentTest()
    {
        $this->assertInstanceOf(Content::class, Content::fromString('lorem ipsum'));
    }
}
