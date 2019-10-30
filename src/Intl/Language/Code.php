<?php

namespace N3ttech\Valuing\Intl\Language;

use Assert\Assertion;
use N3ttech\Valuing\Identity\AggregateId;
use N3ttech\Valuing\VO;
use Symfony\Component\Intl\Languages;

final class Code extends VO implements AggregateId
{
    /**
     * @param string $code
     *
     *@throws \Assert\AssertionFailedException
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
        Assertion::regex($code, '/[a-zA-Z]{2}/', 'Invalid Code string: '.$code);
        Assertion::keyExists(Languages::getNames(), $code, 'Invalid Code string: '.$code);
    }
}
