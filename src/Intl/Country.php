<?php

namespace N3ttech\Valuing\Intl;

use Assert\Assertion;
use N3ttech\Valuing\VO;
use Symfony\Component\Intl\Countries;

final class Country extends VO
{
	/**
	 * @param string $code
	 *
	 * @throws \Assert\AssertionFailedException
	 *
	 * @return Country
	 */
	public static function fromCode(string $code): Country
	{
		return new Country($code);
	}
	
	/**
	 * {@inheritdoc}
	 */
	protected function guard($code): void
	{
		Assertion::regex($code, '/[a-zA-Z]{2}/', 'Invalid Country code: '.$code);
		Assertion::keyExists(Countries::getNames(), $code, 'Invalid Country code: '.$code);
	}
}
