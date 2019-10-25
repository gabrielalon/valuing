<?php

namespace N3ttech\Valuing\Identity;

use Assert\Assertion;
use N3ttech\Valuing\VO;

/**
 * @property Utils\Collection $value
 */
final class Uuids extends VO
{
    /**
     * @param array $data
     *
     * @throws \Assert\AssertionFailedException
     *
     * @return Uuids
     */
    public static function fromArray(array $data): Uuids
    {
        return new Uuids($data);
    }

    /**
     * @param string $uuid
     *
     * @throws \Assert\AssertionFailedException
     */
    public function addUuid(string $uuid): void
    {
        $this->value->add(Uuid::fromIdentity($uuid));
    }

    /**
     * @param Uuids $other
     *
     * @return bool
     */
    public function equals($other): bool
    {
        if (false == $other instanceof Uuids) {
            return false;
        }

        return $this->value->equals($other->value);
    }

    /**
     * {@inheritdoc}
     */
    protected function guard($value): void
    {
        Assertion::isArray($value, 'Invalid Uuids array');
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Assert\AssertionFailedException
     */
    protected function setValue($data): void
    {
        $this->value = new Utils\Collection();

        foreach ($data as $uuid) {
            $this->addUuid($uuid);
        }
    }
}
