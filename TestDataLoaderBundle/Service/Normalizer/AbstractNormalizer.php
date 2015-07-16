<?php

namespace TestDataLoaderBundle\Service\Normalizer;


use TestDataLoaderBundle\Service\Response\IncorrectResponseException;
use TestDataLoaderBundle\Service\Validator\ValidatorInterface;

/**
 * Class AbstractNormalizer
 * @package TestDataLoaderBundle\Service\Normalizer
 */
abstract class AbstractNormalizer implements NormalizerInterface
{
    /**
     * @var ValidatorInterface $validator
     */
    protected  $validator;


    /**
     * @param ValidatorInterface $validator
     */
    public function construct(ValidatorInterface $validator) {
        $this->validator = $validator;
    }

    /**
     * @param $content
     * @throws IncorrectResponseException
     * @return bool
     */
    protected function validateContent($content)
    {
        return $this->validator->validate($content);
    }

    abstract public function denormalize($content);
}