<?php

namespace N3ttech\Valuing\Number;

use Assert\Assertion;
use N3ttech\Valuing\VO;

final class Decimal extends VO
{
    /**
     * @param float $decimal
     *
     * @throws \Assert\AssertionFailedException
     *
     * @return Decimal
     */
    public static function fromFloat(float $decimal): Decimal
    {
        return new Decimal($decimal);
    }

    /**
     * {@inheritdoc}
     */
    protected function guard($value): void
    {
        Assertion::float($value, 'Invalid Decimal value: '.$value);
    }
}
