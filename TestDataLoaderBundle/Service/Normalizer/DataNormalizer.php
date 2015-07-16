<?php
/**
 * Created by PhpStorm.
 * User: vladimiralferov
 * Date: 16.07.15
 * Time: 13:47
 */

namespace TestDataLoaderBundle\Service\Normalizer;


use TestDataLoaderBundle\Service\Validator\ValidatorInterface;
use TestDataLoaderBundle\Utils\Data;

class DataNormalizer extends AbstractNormalizer {
    /**
     * @var LocationNormalizer $locationNormalizer
     */
    protected $locationNormalizer;
    /**
     * @param ValidatorInterface $validator
     * @param LocationNormalizer $locationNormalizer
     */
    public function construct(ValidatorInterface $validator, LocationNormalizer $locationNormalizer) {
        $this->validator = $validator;
        $this->locationNormalizer = $locationNormalizer;
    }

    /**
     * @param object $content
     * @return Data
     * @throws NormalizeException
     */
    public function denormalize($content)
    {
        if ($this->validateContent($content)) {
            $data = new Data;
            foreach ($content->locations as $location) {
                $data->addLocation($this->locationNormalizer->denormalize($location));
            }

            return $data;
        }

        throw new NormalizeException('Normalization failed');
    }
}