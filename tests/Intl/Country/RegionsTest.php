<?php

namespace N3ttech\Valuing\Test\Intl\Country;

use N3ttech\Valuing\Intl\Country\Regions;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * @internal
 * @coversNothing
 */
class RegionsTest extends PHPUnitTestCase
{
    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function itCreatesPolishRegionsTest()
    {
        $this->assertInstanceOf(Regions::class, Regions::fromArray([
            ['pl' => 'Śląskie', 'en' => 'Silesia'],
            ['pl' => 'Pomorskie'],
        ]));
    }

    /**
     * @test
     *
     * @throws \Assert\AssertionFailedException
     */
    public function throwsExceptionOnRegionsCreateTest()
    {
        $this->expectException(\Assert\AssertionFailedException::class);
        Regions::fromArray([['xx']]);
    }
}
