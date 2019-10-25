<?php

namespace N3ttech\Valuing\Identity\Utils;

use Assert;
use N3ttech\Valuing\Identity;

final class Collection extends \ArrayIterator
{
    /**
     * @param Identity\Uuid $uuid
     */
    public function add(Identity\Uuid $uuid): void
    {
        $this->offsetSet($uuid->toString(), $uuid);
    }

    /**
     * @param string $uuid
     *
     * @throws Assert\InvalidArgumentException
     *
     * @return Identity\Uuid
     */
    public function get(string $uuid): Identity\Uuid
    {
        if (false === $this->offsetExists($uuid)) {
            throw new Assert\InvalidArgumentException('Not Found Uuid string: '.$uuid, $uuid);
        }

        return $this->offsetGet($uuid);
    }

    /**
     * @param Collection $other
     *
     * @return bool
     */
    public function equals($other): bool
    {
        if (false == $other instanceof Collection) {
            return false;
        }

        /**
         * @var string
         * @var Identity\Uuid $value
         */
        foreach ($this->getArrayCopy() as $uuid => $value) {
            try {
                $otherValue = $other->get($uuid);
            } catch (Assert\InvalidArgumentException $e) {
                return false;
            }

            if (false === $value->equals($otherValue)) {
                return false;
            }
        }

        return true;
    }
}
