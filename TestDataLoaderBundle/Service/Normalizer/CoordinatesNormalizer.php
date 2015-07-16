<?php

namespace TestDataLoaderBundle\Service\Normalizer;
use TestDataLoaderBundle\Utils\Coordinates;

/**
 * Class CoordinatesNormalizer
 * @package TestDataLoaderBundle\Service\Normalizer
 */
class CoordinatesNormalizer extends AbstractNormalizer {
    /**
     * @param object $content
     * @return Coordinates
     * @throws NormalizeException
     */
    public function denormalize($content)
    {
        if ($this->validateContent($content)) {
            $coordinates = new Coordinates();
            $coordinates
                ->setLat($content->lat)
                ->setLong($content->long);

            return $coordinates;
        }

        throw new NormalizeException('Normalization failed');
    }
}