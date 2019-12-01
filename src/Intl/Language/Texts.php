<?php

namespace N3ttech\Valuing\Intl\Language;

use Assert\Assertion;
use N3ttech\Valuing\Char;
use N3ttech\Valuing\VO;

/**
 * @property Collection $value
 */
final class Texts extends VO
{
    /**
     * @param array $data
     *
     *@throws \Assert\AssertionFailedException
     *
     * @return Texts
     */
    public static function fromArray(array $data): Texts
    {
        return new Texts($data);
    }

    /**
     * @param string $locale
     * @param string $text
     *
     * @throws \Assert\AssertionFailedException
     */
    public function addLocale(string $locale, string $text): void
    {
        $this->value->add(Code::fromCode($locale), Char\Text::fromString($text));
    }

    /**
     * @param string $locale
     *
     * @throws \Assert\AssertionFailedException
     *
     * @return Char\Text
     */
    public function getLocale(string $locale): Char\Char
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
     * @param Texts $other
     *
     * @return bool
     */
    public function equals($other): bool
    {
        if (false == $other instanceof Texts) {
            return false;
        }

        return $this->value->equals($other->value);
    }

    /**
     * @return array
     */
    public function raw(): array
    {
        $data = [];

        /**
         * @var string
         * @var Char\Text $text
         */
        foreach ($this->getLocales() as $locale => $text) {
            $data[$locale] = $text->toString();
        }

        return $data;
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
        $this->value = new Collection();

        foreach ($data as $locale => $text) {
            $this->addLocale($locale, $text);
        }
    }
}
