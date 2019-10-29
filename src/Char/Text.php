<?php

namespace N3ttech\Valuing\Char;

use Assert\Assertion;
use N3ttech\Valuing\VO;

final class Text extends VO
{
    /**
     * @param string $text
     *
     * @throws \Assert\AssertionFailedException
     *
     * @return Text
     */
    public static function fromString(string $text): Text
    {
        return new Text($text);
    }

    /**
     * {@inheritdoc}
     */
    protected function guard($text): void
    {
        Assertion::string($text, 'Invalid Text string: '.$text);
        Assertion::maxLength(
            $text,
            $this->maxLength(),
            sprintf('Invalid Text string length (%d)', $this->maxLength())
        );
    }

    /**
     * @return int
     */
    protected function maxLength(): int
    {
        return pow(2, 8);
    }
}
