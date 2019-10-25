<?php

namespace N3ttech\Valuing\Number;

use Assert\Assertion;
use N3ttech\Valuing\VO;

final class Quantity extends VO
{
    /**
     * @param int $quantity
     *
     * @throws \Assert\AssertionFailedException
     *
     * @return Quantity
     */
    public static function fromNumber(int $quantity): Quantity
    {
        return new Quantity($quantity);
    }

    /**
     * {@inheritdoc}
     */
    protected function guard($value): void
    {
        Assertion::integer($value, 'Invalid Quantity value: '.$value);
    }
}
