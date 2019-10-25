<?php

namespace N3ttech\Valuing\Intl;

use Assert\Assertion;
use N3ttech\Valuing\VO;

final class Continent extends VO
{
	/**
	 * @param string $code
	 *
	 * @throws \Assert\AssertionFailedException
	 *
	 * @return Continent
	 */
	public static function fromCode(string $code): Continent
	{
		return new Continent($code);
	}
	
	/**
	 * {@inheritdoc}
	 */
	protected function guard($code): void
	{
		Assertion::regex($code, '/[a-zA-Z]{2}/', 'Invalid Continent code: '.$code);
	}
}
