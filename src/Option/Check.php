<?php

namespace N3ttech\Valuing\Option;

use Assert\Assertion;
use N3ttech\Valuing\VO;

final class Check extends VO
{
    /**
     * @param bool $check
     *
     * @throws \Assert\AssertionFailedException
     *
     * @return Check
     */
    public static function fromBoolean(bool $check): Check
    {
        return new Check($check);
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return $this->value ? '1' : '0';
    }

    /**
     * {@inheritdoc}
     */
    protected function guard($value): void
    {
        Assertion::boolean($value, 'Invalid Value check: '.$value);
    }
}
