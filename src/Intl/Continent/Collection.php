<?php

namespace N3ttech\Valuing\Intl\Continent;

use Assert;

final class Collection extends \ArrayIterator
{
    /**
     * @param Code $code
     */
    public function add(Code $code): void
    {
        $this->offsetSet($code->toString(), $code);
    }

    /**
     * @param string $code
     *
     * @return Code
     */
    public function get(string $code): Code
    {
        if (false === $this->offsetExists($code)) {
            throw new Assert\InvalidArgumentException('Not found Continent code: '.$code, $code);
        }

        return $this->offsetGet($code);
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

        /** @var Code $code */
        foreach ($this->getArrayCopy() as $code) {
            try {
                $otherValue = $other->get($code->toString());
            } catch (Assert\InvalidArgumentException $e) {
                return false;
            }

            if (false === $code->equals($otherValue)) {
                return false;
            }
        }

        return true;
    }
}
