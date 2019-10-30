<?php

namespace N3ttech\Valuing\Date;

use Assert;
use N3ttech\Valuing\VO;

final class Time extends VO
{
    /**
     * @param int $time
     *
     * @throws Assert\AssertionFailedException
     *
     * @return Time
     */
    public static function fromTimestamp(int $time): Time
    {
        return new Time($time);
    }

    /**
     * {@inheritdoc}
     */
    protected function guard($time): void
    {
        Assert\Assertion::date(date('Y-m-d H:i:s', $time), 'Y-m-d H:i:s', 'Invalid Timestamp value'.$time);
    }
}
