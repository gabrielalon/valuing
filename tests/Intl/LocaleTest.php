<?php

namespace N3ttech\Valuing\Test\Intl;

use N3ttech\Valuing\Intl\Locale;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class LocaleTest extends PHPUnitTestCase
{
	/**
	 * @test
	 * @throws \Assert\AssertionFailedException
	 */
	public function itCreatesPolishLocaleTest()
	{
		$this->assertInstanceOf(Locale::class, Locale::fromLocale('pl'));
	}
	
	/**
	 * @test
	 * @throws \Assert\AssertionFailedException
	 */
	public function throwsExceptionOnLocaleCreateTest()
	{
		$this->expectException(\Assert\AssertionFailedException::class);
		Locale::fromLocale('we');
	}
}