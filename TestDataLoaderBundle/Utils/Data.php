<?php

namespace TestDataLoaderBundle\Utils;

/**
 * Class Data
 * @package TestDataLoaderBundle\Utils
 */
class Data {
    /**
     * @var array
     */
    protected $locations = [];


    /**
     * @return array
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * @param $location
     * @return $this
     */
    public function addLocation($location)
    {
        $this->locations[] = $location;

        return $this;
    }

}