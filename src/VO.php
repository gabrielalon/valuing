<?php

namespace N3ttech\Valuing;

abstract class VO implements Stringify
{
    /** @var mixed */
    protected $value;

    /**
     * @param mixed $value
     *
     * @throws \Assert\AssertionFailedException
     */
    protected function __construct($value)
    {
        $this->guard($value);
        $this->setValue($value);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toString();
    }

    /**
     * @param object $other
     *
     * @return bool
     */
    public function equals($other): bool
    {
        if (false == $other instanceof self) {
            return false;
        }

        return $this->value === $other->value;
    }

    /**
     * @return mixed
     */
    public function raw()
    {
        return $this->value;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return (string) $this->value;
    }

    /**
     * @param mixed $value
     */
    protected function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * @param mixed $value
     *
     * @throws \Assert\AssertionFailedException
     */
    abstract protected function guard($value): void;
}
