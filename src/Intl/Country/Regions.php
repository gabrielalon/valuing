<?php

namespace N3ttech\Valuing\Intl\Country;

use Assert\Assertion;
use N3ttech\Valuing\Intl\Language\Locales;
use N3ttech\Valuing\VO;

/**
 * @property \ArrayIterator $value
 */
final class Regions extends VO
{
    /**
     * @param array $regions
     *
     * @throws \Assert\AssertionFailedException
     *
     * @return Regions
     */
    public static function fromArray(array $regions): Regions
    {
        return new Regions($regions);
    }

    /**
     * @return array
     */
    public function raw(): array
    {
        $regions = [];

        /** @var Locales $region */
        foreach ($this->value->getArrayCopy() as $region) {
            $regions[] = $region->raw();
        }

        return $regions;
    }

    /**
     * {@inheritdoc}
     */
    protected function guard($regions): void
    {
        Assertion::isArray($regions, 'Invalid country regions');
    }

    /**
     * {@inheritdoc}
     *
     * @throws \Assert\AssertionFailedException
     */
    protected function setValue($regions): void
    {
        $this->value = new \ArrayIterator();

        /** @var string[] $region */
        foreach ($regions as $region) {
            $this->value->append(Locales::fromArray($region));
        }
    }
}
