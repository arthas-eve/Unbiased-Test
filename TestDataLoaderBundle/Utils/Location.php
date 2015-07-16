<?php

namespace TestDataLoaderBundle\Utils;

/**
 * Class Location
 * @package TestDataLoaderBundle\Utils
 */
class Location {
    /**
     * @var string
     */
    protected $name;

    /**
     * @var Coordinates
     */
    protected $coordinates;


    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param $coordinates
     * @return $this
     */
    public function setCoordinates($coordinates)
    {
        $this->coordinates = $coordinates;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Coordinates
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }
}