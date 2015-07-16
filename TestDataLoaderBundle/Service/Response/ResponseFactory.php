<?php

namespace TestDataLoaderBundle\Service\Response;

use TestDataLoaderBundle\Service\Validator\ResponseValidator;

/**
 * Class ResponseFactory
 * @package TestDataLoaderBundle\Service\Response
 */
class ResponseFactory {
    /**
     * @var ResponseValidator
     */
    private $responseValidator;

    /**
     * @param ResponseValidator $responseValidator
     */
    public function __construct(ResponseValidator $responseValidator)
    {
        $this->responseValidator = $responseValidator;
    }


    /**
     * @param $content
     * @return Response
     * @throws IncorrectResponseException
     */
    public function create($content)
    {
        if (!$this->responseValidator->validate($content)) {
            throw new IncorrectResponseException('Response validation failed');
        }
        $response = new Response();
        $response
            ->setSuccess($content->success)
            ->setData($content->data);

        return $response;
    }
}