<?php

namespace TestDataLoaderBundle\Service;
use TestDataLoaderBundle\Utils\Data;

/**
 * Class DataLoaderInterface
 * @package TestDataLoaderBundle\Service
 */
interface DataLoaderInterface {
    /**
     * @return Data
     * @throws BuzzAdapter\LoadDataException
     * @throws Normalizer\NormalizeException
     * @throws Parser\DataParseException
     * @throws Response\IncorrectResponseException
     */
    public function load();
}