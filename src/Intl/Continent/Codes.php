<?php

namespace N3ttech\Valuing\Intl\Continent;

use Assert\Assertion;
use N3ttech\Valuing\VO;

/**
 * @property Collection $value
 */
final class Codes extends VO
{
    /**
     * @param array $codes
     *
     * @throws \Assert\AssertionFailedException
     *
     * @return Codes
     */
    public static function fromArray(array $codes): Codes
    {
        return new Codes($codes);
    }

    /**
     * @param string $code
     *
     * @throws \Assert\AssertionFailedException
     */
    public function addCode(string $code): void
    {
        $this->value->add(Code::fromCode($code));
    }

    /**
     * @return Code[]
     */
    public function getCodes(): array
    {
        return $this->value->getArrayCopy();
    }

    /**
     * @param Codes $other
     *
     * @return bool
     */
    public function equals($other): bool
    {
        if (false == $other instanceof Codes) {
            return false;
        }

        return $this->value->equals($other->value);
    }

    /**
     * @return string[]
     */
    public function raw(): array
    {
        return array_keys($this->getCodes());
    }

    /**
     * {@inheritdoc}
     */
    protected function guard($value): void
    {
        Assertion::isArray($value, 'Invalid Continent codes array');
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Assert\AssertionFailedException
     */
    protected function setValue($codes): void
    {
        $this->value = new Collection();

        foreach ($codes as $code) {
            $this->addCode($code);
        }
    }
}
