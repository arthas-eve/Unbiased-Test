<?php

namespace TestDataLoaderBundle\Service\Validator;


use TestDataLoaderBundle\Service\Response\IncorrectResponseException;

class CoordinatesValidator implements ValidatorInterface {
    /**
     * @param object $content
     * @return bool
     * @throws IncorrectResponseException
     */
    public function validate($content)
    {
        if (!property_exists($content, 'lat') || !property_exists($content, 'long')) {
            throw new IncorrectResponseException('Incorrect coordinates format');
        }

        return true;
    }
}