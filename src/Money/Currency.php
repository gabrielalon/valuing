<?php

namespace N3ttech\Valuing\Money;

use Assert\Assertion;
use N3ttech\Valuing\VO;
use Symfony\Component\Intl\Currencies;

final class Currency extends VO
{
    /**
     * @param string $code
     *
     * @throws \Assert\AssertionFailedException
     *
     * @return Currency
     */
    public static function fromCode(string $code): Currency
    {
        return new Currency($code);
    }

    /**
     * {@inheritdoc}
     */
    protected function guard($code): void
    {
        Assertion::regex($code, '/[a-zA-Z]{3}/', 'Invalid Currency code: '.$code);
        Assertion::inArray($code, Currencies::getNames(), 'Invalid Currency code: '.$code);
    }
}
