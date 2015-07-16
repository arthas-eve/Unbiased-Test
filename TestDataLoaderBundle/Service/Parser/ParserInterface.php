<?php

namespace TestDataLoaderBundle\Service\Parser;

/**
 * Interface ParserInterface
 * @package TestDataLoaderBundle\Service\BuzzAdapter
 */
interface ParserInterface {
    /**
     * @param string $data
     * @return object
     */
    public function parse($data);
}