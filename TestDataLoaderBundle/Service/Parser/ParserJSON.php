<?php

namespace TestDataLoaderBundle\Service\Parser;

/**
 * Class ParserJSON
 * @package TestDataLoaderBundle\Service\Parser
 */
class ParserJSON implements ParserInterface {
    /**
     * @param $data
     * @return object
     * @throws DataParseException
     */
    public function parse($data)
    {
        $result = json_decode($data);
        if (!$result) {
            throw new DataParseException(sprintf(json_last_error_msg(), json_last_error()));
        }

        return $result;
    }
}