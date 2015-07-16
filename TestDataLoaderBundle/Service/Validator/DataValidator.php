<?php

namespace TestDataLoaderBundle\Service\Validator;


use TestDataLoaderBundle\Service\Response\IncorrectResponseException;

/**
 * Class DataValidator
 * @package TestDataLoaderBundle\Service\Validator
 */
class DataValidator implements ValidatorInterface {
    /**
     * @param object $content
     * @return bool
     * @throws IncorrectResponseException
     */
    public function validate($content)
    {
        if (!property_exists($content, 'locations')) {
            throw new IncorrectResponseException('Incorrect data format');
        }

        if (!is_array($content->locations)) {
            throw new IncorrectResponseException('Locations is not array');
        }

        return true;
    }
}