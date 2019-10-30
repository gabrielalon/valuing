<?php

namespace N3ttech\Valuing\Intl\Language;

use Assert\Assertion;
use N3ttech\Valuing\Char\Text;
use N3ttech\Valuing\VO;

/**
 * @property Collection $value
 */
final class Codes extends VO
{
    /**
     * @param array $locales
     *
     * @throws \Assert\AssertionFailedException
     *
     * @return Codes
     */
    public static function fromArray(array $locales): Codes
    {
        return new Codes($locales);
    }

    /**
     * @param string $locale
     *
     * @throws \Assert\AssertionFailedException
     */
    public function addCode(string $locale): void
    {
        $this->value->add(Code::fromCode($locale), Text::fromString(''));
    }

    /**
     * @param Codes $other
     *
     * @return bool
     */
    public function equals($other): bool
    {
        if (false == $other instanceof Codes) {
            return false;
        }

        return $this->value->equals($other->value);
    }

    /**
     * @return string[]
     */
    public function raw(): array
    {
        return array_keys($this->value->getArrayCopy());
    }

    /**
     * {@inheritdoc}
     */
    protected function guard($value): void
    {
        Assertion::isArray($value, 'Invalid Language locales array');
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Assert\AssertionFailedException
     */
    protected function setValue($locales): void
    {
        $this->value = new Collection();

        foreach ($locales as $locale) {
            $this->addCode($locale);
        }
    }
}
