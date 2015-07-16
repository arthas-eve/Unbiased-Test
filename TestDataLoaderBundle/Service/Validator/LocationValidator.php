<?php

namespace TestDataLoaderBundle\Service\Validator;


use TestDataLoaderBundle\Service\Response\IncorrectResponseException;

/**
 * Class LocationValidator
 * @package TestDataLoaderBundle\Service\Validator
 */
class LocationValidator implements ValidatorInterface {
    /**
     * @param object $content
     * @return bool
     * @throws IncorrectResponseException
     */
    public function validate($content)
    {
        if (!property_exists($content, 'name') || !property_exists($content, 'coordinates')) {
            throw new IncorrectResponseException('Incorrect location format');
        }

        if (!is_array($content->coordinates)) {
            throw new IncorrectResponseException('Incorrect location format, coordinates must be an array');
        }

        return true;
    }
}