<?php

namespace N3ttech\Valuing\Intl\Language;

use Assert\Assertion;
use N3ttech\Valuing\Char;
use N3ttech\Valuing\VO;

/**
 * @property Collection $value
 */
final class Contents extends VO
{
    /**
     * @param array $data
     *
     * @throws \Assert\AssertionFailedException
     *
     * @return Contents
     */
    public static function fromArray(array $data): Contents
    {
        return new Contents($data);
    }

    /**
     * @param string $locale
     * @param string $content
     *
     * @throws \Assert\AssertionFailedException
     */
    public function addLocale(string $locale, string $content): void
    {
        $this->value->add(Code::fromCode($locale), Char\Content::fromString($content));
    }

    /**
     * @param string $locale
     *
     *@throws \Assert\AssertionFailedException
     *
     * @return Char\Content
     */
    public function getLocale(string $locale): Char\Char
    {
        $content = Char\Content::fromString('');

        if (true === $this->value->offsetExists($locale)) {
            /** @var Char\Content $content */
            $content = $this->value->offsetGet($locale);
        }

        return $content;
    }

    /**
     * @return array
     */
    public function getLocales(): array
    {
        return $this->value->getArrayCopy();
    }

    /**
     * @param Contents $other
     *
     * @return bool
     */
    public function equals($other): bool
    {
        if (false == $other instanceof Contents) {
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
         * @var Char\Content $content
         */
        foreach ($this->getLocales() as $locale => $content) {
            $data[$locale] = $content->toString();
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

        foreach ($data as $locale => $content) {
            $this->addLocale($locale, $content);
        }
    }
}
