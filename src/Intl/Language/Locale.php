<?php

namespace N3ttech\Valuing\Intl\Language;

use Assert\Assertion;
use N3ttech\Valuing\Identity\AggregateId;
use N3ttech\Valuing\VO;
use Symfony\Component\Intl\Languages;

final class Locale extends VO implements AggregateId
{
    /**
     * @param string $locale
     *
     * @throws \Assert\AssertionFailedException
     *
     * @return Locale
     */
    public static function fromLocale(string $locale): Locale
    {
        return new Locale($locale);
    }

    /**
     * {@inheritdoc}
     */
    protected function guard($locale): void
    {
        Assertion::regex($locale, '/[a-zA-Z]{2}/', 'Invalid Locale string: '.$locale);
        Assertion::keyExists(Languages::getNames(), $locale, 'Invalid Locale string: '.$locale);
    }
}
