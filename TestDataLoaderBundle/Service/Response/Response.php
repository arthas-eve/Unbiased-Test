<?php

namespace TestDataLoaderBundle\Service\Response;

/**
 * Class Response
 * @package TestDataLoaderBundle\Service\Response
 */
class Response {
    /**
     * @var boolean
     */
    private $success;

    /**
     * @var object
     */
    private $data;


    /**
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * @param $success
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->success = $success;

        return $this;
    }

    /**
     * @return object
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param $data
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }
}