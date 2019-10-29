<?php

namespace N3ttech\Valuing\Identity;

use Assert\Assertion;
use N3ttech\Valuing\VO;

final class Id extends VO implements AggregateId
{
    /**
     * @param int $id
     *
     * @throws \Assert\AssertionFailedException
     *
     * @return Id
     */
    public static function fromIdentity(int $id): Id
    {
        return new Id($id);
    }

    /**
     * {@inheritdoc}
     */
    protected function guard($id): void
    {
        Assertion::integer($id, 'Invalid Id integer: '.$id);
        Assertion::greaterThan($id, 0, 'Id should be greater than 0');
    }
}
