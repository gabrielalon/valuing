<?php

namespace N3ttech\Valuing\Option;

use Assert\Assertion;
use N3ttech\Valuing\VO;

abstract class Enum extends VO
{
    /**
     * {@inheritdoc}
     */
    protected function guard($value): void
    {
        Assertion::inArray($value, $this->validValues(), 'Invalid Value enum: '.$value);
    }

    /**
     * @return array
     */
    abstract protected function validValues(): array;
}
