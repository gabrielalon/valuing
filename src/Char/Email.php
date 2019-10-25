<?php

namespace N3ttech\Valuing\Char;

use Assert\Assertion;
use N3ttech\Valuing\VO;

final class Email extends VO
{
    /**
     * @param string $email
     *
     * @throws \Assert\AssertionFailedException
     *
     * @return Email
     */
    public static function fromString(string $email): Email
    {
        return new Email($email);
    }

    /**
     * {@inheritdoc}
     */
    protected function guard($email): void
    {
        Assertion::email($email, 'Invalid Email string: '.$email);
    }
}
