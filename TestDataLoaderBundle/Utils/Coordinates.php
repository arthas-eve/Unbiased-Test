<?php

namespace TestDataLoaderBundle\Utils;

/**
 * Class Coordinates
 * @package TestDataLoaderBundle\Utils
 */
class Coordinates
{
    /**
     * @var float $lat
     */
    protected $lat;
    /**
     * @var float $long
     */
    protected $long;


    /**
     * @param $lat
     * @return $this
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * @param $long
     * @return $this
     */
    public function setLong($long)
    {
        $this->long = $long;

        return $this;
    }

    /**
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @return float
     */
    public function getLong()
    {
        return $this->long;
    }
}