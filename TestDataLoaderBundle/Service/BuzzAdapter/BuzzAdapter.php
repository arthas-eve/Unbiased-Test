<?php

namespace TestDataLoaderBundle\Service\BuzzAdapter;
use Buzz\Browser;

/**
 * Class BuzzAdapter
 * @package TestDataLoaderBundle\Service\BuzzAdapter
 */
class BuzzAdapter {
    /**
     * @var Browser
     */
    protected $browser;

    /**
     * @param Browser $browser
     */
    public function __construct(Browser $browser) {
        $this->browser = $browser;
    }

    /**
     * @param $url
     * @return string
     * @throws LoadDataException
     */
    public function getResponseContent($url)
    {
        try {
            /** @var \Buzz\Message\Response $buzzResponse */
            $buzzResponse = $this->browser->get($url);

            if (!$buzzResponse->getContent()) {
                throw new \Exception('Empty response data');
            }
        } catch (\Exception $e) {
            throw new LoadDataException($e->getMessage(), $e->getCode());
        }

        return $buzzResponse->getContent();
    }
}