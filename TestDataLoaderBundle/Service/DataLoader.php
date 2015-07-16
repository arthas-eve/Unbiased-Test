<?php
/**
 * Created by PhpStorm.
 * User: arthas
 * Date: 15.07.15
 * Time: 21:47
 */

namespace TestDataLoaderBundle\Service;
use TestDataLoaderBundle\Service\BuzzAdapter\BuzzAdapter;
use TestDataLoaderBundle\Service\Normalizer\DataNormalizer;
use TestDataLoaderBundle\Service\Parser\ParserJSON;
use TestDataLoaderBundle\Service\Response\Response;
use TestDataLoaderBundle\Service\Response\ResponseFactory;
use TestDataLoaderBundle\Utils\Data;

/**
 * Class DataLoader
 * @package TestDataLoaderBundle\Service
 */
class DataLoader implements DataLoaderInterface {
    /**
     * @var string
     */
    private $url;

    /**
     * @var ResponseFactory
     */
    private $responseFactory;

    /**
     * @var BuzzAdapter
     */
    private  $buzzAdapter;

    /**
     * @var ParserJSON
     */
    private $parserJSON;

    /**
     * @var DataNormalizer
     */
    private $dataNormalizer;

    /**
     * @var Response|null
     */
    private $lastResponse;


    /**
     * @param BuzzAdapter $buzzAdapter
     * @param ResponseFactory $responseFactory
     * @param ParserJSON $parserJSON
     * @param DataNormalizer $dataNormalizer
     * @param $url
     */
    public function __construct(BuzzAdapter $buzzAdapter, ResponseFactory $responseFactory, ParserJSON $parserJSON, DataNormalizer $dataNormalizer, $url)
    {
        $this->url = $url;
        $this->parserJSON = $parserJSON;
        $this->buzzAdapter = $buzzAdapter;
        $this->responseFactory = $responseFactory;
        $this->dataNormalizer = $dataNormalizer;
    }

    /**
     * @return Data
     * @throws BuzzAdapter\LoadDataException
     * @throws Normalizer\NormalizeException
     * @throws Parser\DataParseException
     * @throws Response\IncorrectResponseException
     */
    public function load()
    {
        $responseContent = $this->buzzAdapter->getResponseContent($this->url);
        $response = $this->responseFactory->create($this->parserJSON->parse($responseContent));

        return $this->dataNormalizer->denormalize($response->getData());
    }

    /**
     * @return null|Response
     */
    public function getLastResponse()
    {
        return $this->lastResponse;
    }
}