<?php

namespace N3ttech\Valuing\Char;

use Assert\Assertion;
use N3ttech\Valuing\VO;

final class Content extends VO implements Char
{
    /**
     * @param string $content
     *
     * @throws \Assert\AssertionFailedException
     *
     * @return Content
     */
    public static function fromString(string $content): Content
    {
        return new Content($content);
    }

    /**
     * {@inheritdoc}
     */
    protected function guard($content): void
    {
        Assertion::string($content, 'Invalid Content string: '.$content);
        Assertion::maxLength(
            $content,
            $this->maxLength(),
            sprintf('Invalid Content string length (%d)', $this->maxLength())
        );
    }

    /**
     * @return int
     */
    protected function maxLength(): int
    {
        return pow(2, 32);
    }
}
