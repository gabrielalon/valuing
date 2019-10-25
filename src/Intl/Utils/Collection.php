<?php

namespace N3ttech\Valuing\Intl\Utils;

use Assert;
use N3ttech\Valuing\Char;
use N3ttech\Valuing\Intl;

final class Collection extends \ArrayIterator
{
    /**
     * @param Intl\Locale $locale
     * @param Char\Text   $text
     */
    public function add(Intl\Locale $locale, Char\Text $text): void
    {
        $this->offsetSet($locale->toString(), $text);
    }

    /**
     * @param string $locale
     *
     * @return Char\Text
     */
    public function get(string $locale): Char\Text
    {
        if (false === $this->offsetExists($locale)) {
            throw new Assert\InvalidArgumentException('Not Found Locale string: '.$locale, $locale);
        }

        return $this->offsetGet($locale);
    }

    /**
     * @param Collection $other
     *
     * @return bool
     */
    public function equals($other): bool
    {
        if (false == $other instanceof Collection) {
            return false;
        }

        /**
         * @var string
         * @var Char\Text $text
         */
        foreach ($this->getArrayCopy() as $locale => $text) {
            try {
                $otherValue = $other->get($locale);
            } catch (Assert\InvalidArgumentException $e) {
                return false;
            }

            if (false === $text->equals($otherValue)) {
                return false;
            }
        }

        return true;
    }
}
