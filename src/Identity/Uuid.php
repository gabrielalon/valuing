<?php

namespace N3ttech\Valuing\Identity;

use Assert\Assertion;
use N3ttech\Valuing\VO;

final class Uuid extends VO implements AggregateId
{
    /**
     * @param string $uuid
     *
     * @throws \Assert\AssertionFailedException
     *
     * @return Uuid
     */
    public static function fromIdentity(string $uuid): Uuid
    {
        return new Uuid($uuid);
    }

    /**
     * {@inheritdoc}
     */
    protected function guard($uuid): void
    {
        Assertion::uuid($uuid, 'Invalid Uuid string: '.$uuid);
    }
}
