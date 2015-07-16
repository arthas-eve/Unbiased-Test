<?php
/**
 * Created by PhpStorm.
 * User: vladimiralferov
 * Date: 16.07.15
 * Time: 13:32
 */

namespace TestDataLoaderBundle\Service\Normalizer;


use TestDataLoaderBundle\Service\Validator\ValidatorInterface;
use TestDataLoaderBundle\Utils\Location;

/**
 * Class LocationNormalizer
 * @package TestDataLoaderBundle\Service\Normalizer
 */
class LocationNormalizer extends AbstractNormalizer
{
    /**
     * @var CoordinatesNormalizer
     */
    protected  $coordinatesNormalizer;


    /**
     * @param ValidatorInterface $validator
     * @param CoordinatesNormalizer $coordinatesNormalizer
     */
    public function construct(ValidatorInterface $validator, CoordinatesNormalizer $coordinatesNormalizer) {
        $this->validator = $validator;
        $this->coordinatesNormalizer = $coordinatesNormalizer;
    }

    /**
     * @param object $content
     * @return Location
     * @throws NormalizeException
     */
    public function denormalize($content)
    {
         if ($this->validateContent($content)) {
             $location = new Location;
             $location
                 ->setName($content->name)
                 ->setCoordinates($this->coordinatesNormalizer->denormalize($content->coordinates));


             return $location;
         }

        throw new NormalizeException('Normalization failed');
    }
}