<?php

namespace N3ttech\Valuing\Intl\Country;

use Assert\Assertion;
use N3ttech\Valuing\Identity\AggregateId;
use N3ttech\Valuing\VO;
use Symfony\Component\Intl\Countries;

final class Code extends VO implements AggregateId
{
    /**
     * @param string $code
     *
     * @throws \Assert\AssertionFailedException
     *
     * @return Code
     */
    public static function fromCode(string $code): Code
    {
        return new Code($code);
    }

    /**
     * {@inheritdoc}
     */
    protected function guard($code): void
    {
        Assertion::regex($code, '/^[a-zA-Z]{2}$/', 'Invalid Country code: '.$code);
        Assertion::inArray(mb_strtoupper($code), Countries::getCountryCodes(), 'Invalid Country code: '.$code);
    }
}
