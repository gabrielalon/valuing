<?php

namespace N3ttech\Valuing\Intl\Currency;

use Assert\Assertion;
use N3ttech\Valuing\Identity\AggregateId;
use N3ttech\Valuing\VO;
use Symfony\Component\Intl\Currencies;

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
        Assertion::regex($code, '/^[a-zA-Z]{3}$/', 'Invalid Currency code: '.$code);
        Assertion::inArray(mb_strtoupper($code), Currencies::getCurrencyCodes(), 'Invalid Currency code: '.$code);
    }
}
