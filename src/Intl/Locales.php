<?php

namespace N3ttech\Valuing\Intl;

use Assert\Assertion;
use N3ttech\Valuing\Char;
use N3ttech\Valuing\VO;

/**
 * @property Utils\Collection $value
 */
final class Locales extends VO
{
    /**
     * @param array $data
     *
     * @throws \Assert\AssertionFailedException
     *
     * @return Locales
     */
    public static function fromArray(array $data): Locales
    {
        return new Locales($data);
    }

    /**
     * @param string $locale
     * @param string $text
     *
     * @throws \Assert\AssertionFailedException
     */
    public function addLocale(string $locale, string $text): void
    {
        $this->value->add(Locale::fromLocale($locale), Char\Text::fromString($text));
    }

    /**
     * @param string $locale
     *
     *@throws \Assert\AssertionFailedException
     *
     * @return Char\Text
     */
    public function getLocale(string $locale): Char\Text
    {
        $text = Char\Text::fromString('');

        if (true === $this->value->offsetExists($locale)) {
            /** @var Char\Text $text */
            $text = $this->value->offsetGet($locale);
        }

        return $text;
    }

    /**
     * @return array
     */
    public function getLocales(): array
    {
        return $this->value->getArrayCopy();
    }

    /**
     * @param Locales $other
     *
     * @return bool
     */
    public function equals($other): bool
    {
        if (false == $other instanceof Locales) {
            return false;
        }

        return $this->value->equals($other->value);
    }

    /**
     * {@inheritdoc}
     */
    protected function guard($value): void
    {
        Assertion::isArray($value, 'Invalid Locales array');
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Assert\AssertionFailedException
     */
    protected function setValue($data): void
    {
        $this->value = new Utils\Collection();

        foreach ($data as $locale => $text) {
            $this->addLocale($locale, $text);
        }
    }
}
