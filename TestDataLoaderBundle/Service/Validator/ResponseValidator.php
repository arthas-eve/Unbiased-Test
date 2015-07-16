<?php

namespace TestDataLoaderBundle\Service\Validator;


use TestDataLoaderBundle\Service\Response\IncorrectResponseException;

/**
 * Class ResponseValidator
 * @package TestDataLoaderBundle\Service\Validator
 */
class ResponseValidator implements ValidatorInterface {
    /**
     * @param object $content
     * @return bool
     * @throws IncorrectResponseException
     */
    public function validate($content)
    {
        if (!property_exists($content, 'data') || !property_exists($content, 'success')) {
            throw new IncorrectResponseException('Incorrect response format');
        }

        if (!$content->success) {
            throw new IncorrectResponseException(sprintf('API server error %s', $content->data->message));
        }

        return true;
    }
}